<?php
    require 'conexao.php';

    $id_user = $_POST['id_user'];
    $nome = $_POST['nome_user'];
    $email = $_POST['email_user'];
    $senha = $_POST['senha_user'];
    $tel = $_POST['fone_user'];

    $query = "update user set nome_user = '$nome', email_user = '$email', fone_user = '$tel', senha = '$senha' where id_user = $id_user";
    $res = mysqli_query($con, $query);
    mysqli_close($con);

    header("Location: listar_usuarios.php");
?>