<?php

    $hostName = "localhost";
    $bancoDeDados = "cadastro_usuarios";
    $usuario = "root";
    $senha = "";

    $mysqli new mysqli($hostName, $usuario, $senha, $bancoDeDados)
   
    if($mysqli->connect_errno){
        echo "Falha ao conectar : (" . $mysqli->connect_errno . ")"  $mysqli->connect_errno;    
    }
        

     if(isset($_POST['submit'])){
         print_r($_POST['nome']);
         print_r($_POST['email']);
         print_r($_POST['telefone']);

     }



?>