const {check, validationResult} = require("express-validator")
const crypto = require('crypto')

module.exports = function (app) {

    app.get("/usuariocad", function(req,res){
        res.render("usuariocad",{validacao:{errors:{},}, dados:{}})
    })

    app.post('/usuario/salvar',[
        check('nome', 'nome obrigatorio!').exists(),
        check('usuario','usuario obrigatorio').exists().isLength({min:3,max:15}),
        check('senha','senha precisa ser maior que 3 digitos e no maximo 15').exists().isLength({min:3,max:15}),
        check('email','email obrigatorio').isEmail().normalizeEmail(),
    ], function(req,res){
        
        var usuario = req.body
        var erros = validationResult(req)

        var senhaCriptografada = crypto.createHash('md5').update(usuario.senha).digest("hex")
        usuario.senha = senhaCriptografada;

        if(!erros.isEmpty()){
            res.render('usuariocad',{validacao:erros, dados:usuario})
            console.log(erros);
            return;
        }

        var connection = app.app.config.database()
        var usuarioModel = app.app.models.usuarioModel
        usuarioModel.setUsuario(usuario,connection,function(error, results){

        })

        usuarioModel.getUsuarios(connection,
            function(error,results,fields){
                console.log(error,results)
                res.render('usuarios',{dados:results})
            })
    })

}