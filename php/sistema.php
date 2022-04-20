<?php
session_start();
include_once('config.php')
//print_r($_SESSION);
if((!isset($_SESSION['email'])==true) and(!isset($_SESSION['senha'])==true)){
    
    header('Location: login.php');
}
$logado = $_SESSION['email'];


$sql = "SELECT * FROM usuarios ORDER BY id DESC";

$result = $conexao->query($sql);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Bem-vindo</title>
    <style>
          body{
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            background-image: linear-gradient(45deg, #0346aa,  #0346aa);
            color:#FFBF00;
            text-align:center;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
  <span class="navbar-text">
    
  </span>
  <div class=d-flex>
      <a href="sair.php" class="btn btn-danger me-5">Sair</a></div>
</nav>
<br>
    <?php
    echo"<h1>Bem-vindo  <u>$logado</u></h>";
    ?>
</body>
</html>