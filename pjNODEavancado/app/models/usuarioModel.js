module.exports = function(){
    //busca todos os usuarios sem filtro
    this.getUsuarios = function(connection,callback){
        connection.query("SELECT * FROM usuario",callback)
    }
    //Busca usuarios por email
    this.getUsuarioId = function(id,connection,callback){
        connection.query("SELECT * FROM usuario WHERE id = "+id,callback);
    }
    //Busca user by id
    this.getUsuarioEmail = function (email,connection,callback){
        connection.query("SELECT * FROM usuario WHERE email = "+email,callback);
    }
    //Insere um novo usuario na base
    this.setUsuario = function(usuario, connection,callback){
        connection.query('INSERT INTO usuario set ?',usuario)
    }
    return this;
}