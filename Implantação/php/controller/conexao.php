<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'moeda_estudantil';

$conexao = mysqli_connect($host, $user, $password, $database);

if (mysqli_connect_error()) :
    echo "Falha na conexão: " . mysqli_connect_error();
endif;
