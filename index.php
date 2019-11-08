<?php

// if (!empyt($_POST['usuario']) && !empyt($_POST['senha'])) {


    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';

    try {
        $conexao = new PDO($dsn, $usuario, $senha);

        // query
        $query = "select * from tb_usuarios where";
        $query .= " email = '{$_POST['usuario']}' ";
        $query .= " AND senha = '{$_POST['senha']}' ";

        echo $query;

        $stmt = $conexao->query($query);
        $usuario = $stmt->fetch();
        echo '<hr>';
        echo '<pre>';
        print_r($usuario);
        echo '</pre>';

    } catch (PDOException $e) {
        echo 'Erro: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage();
    }
// }



?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <input name="usuario" type="text" placeholder="usuário">
        <br>
        <input name="senha" type="password" placeholder="senha">
        <br>
        <button type="submit">Entrar</button>

    </form>
</body>

</html>