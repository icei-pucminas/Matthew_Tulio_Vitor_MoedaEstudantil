<?php
include_once("/xampp/htdocs/php/controller/conexao.php");
include("/xampp/htdocs/php/controller/empresa_controller.php");
global $conexao;
$linha = $_POST['deletar'];
$empresas = consultaEmpresa();
$cnpj = $empresas[$linha]["CNPJ"];
$query = "DELETE FROM EMPRESA WHERE CNPJ = '{$cnpj}';";
$conexao->exec($query);
header("Refresh:0; url=../view/listagem_empresas_view.php");
