const express = require('express')
const app = express()
const mongoose = require('mongoose')
const bodyParser = require('body-parser')
//criptografando senha
const bcrypt = require('bcryptjs')

app.use(express.json());

// Configuração do BodyParser
app.use(bodyParser.urlencoded({extended: true}))
app.use(bodyParser.json())

//view
app.set('view engine', 'ejs')
app.set('views', './src/views')

app.get("/", (req,res)=>{
    res.render("index")
})

//models
require("./src/models/Usuario");
const Usuario = mongoose.model("usuarios");

//Conexão db
require("./src/db/connect");

app.get("/usuarios", async (req, res) => {
  const usuariosResponse = await Usuario.find();
  const usuariosJson = await usuariosResponse;

  return res.json(usuariosJson);
});

app.post("/cadusuarios", async (req, res) => {
  const validate = await Usuario.findOneAndDelete({ email: req.body.email });

  if (validate) {
    return res.json({
      message: "já existe um usuario com este email cadastrado",
    });
  } else {
    const novoUsuario = new Usuario({
      nome: req.body.nome,
      email: req.body.email,
      senha: req.body.senha,
    });

    bcrypt.genSalt(10, (error, salt) => {
      //gerando nosso hash
      bcrypt.hash(novoUsuario.senha, salt, (error, hash) => {
        if (error) {
          res.json({ message: "erro ao cadastrar user" });
        } else {
          //colocando hash na senha
          novoUsuario.senha = hash;
          novoUsuario.save();

          res.json({
            message: "Cadastro efetuado com sucesso",
            usuario: novoUsuario,
          });
        }
      });
    });
  }
});

app.put("/usuarios/:id", async (req, res) => {
  const { id } = req.params;

  //Pesquisando por um único user
  const usuario = await Usuario.findOne({ _id: id });

  //Alterando os dados existentes
  usuario.nome = req.body.nome;
  usuario.email = req.body.email;
  usuario.senha = req.body.senha;

  //Salvando alterações
  usuario.save();

  res.json({ message: "Usuario Alterado", usuario: usuario });
});

app.delete("/usuarios/:id", async (req, res) => {
  const { id } = req.params;
  const usuario = await Usuario.findOneAndDelete({ _id: id });

  res.json({ message: "Usuario deletado com sucesso", usuario: usuario });
});

app.listen(3333);
