<h1>Lista de Usuários</h1>

<?php
    $pdo = new PDO('mysql:dbname=meudb;host=db;', 'douglas', '1234');

    $sql = $pdo->query('SELECT * FROM usuario');

    if ($sql->rowCount() > 0) {
        $usuarios = $sql->fetchAll();
        echo '<ul>';
        foreach ($usuarios as $key => $value) {
            echo "<li>{$value['nome']}</li>";
        }
        echo '</ul>';
    } else {
        echo 'Não há úsuarios cadastrados!';
    }