// função para exibir categorias
function exibir_categoria(categoria){

    let elementos = document.getElementsByClassName('td-lista-produtos');
    for(var i=0; i<elementos.length; i++){
        if (categoria == elementos[i].id)
            elementos[i].style = "display: inline-block";
        else
            elementos[i].style = "display:none";
    }
}
let exibir_todos = () => {
    let elementos = document.getElementsByClassName('td-lista-produtos');

    for(var i=0; i<elementos.length; i++){
            elementos[i].style = "display: inline-block";
    }
}

// Função para dar destaque a imagem ao passar do mouse

let zoomIn = (imagem) => {
    if (imagem.width == 120)
        imagem.width = 180;
    else
        imagem.width = 120;
}

let zoomOut = (imagem) => {
    if (imagem.width == 120)
        imagem.width = 180;
    else
        imagem.width = 120;
}


