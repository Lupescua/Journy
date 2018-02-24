const mysql = require('mysql');
const bcrypt = require('bcrypt-nodejs');
const mysqlConfig = require('./config.js');
const connection = mysql.createConnection(mysqlConfig);

exports.connection = connection;
