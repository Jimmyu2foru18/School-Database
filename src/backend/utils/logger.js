const { createLogger, format, transports } = require('winston');

const logger = createLogger({
  level: 'info',
  format: format.combine(
    format.timestamp(),
    format.prettyPrint()
  ),
  transports: [
    new transports.Console(),
    new transports.File({ filename: 'combined.log' })
  ],
});

module.exports = logger; 