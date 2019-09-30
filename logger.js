const chalk = require('chalk');

module.exports.error = function(error) {
  console.error(error);
};

module.exports.cantConnect = function() {
  console.error(chalk.red('Unable to connect to server'));
};
