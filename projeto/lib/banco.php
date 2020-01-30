<?php

$conexao = mysqli_connect($config['database']['host'],
    $config['database']['user'], $config['database']['pass'],
    $config['database']['db']);

if (mysqli_connect_errno()) {
    print("erro ao conectar-se ao banco de dados!<br>");
    print(mysqli_connect_error());
    die();
}