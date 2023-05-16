<?php
    require 'conexao.php';

    $nome = $_POST['nome_user'];
    $email = $_POST['email_user'];
    $senha = $_POST['senha_user'];
    $tel = $_POST['fone_user'];

    
    $sql = "SELECT * FROM user where email_user = '$email'";
    foreach(mysqli_query($con, $sql) as $key => $value){
        $res = $value['email_user'];
    }

    if(isset($res)){

        echo '<a href="cadastro.php">cadastro</a>';

    }else{

        $query = "insert into user values(null, '$nome', '$email', '$tel', '$senha')";
        $res = mysqli_query($con, $query);
        mysqli_close($con);
        header('Location: listar_usuarios.php');
    }
?>