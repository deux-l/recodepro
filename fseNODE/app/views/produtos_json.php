<!DOCTYPE html>
<html lang="pt-br">
<!--Menu-->
<?php 
            include_once('../includes/menuNav.html')
        ?>
<!--Fim menu-->

<body>
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

            <?php
    $dados_json = file_get_contents("http://study.com/fullstackeletrophp/views/getContent.php?table=produtos");

    $dados = json_decode($dados_json, true);
    //print_r( $dados );

    foreach ($dados as $key => $row) {
        //print_r( $row );
        //echo "<hr>";
?>

            <td class="td-lista-produtos" id="<?php echo $row[" categoria"];?>" style="display: inline-block;">
                <img src="<?php echo $row["imagem"];?>" width='120' onMouseOver="zoomIn(this)"
                onMouseOut="zoomOut(this)">
                <br>
                <p>
                    <?php echo $row["descricao"];?>
                </p>
                <hr>
                <font face="Arial" size="2"><strike>R$
                        <?php echo $row["preco"];?>
                    </strike></font><br>
                <font face="Arial" size="4" color="red">R$
                    <?php echo $row["precofinal"];?>
                </font>
            </td>

            <?php

    }

        ?>

        </tr>
    </table>
    <br> <br> <br> <br> <br>

    <h4>Formas de pagamento</h4>
    <img class="pag-img" src="../imagens/forma de pag-logos-cartoes.jpg" alt="Formas de pagamento">

    <center>
        <font face="Times" size=3> Carlos &copy; RecodePro 2020</font>
    </center>
</body>

</html>