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
        require 'conexao.php';
        $sql = "SELECT * FROM user";

        $res = mysqli_query($con, $sql);

        $row = mysqli_fetch_array($res);
    ?>
    <h1>Todos os Usuários</h1>
    <table border="1" class="table-dark">
        <thead>
            <tr>
                <th>id_user</th>
                <th>nome_user</th>
                <th>email_user</th>
                <th>fone_user</th>
                <th>senha</th>
                <th>update</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                do{
                    echo "<tr><td>".$row['id_user']."</td>";
                    echo "<td>".$row['nome_user']."</td>";
                    echo "<td>".$row['email_user']."</td>";
                    echo "<td>".$row['fone_user']."</td>";
                    echo "<td>".$row['senha']."</td>";
                    echo "<td><a href='update.php?id_user=".$row['id_user']."'><button>MUDAR</button></a></td></tr>";
                }while($row = mysqli_fetch_array($res))
            ?>
        </tbody>
    </table>
</body>
</html>