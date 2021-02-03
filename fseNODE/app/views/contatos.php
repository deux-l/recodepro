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
<!--Menu-->
<?php 
            include_once('../includes/menuNav.html')
        ?>
<!--Fim menu-->

<!--BOOTSTRAP-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<!--BOOTSTRAP-->

<body>
    <h2>Contato</h2>
    <table class="contatos">
        <tr>
            <td>
                <p><img src="../imagens/email.jpeg" alt="email">fullstackeletro@loja.com</p>
            </td>
            <td>
                <p><img src="../imagens/zap.jpeg" alt="whatsapp">(11) 55555-3333</p>
            </td>
        </tr>
    </table>
    <hr>
    <div class="container">
        <form method="post" action="">
            <h5>Nos envie uma mensagem, elogio ou reclamação</h5>
            <div class="p-3 mb-3 bg-light">

                <div class="mb-3">
                    <label class="form-label">Nome</label>
                    <input type="text" name="nome" class="form-control" style="margin: auto;">
                </div>

                <div class="mb-3">
                    <label class="form-label">Mensagem</label>
                    <input type="text" name="msg" class="form-control" style="margin: auto;">
                </div>

                <input type="submit" value="Enviar Mensagem" class="btn btn-primary">

            </div>
        </form>
        <hr>
        <div id="comentsphp">
            <h5 class="col-sm-4 col-md-2 alert alert-info">Comentários</h5>

            <?php

            $sql = "select * from comentarios";
            $result = $conn->query($sql);

            if($result->num_rows > 0){
                while($rows = $result->fetch_assoc()){
                   // echo "<center><br>Nome: ".$rows['nome']."<br>Disse: ".$rows['msg']."<br>Em: ".$rows['data']."<center><br><hr>";
               ?>

            <ul class="list-group">
                <li class="list-group-item">Nome:
                    <?php echo $rows['nome'] ?><br>
                    Disse:
                    <?php echo $rows['msg'] ?><br>
                    Em:
                    <?php echo $rows['data'] ?>
                </li>
            </ul>

            <?php   
                        }
                    } else {
                        echo "Nenhum comentario";
                    }   
                ?>


        </div>

        <br><br>
    </div>


    <h4>Formas de pagamento</h4>
    <img class="pag-img" src="../imagens/forma de pag-logos-cartoes.jpg" alt="Formas de pagamento">

    <center>
        <font face="Times" size=3> Carlos &copy; RecodePro 2020</font>
    </center>
</body>

</html>