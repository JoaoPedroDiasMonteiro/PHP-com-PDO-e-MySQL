<?php

$dsn = 'mysql:host=localhost;dbname=php_com_pdo';
$usuario = 'root';
$senha = '';

try {
    $conexao = new PDO($dsn,$usuario,$senha);

    $query = '
        select * from tb_usuarios
    ';

    $stmt = $conexao->query($query);
    $lista = $stmt->fetchAll();

    echo '<pre>';
    print_r($lista);
    echo '</pre>';

    echo $lista[0]['nome'];

} catch (PDOException $e) {
    echo 'Erro: '. $e->getCode(). ' Mensagem: '.$e->getMessage();
}



?>