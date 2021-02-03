const mysql = require('mysql');

const connMySQL = function(){
    console.log("conexão com bd estabelecida")
    return connection = mysql.createConnection({
        host:'localhost',
        user:'root',
        password:'123',
        database:'projeto_node'
    })
}

module.exports = function(){
    return connMySQL;
}