<?php

    function resolveImg($x, $y){
        if(file_exists($x)){
            $destino = '../fotos/';
            $extensao = strtolower(substr($y, -4));
            $nome_foto = $destino . date("Ymd-His") . $extensao;
            move_uploaded_file($x, $nome_foto); 
            return $nome_foto;
        }else return "";
    }

    require 'conexao.php';

    $nome = $_POST['nome_user'];
    $email = $_POST['email_user'];
    $senha = $_POST['senha_user'];
    $tel = $_POST['fone_user'];

    $nome_foto = resolveImg($_FILES["foto"]['tmp_name'], $_FILES["foto"]['name']);
    
    $sql = "SELECT * FROM user where email_user = '$email'";
    foreach(mysqli_query($con, $sql) as $key => $value){
        $res = $value['email_user'];
    }

    if(isset($res)){

        echo '<h2>Esse email já foi cadastro no sistema. Para retornar, clique em:</h2>';
        echo '<a href="cadastro.php">cadastro</a>';

    }else{

        $query = "insert into user values(null, '$nome', '$email', '$tel', '$senha', '$nome_foto')";
        $res = mysqli_query($con, $query);
        mysqli_close($con);
        header('Location: listar_usuarios.php');
    }
?>