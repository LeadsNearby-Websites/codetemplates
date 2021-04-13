const chokidar = require('chokidar');
const log = require('./logger');
const chalk = require('chalk');
const bs = require('browser-sync').create();
const Client = require('sftp-client-promise');
const conn = new Client();

const baseSftpConfig = {
  host: 'staging.lnbsvcs.com',
  port: 22,
  remoteRoot: 'public_html/wp-content/themes/hypercore-theme-child',
};

const customSftpConfig = require('./sftp-config.json');
const sftpConfig = { ...baseSftpConfig, ...customSftpConfig };

const checkConnection = async (config) => {
  if (config.user === 'root') {
    log.error('User root');
    return 'failed';
  }
  console.log('Connecting...');
  return await conn
    .connect(config)
    .then(() => {
      console.log(chalk.green('Connected sucessfully'));
      return 'success';
    })
    .catch((error) => {
      log.cantConnect(error);
      conn.end();
      return 'failed';
    });
};

const uploadFile = async (file) => {
  const path = require('path');
  const { remoteRoot } = sftpConfig;
  try {
    const rootExists = await conn.sftp('exists', { path: remoteRoot });
    if (!rootExists) {
      await conn.sftp('mkdir', { path: remoteRoot });
    }
    const dirExists = await conn.sftp('exists', {
      path: path.join(remoteRoot, path.dirname(file)),
    });
    if (!dirExists) {
      await conn.sftp('mkdir', {
        path: path.join(remoteRoot, path.dirname(file)),
      });
    }
    await conn.sftp('fastPut', {
      localPath: file,
      remotePath: path.join(remoteRoot, file),
    });
    const d = new Date();
    console.log(
      '[' +
        chalk.blue(
          `${d.getHours()}:${d.getMinutes()}:${d.getMilliseconds()} ${d.getMonth()}/${d.getDay()}/${d.getYear()}`
        ) +
        '] ' +
        chalk.green(`${file} was uploaded successfully`)
    );
    // await conn.end();
    bs.reload();
  } catch (error) {
    log.error(error);
    conn.end();
  }
};

const watcherOptions = {
  ignored: ['*.js', 'src', 'node_modules', '*.json', '.vscode'],
  persistent: true,
  awaitWriteFinish: {
    stabilityThreshold: 500,
    pollInterval: 100,
  },
};

checkConnection(sftpConfig)
  .then(async (connectionStatus) => {
    if (connectionStatus !== 'failed') {
      console.log('Watching files for changes\n');
      const watcher = chokidar.watch('./', watcherOptions);
      await watcher.on('change', async (filePath) => {
        await uploadFile(filePath);
      });
      watcher.on('error', (error) => log.error(error));
      bs.init({
        proxy: `http://52.73.242.68/~${sftpConfig.username}/`,
        ui: false,
      });
    } else {
      console.log(chalk.red('Unable to start watching files'));
      return false;
    }
  })
  .catch((error) => {
    log.error(error);
  });

if (process.platform === 'win32') {
  var rl = require('readline').createInterface({
    input: process.stdin,
    output: process.stdout,
  });

  rl.on('SIGINT', function () {
    process.emit('SIGINT');
  });
}

process.on('SIGINT', async function () {
  // end connection
  console.log(chalk.yellow('\nClosing connection...'));
  await conn.end();
  console.log(chalk.red('Connection closed.'));
  process.exit();
});
