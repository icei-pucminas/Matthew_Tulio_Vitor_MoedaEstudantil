<?php
include_once("/xampp/htdocs/php/controller/conexao.php");
include_once("/xampp/htdocs/php/controller/empresa_controller.php");

global $conexao;
$linha_editar = $_POST["edicao"];
$cnpj = $_POST['cnpj'];
$nome = $_POST['nome'];


$consulta = "SELECT * FROM empresa";
$result = $conexao->query($consulta) or die($conexao->error);
$empresas = $result->fetchAll();
$empresa_deletada = $empresas[$linha_editar]['CNPJ'];


$query = "UPDATE `empresa` SET `CNPJ` = '{$cnpj}', `NOME` = '{$nome}' WHERE `empresa`.`CNPJ` = '{$empresa_deletada}'";
$conexao->exec($query);
header("Refresh:00; url=../view/listagem_empresas_view.php");
