<?php

include("conexao.php");

$usuario = addslashes($_POST['usuario']);
$email = addslashes($_POST['email']);
$cpf = addslashes($_POST['cpf']);
$rg =  addslashes($_POST['rg']);
$endereco = addslashes($_POST['endereco']);
$instituicao = addslashes($_POST['instituicao']);
$curso = addslashes($_POST['curso']);

echo $usuario;
echo $email;
echo $cpf;
echo $rg;
echo $endereco;
echo $instituicao;
echo $curso;

$sql = "insert into usuario (LOGIN, NOME, SENHA) values (15482,'matthew','231','123','teste','teste')";
$salvar = mysqli_query($conexao, $sql);
