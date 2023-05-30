<?php
    require('conexao.php');
    $id_usuario = $_GET['id_user'];
    $sql = "SELECT * FROM user where id_user = $id_usuario";
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Update</title>
    <style>
        form{
            width: 50vw;
            padding: 1vw;
            border: 1px black solid;
            margin: 0 auto;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>
<body>
    <img src="<?php echo $row['foto_user']?>" alt="">
    <form action="alter_user.php" method="post" enctype="multipart/form-data">
        <input type="number" class="form-control" placeholder="id_user" name="id_user" id="" value="<?php echo $row['id_user']?>"><br>
        <input type="text" class="form-control" placeholder="nome" name="nome_user" id="" value="<?php echo $row['nome_user']?>"><br>
        <input type="email" class="form-control" placeholder="email" name="email_user" id="" value="<?php echo $row['email_user']?>"><br>
        <input type="tel" class="form-control" placeholder="telefone" name="fone_user" pattern="(\([0-9]{2}\))\s([9]{1})?([0-9]{4})-([0-9]{4})" value="<?php echo $row['fone_user']?>"><br>
        <input type="password" class="form-control" placeholder="senha" name="senha_user" id="" value="<?php echo $row['senha']?>"><br>
        <input type="file" name="switch-pic" id=""><br>
        <input type="submit" class="btn btn-primary" value="Enviar">
    </form>
</body>
</html>