const app = require('./app/config/server');

var rotaHome = require('./app/routes/home')(app);

app.listen(3012, function(){
    console.log('servidor rodando com express, ejs e commumJs');
});


// var http = require('http');
// var server = http.createServer(function(req,res){
//     var categoria = req.url;
//     if(categoria == '/frontend'){
//         res.end("<html><body>Vamos de frontend.</body></html>");
//     } else if (categoria == '/backend'){
//         res.end("<html><body>Vamos de backend.</body></html>");
//     } else if (categoria == '/servidores'){
//         res.end("<html><body>Vamos de servidores.</body></html>");
//     } else {
//         res.end("<html><body>Hello there!</body></html>");
//     }
// });

// server.listen(3001);
// console.log("servidor ativo!");



// var express = require('express');
// var app = express();

// app.get('/', function(req,res){
//     res.send("<html><body>Hello there!</body></html>");
// });

// app.get('/backend', function(req,res){
//     res.send("<html><body>Hello galera do back!</body></html>");
// });

// app.get('/frontend', function(req,res){
//     res.send("<html><body>Hello galera do front!</body></html>");
// });

// app.listen(3001, function(){
//     console.log("servidor rodando com Express");
// });


// var express = require('express');
// var app = express();
// app.set('view engine','ejs');

// app.get('/', function(req,res){
//     res.render('index');
// });

// app.get('/backend', function(req,res){
//     res.render('backend');
// });

// app.get('/frontend', function(req,res){
//     res.render('frontend');
// });

// app.listen(3001,function(){
//     console.log('servidor rodando com express e ejs');
// });
