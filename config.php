<?php
   
   $con = mysqli_connect('localhost','root','');

    mysqli_select_db('cadastro_usuarios', $con);

    if($con->connect_errno)
    {
        echo "erro"
    }else{
        echo "conexao feita corretamente"
    }
?>