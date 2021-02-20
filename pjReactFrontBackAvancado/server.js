import express from "express";
import React from "react";
import ReactDOM from "react-dom/server";
import axios from "axios";
import {lazy, Suspense} from 'react';

import AppComponent from "./src/App";

const app = express();

//Code splitting
import Header from './Header'

app.use(express.static('dist/public'))

app.get("/", function (req, res) {
  axios.get("http://localhost:3030/lista").then(function (response) {

    const html =
      `
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <center>
    ${ReactDOM.renderToString(<Header />)}
    <hr />
    <body>
        <div id="app">
            ${ReactDOM.renderToString(<AppComponent lista={response.data.slice(0, 4)} />)}
        <div/>
        <script>
          localStorage.setItem('lista', '${JSON.stringify(response.data)}')
        </script>
        <script src="bundle_client.js"></script>
    </body>
    </html>
    </center>
    `
    res.send(html);
  })

});

app.get("/lista", function (req, res) {
  res.send([
    {
      id: "01",
      nome: "Ovos",
      message: "proteina",
    },
    {
      id: "02",
      nome: "Carne moida",
      message: "proteina",
    },
    {
      id: "03",
      nome: "Tilapia",
      message: "proteina",
    },
    {
      id: "04",
      nome: "Macarao integral",
      message: "carboidrato",
    },
    {
      id: "05",
      nome: "Arroz integral",
      message: "carboidrato",
    },
    {
      id: "06",
      nome: "Aveia em flocos",
      message: "fibras",
    },
    {
      id: "07",
      nome: "Leite desnatado",
      message: "carboidrato",
    },
    {
      id: "08",
      nome: "Sucralose",
      message: "adocante",
    },
    {
      id: "09",
      nome: "Acucar mascavo",
      message: "carboidrato",
    },
    {
      id: "10",
      nome: "Barra de sereais - obs: diversos sabores",
      message: "carboidrato",
    },
  ]);
});

app.listen(3030, function () {
  console.log("servidor na porta 3030");
});
