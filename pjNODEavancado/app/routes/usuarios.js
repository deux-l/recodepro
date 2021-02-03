module.exports = function(app){

    app.get('/', function(req,res){

        var connection = app.app.config.database()

        var query = app.app.models.usuarioModel
        query.getUsuarios(connection,
            function(error,results,filds){
                console.log(error,results)
                res.render('usuarios',{dados:results})
            
            })
    })

    app.post('/usuarios/buscar/email', function(req,res){
        var usuario = req.body
        var connection = app.app.config.database()
        var usuarioModel = app.app.models.usuarioModel

        usuarioModel.getUsuarioEmail(usuario,connection,function(error,results){
            console.log(error,results,usuario)
            res.render('usuarios',{dados:results})
        })
    })

    app.post('/usuarios/buscar/id', function(req,res){
        var usuario = req.body
        var connection = app.app.config.database()
        var usuarioModel = app.app.models.usuarioModel

        usuarioModel.getUsuarioId(usuario,connection,function(error, results){
            console.log(error,results)
            res.render('usuarios', {dados:results})
        })
    })

}