<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Cadastro</title>
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
    <form action="insert.php" method="post">
        <input type="text" class="form-control" placeholder="nome" name="nome_user" id=""><br>
        <input type="email" class="form-control" placeholder="email" name="email_user" id=""><br>
        <input type="tel" class="form-control" placeholder="telefone" name="fone_user" pattern="(\([0-9]{2}\))\s([9]{1})?([0-9]{4})-([0-9]{4})"><br>
        <input type="password" class="form-control" placeholder="senha" name="senha_user" id=""><br>
        <input type="submit" class="btn btn-primary" value="Enviar">
    </form>
</body>
</html>