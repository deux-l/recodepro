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

   if(isset($_POST['nome']) && isset($_POST['msg'])){
       $nome = $_POST['nome'];
       $msg = $_POST['msg'];

       /*echo "Nome: $nome <br> Disse: $msg ";*/
       $sql = "insert into comentarios (nome, msg) values('$nome','$msg')";
       $result = $conn->query($sql);
   }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/main.css"> 
    <title>Contato - Full Stack Eletro</title>
</head>

<body>
    <!--Menu-->
        <?php 
            include_once('../includes/menuv.html')
        ?>
    <!--Fim menu-->
    <h2>Contato</h2>
    <hr>
<div>
    <table align="center" class="contatos">
        <tr>
            <td>
                <img src="../imagens/email.jpeg" alt="email">
                <p>fullstackeletro@loja.com</p>
            </td>
            <td>
                <img src="../imagens/zap.jpeg" alt="whatsapp">
                <p>(11) 55555-3333</p>
            </td>
        </tr>
    </table>

    <form method="post" action="">
        <h4>Nos envie uma mensagem, elogio ou reclamação</h4>
        <h5>Nome:</h5>
        <input type="text" name="nome" size="30">
        <h5>Mensagem: </h5>
        <input type="text" name="msg" style="height:50px;width:300px;">
        <br>
        <input type="submit"value="Enviar">
    </form>

    <div id="comentsphp">
         <?php

            $sql = "select * from comentarios";
            $result = $conn->query($sql);

            if($result->num_rows > 0){
                while($rows = $result->fetch_assoc()){
                echo "<center><br>Nome: ".$rows['nome']."<br>Disse: ".$rows['msg']."<br>Em: ".$rows['data']."<center><br><hr>";
                }
            } else {
                echo "Nenhum comentario";
            }   
        ?>
        </div>

    <br> <br> <br> <br> <br>
</div>
  

    <h4>Formas de pagamento</h4>
    <img class="pag-img" src="../imagens/forma de pag-logos-cartoes.jpg" alt="Formas de pagamento">

    <center><font face="Times" size=3 > Carlos &copy; RecodePro 2020</font></center>
</body>

</html>
