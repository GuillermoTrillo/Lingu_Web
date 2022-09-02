<?php

    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $bncdd = "db_oceano";

    $con = mysqli_connect($servidor, $usuario, $password, $bncdd) 
    or die("Aconteceu um erro, e não deu para conectar ao Banco de Dados. Erro, a seguir: ".mysqli_connect_error());

    if(isset($con)){
        echo "Banco de dados foi conectado com sucesso!";
    }

?>