<?php
    require 'conexao.php';

    $nome = $_POST['nome_user'];
    $email = $_POST['email_user'];
    $senha = $_POST['senha_user'];
    $tel = $_POST['fone_user'];

    $query = "insert into user values(null, '$nome', '$email', '$tel', '$senha')";
    $res = mysqli_query($con, $query);
    mysqli_close($con);
    header("Location: subscribe.php");
?>