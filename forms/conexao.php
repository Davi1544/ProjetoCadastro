<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "projetobanco";
    $port = 3307;
    $con = mysqli_connect($hostname, $username, $password, $database, $port);

    if(mysqli_connect_errno()){
        echo "Erro conexão: ", mysqli_connect_error();
        exit();
    }
?>