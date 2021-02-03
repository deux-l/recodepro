
module.exports = function (app){

    app.get('/', function(req,res){
        res.render('./index');
    })

    app.get('/loja', function(req,res){
        res.render('./loja');
    })
    
}