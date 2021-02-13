const mongoose = require("mongoose");

function connect() {
  mongoose
    .connect("mongodb://localhost/pjNoSQL_BD", {
      useNewUrlParser: true,
      useUnifiedTopology: true,
    })
    .then(() => {
      console.log("Conectado com o Banco 'pjNoSQL_BD'");
    })
    .catch(() => {
      console.log(`erro ao tentar a conexão ${error}`);
    });
}

module.exports = connect()