const chokidar = require('chokidar');
const log = require('./logger');
const chalk = require('chalk');
const bs = require('browser-sync').create();

const config = {
  host: 'staging.lnbsvcs.com',
  port: 22,
  username: 'user',
  password: 'password',
};

const Client = require('sftp-client-promise');
const conn = new Client();
let connectionStatus = 'failed';

const checkConnection = async () => {
  console.log('Connecting...');
  return await conn
    .connect(config)
    .then(() => {
      connectionStatus = 'success';
      console.log(chalk.green('Connected sucessfully'));
    })
    .catch(error => {
      log.cantConnect(error);
      conn.end();
    });
};

const uploadFile = async file => {
  const path = require('path');
  const remoteRoot = 'public_html/wp-content/themes/Avada-Child-Theme';

  try {
    const rootExists = await conn.sftp('exists', { path: remoteRoot });
    if (!rootExists) {
      await conn.sftp('mkdir', { path: remoteRoot });
    }
    const dirExists = await conn.sftp('exists', {
      path: path.dirname(file).replace('public/theme', remoteRoot),
    });
    if (!dirExists) {
      await conn.sftp('mkdir', {
        path: path.dirname(file).replace('public/theme', remoteRoot),
      });
    }
    await conn.sftp('fastPut', {
      localPath: file,
      remotePath: path.join(
        path.dirname(file).replace('public/theme', remoteRoot),
        path.basename(file)
      ),
    });
    const d = new Date();
    console.log(
      '[' +
        chalk.blue(
          `${d.getHours()}:${d.getMinutes()}:${d.getMilliseconds()} ${d.getMonth()}/${d.getDay()}/${d.getYear()}`
        ) +
        '] ' +
        chalk.green(`${path.basename(file)} was uploaded successfully`)
    );
    // await conn.end();
    bs.reload();
  } catch (error) {
    log.error(error);
    conn.end();
  }
};

const watcherOptions = {
  //   ignored: '**/**/style.css',
  persistent: true,
  awaitWriteFinish: {
    stabilityThreshold: 500,
    pollInterval: 100,
  },
};

checkConnection()
  .then(async () => {
    if (connectionStatus !== 'failed') {
      console.log('Watching files for changes\n');
      const watcher = chokidar.watch('public/theme/', watcherOptions);
      await watcher.on('change', async filePath => {
        await uploadFile(filePath);
      });
      watcher.on('error', error => log.error(error));
      bs.init({
        proxy: 'https://www.leadsnearby.com',
        ui: false,
      });
    } else {
      console.log(chalk.red('Unable to start watching files'));
      return false;
    }
  })
  .catch(error => {
    log.error(error);
  });

if (process.platform === 'win32') {
  var rl = require('readline').createInterface({
    input: process.stdin,
    output: process.stdout,
  });

  rl.on('SIGINT', function() {
    process.emit('SIGINT');
  });
}

process.on('SIGINT', async function() {
  // end connection
  console.log(chalk.yellow('\nClosing connection...'));
  await conn.end();
  console.log(chalk.red('Connection closed.'));
  process.exit();
});
