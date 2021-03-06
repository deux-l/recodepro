<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/main.css"> 
    <script src="../js/funcoes.js"></script>
    <title>Produtos - Full Stack Eletro</title>
</head>

<body>
    <!--Menu-->
    <table class="menu">
        <tr class="cor-font">
            <td><a href="../index.php"><img src="../imagens/logo.jpg" alt="logo-fullStackEletro"></a></td> 
            <td><a href="produtos.php" title="Conheça nossos produtos!">Produtos</a></td> 
            <td><a href="loja.php">Nossas lojas</a></td> 
            <td><a href="contatos.php">Contato</a></td>   
        </tr>
    </table>
    <!--Fim menu-->
    <h2>Produtos</h2>
    <hr>
    <table class="lista-produtos" cellpadding="20">
        <tr>
            <td rowspan="5" class="ul-categorias">
                <h2>Categorias</h2>
                <ul>
                    <li onclick="exibir_todos()">Todos(8)</li>
                    <li onclick="exibir_categoria('geladeira')">Geladeiras(3)</li>
                    <li onclick="exibir_categoria('fritadeira')">Airfryer(2)</li>
                    <li onclick="exibir_categoria('tv')">Tvs(3)</li>
                </ul>
            </td>
            <td class="td-lista-produtos" id="tv" style="display: inline-block;">
                <img src="../imagens/tv1.jpg" alt="televisao" width='120' onMouseOver="zoomIn(this)" onMouseOut="zoomOut(this)">
                <br>
                <p>Tv 50 pol</p>
                <hr>
                <font face="Arial" size="2"><strike>R$ 2.000,00</strike></font><br>
                <font face="Arial" size="4" color="red">R$ 1.599,00</font>
            </td>
            <td class="td-lista-produtos" id="geladeira" style="display: inline-block;">
                <img src="../imagens/hela2.webp" alt="geladeira-brastemp" width='120' onMouseOver="zoomIn(this)" onMouseOut="zoomOut(this)">
                <br>
                <p>Geladeira frost</p>
                <hr>
                <font face="Arial" size="2"><strike>R$ 1.000,00</strike></font><br>
                <font face="Arial" size="4" color="red">R$ 399,00</font>
            </td>
            <td class="td-lista-produtos" id="tv" style="display: inline-block;;">
                <img src="../imagens/tv2.jpg" alt="televisao" width='120' onMouseOver="zoomIn(this)" onMouseOut="zoomOut(this)">
                <br>
                <p>Tv LG</p>
                <hr>
                <font face="Arial" size="2"><strike>R$ 1.000,00</strike></font><br>
                <font face="Arial" size="4" color="red">R$ 599,00</font>
            </td>
            <td class="td-lista-produtos" id="geladeira" style="display: inline-block;">
                <img src="../imagens/gBras.jpg" alt="geladeira-brastemp" width='120' onMouseOver="zoomIn(this)" onMouseOut="zoomOut(this)">
                <br>
                <p>Geladeira Brastemp</p>
                <hr>
                <font face="Arial" size="2"><strike>R$ 6.000,00</strike></font><br>
                <font face="Arial" size="4" color="red">R$ 4.599,00</font>
            </td>
            <td class="td-lista-produtos" id="fritadeira" style="display: inline-block;">
                <img src="../imagens/air1.webp" alt="fritadeira" width='120' onMouseOver="zoomIn(this)" onMouseOut="zoomOut(this)">
                <br>
                <p>Airfryer</p>
                <hr>
                <font face="Arial" size="2"><strike>R$ 300,00</strike></font><br>
                <font face="Arial" size="4" color="red">R$ 200,00</font>
            </td>
            <td class="td-lista-produtos" id="tv" style="display: inline-block;;">
                <img src="../imagens/tv.jpg" alt="televisao" width='120' onMouseOver="zoomIn(this)" onMouseOut="zoomOut(this)">
                <br>
                <p>Tv led</p>
                <hr>
                <font face="Arial" size="2"><strike>R$ 1.000,00</strike></font><br>
                <font face="Arial" size="4" color="red">R$ 999,00</font>
            </td>

            <td class="td-lista-produtos" id="geladeira" style="display: inline-block;">
                <img src="../imagens/gela1.webp" alt="geladeira1" width='120' onMouseOver="zoomIn(this)" onMouseOut="zoomOut(this)">
                <br>
                <p>Geladeira frost free</p>
                <hr>
                <font face="Arial" size="2"><strike>R$ 5.000,00</strike></font><br>
                <font face="Arial" size="4" color="red">R$ 3.599,00</font>
            </td>
    
                <td class="td-lista-produtos" id="fritadeira" style="display: inline-block;">
                    <img src="../imagens/airfryer.png" alt="fritadeira2" width='120' onMouseOver="zoomIn(this)" onMouseOut="zoomOut(this)">
                    <br>
                    <p>Fritadeira</p>
                    <hr>
                    <font face="Arial" size="2"><strike>R$ 400,00</strike></font><br>
                    <font face="Arial" size="4" color="red">R$ 300,00</font>
                </td>
        </tr>
    </table>
    <br> <br> <br> <br> <br>

    <h4>Formas de pagamento</h4>
    <img class="pag-img" src="../imagens/forma de pag-logos-cartoes.jpg" alt="Formas de pagamento">

    <center><font face="Times" size=3 > Carlos &copy; RecodePro 2020</font></center>
</body>

</html>
