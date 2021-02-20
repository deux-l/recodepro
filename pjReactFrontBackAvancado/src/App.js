import React from "react";

export default function AppComponent(props) {
  
    function excluirItemLista(listaId){
        console.log(listaId)
        // document.getElementById(listaId).style.display = "block";
    }

  return (
    <>
      <h3>Lista de compras</h3>
      <ul>
        {props.lista.map(lista => (
          
            <li key={lista.id}>
            <span>
              {lista.nome} - {lista.mensagem}
            </span>
            <button type="button" onClick={() => excluirItemLista(lista.id)}> Excluir</button>
          </li>
          
        ))}
      </ul>
    </>
  );
}
