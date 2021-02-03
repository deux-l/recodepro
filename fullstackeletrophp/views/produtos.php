<?php 
   $servername = "localhost";
   $username   = "root";
   $password   = "123";
   $database   = "fseletro";
    
   //criandoConexão
   $conn = mysqli_connect($servername,$username,$password,$database);
   //VerificandoConexão
   if (!$conn) {
       die("Conexão ao BD falhou: ". mysqli_connect_error());
   }

?>


<!DOCTYPE html>
<html lang="pt-br">
<!--Menu-->
<?php 
            include_once('../includes/menuNav.php')
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
            
            $sql = "select * from produtos";
            $result = $conn->query($sql);

            if($result->num_rows > 0){
                while($rows = $result->fetch_assoc()){
                    
            ?> 

            <td class="td-lista-produtos" id="<?php echo $rows["categoria"];?>" style="display: inline-block;">
            <img src="<?php echo $rows["imagem"];?>" width='120' onMouseOver="zoomIn(this)" onMouseOut="zoomOut(this)">
            <br>
            <p><?php echo $rows["descricao"];?></p>
            <hr>
            <font face="Arial" size="2"><strike>R$ <?php echo $rows["preco"];?></strike></font><br>
            <font face="Arial" size="4" color="red">R$ <?php echo $rows["precofinal"];?></font>
            </td>

            <?php
                }
            } else {
                echo "Nenhum produto cadastrado";
            }

            
            ?>

            
        </tr>
    </table>
    <br> <br> <br> <br> <br>

    <h4>Formas de pagamento</h4>
    <img class="pag-img" src="../imagens/forma de pag-logos-cartoes.jpg" alt="Formas de pagamento">

    <center><font face="Times" size=3 > Carlos &copy; RecodePro 2020</font></center>
</body>

</html>
