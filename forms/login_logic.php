<?php
    require "conexao.php";

    $email = $_POST['email'];
    $senha = $_POST['senha'];


    $sql =  "select * from user where email_user = '$email' and senha = '$senha'";
    
    $result = mysqli_query($con, $sql);
    $rowcount = mysqli_num_rows($result);
    if($rowcount > 0){
        include ("cria_session.php");
        $_SESSION['login'] = mysqli_fetch_array($result);

        header("Location: index.php");
    }else{
        header("Location: login_page.php");
    }
?>