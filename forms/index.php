<?php

    include("cria_session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if(!empty($_SESSION['login'])){
            echo $_SESSION['login']['nome_user'];
        }
    ?>
    <h1>Página Inicial - Projeto Cadastro</h1>
    <h3>Caminhos</h3>
    <ul>
        <?php 
            if(!empty($_SESSION['login'])){
                echo '<li><a href="logout.php">Log Out</a></li>';
            }
        ?>
        <li><a href="cadastro.php" target="_blank" rel="noopener noreferrer">Cadastro</a></li>
        <li><a href="listar_usuarios.php" target="_blank" rel="noopener noreferrer">Listar Usuários</a></li>
    </ul>
</body>
</html>