<?php

    require 'conexao.php';

    $id_delete = $_GET['id_user'];
    $query = "delete from user where id_user = $id_delete";
    $res = mysqli_query($con, $query);
    mysqli_close($con);

    header("Location: listar_usuarios.php");
