<?php
include('/xampp/htdocs/php/controller/conexao.php');
$consulta = "SELECT * FROM aluno";
$con = $conexao->query($consulta) or die($conexao->error);
