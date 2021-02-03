const express = require('express');
const consign = require('consign');
const bodyParser = require('body-parser');
const {check, validationResult} = require('express-validator')


const app = express();
// app.use(express.static('././app'));
app.set('view engine','ejs');
app.set('views','././app/views')    

app.use(bodyParser.urlencoded({extended:true}));

consign()
.include('././app/config/database.js')
.then('././app/models')
.then('././app/routes')
.into(app);

module.exports = app;