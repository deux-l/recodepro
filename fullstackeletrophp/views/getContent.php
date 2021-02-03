<?php 
   $servername = "localhost";
   $username   = "root";
   $password   = "123";
   $database   = "fseletro";

   $tabela = $_GET['table'];
    
   //criandoConexão
   $conn = mysqli_connect($servername,$username,$password,$database);
   //VerificandoConexão
   if (!$conn) {
       die("Conexão ao BD falhou: ". mysqli_connect_error());
   }

   
   $sql = "select * from $tabela";
   $result = $conn->query($sql);

   print_r(json_encode($result->fetch_all(MYSQLI_ASSOC)));

   mysqli_close($conn);
?>
