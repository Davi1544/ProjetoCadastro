<?php
    require 'conexao.php';
    require 'insert.php';

    $id_user = $_POST['id_user'];
    $nome = $_POST['nome_user'];
    $email = $_POST['email_user'];
    $senha = $_POST['senha_user'];
    $tel = $_POST['fone_user'];

    $sql = "SELECT * FROM user where id_user = $id_user";
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($res);
    
    if(isset($row['foto_user']))unlink($row['foto_user']);

    $nome_foto = resolveImg($_FILES["switch-pic"]['tmp_name'], $_FILES["switch-pic"]['name']);

    $query = "update user set nome_user = '$nome', email_user = '$email', fone_user = '$tel', senha = '$senha', foto_user = '$nome_foto' where id_user = $id_user";
    $res = mysqli_query($con, $query);
    mysqli_close($con);

    header("Location: listar_usuarios.php");
?>