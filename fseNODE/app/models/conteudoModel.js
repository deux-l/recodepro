module.exports = function(){

    this.getConteudo = function (connection, callback){
        connection.query("SELECT * FROM conteudo",callback);
    }

    this.getConteudo = function (connection, callback){
        connection.query("SELECT * FROM conteudo WHERE categoria = 'geladeira'",callback);
    }

    this.salvarConteudo = function(conteudo,connection,callback){
        connection.query('insert into conteudo set ?', conteudo);
    }

    return this;
}