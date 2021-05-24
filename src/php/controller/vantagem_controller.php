<?php
require_once('/xampp/htdocs/php/controller/conexao.php');
function criarVantagem()
{
    if (isset($_POST['id'])) {
        global $login;
        $vantagem = new Vantagem(
            addslashes($_POST['id']),
            addslashes($_POST['custo_moeda']),
            addslashes($_POST['nome']),
            addslashes($_POST['foto']),
            addslashes($_POST['descricao']),
            $login
        );
        return $vantagem;
    }
}

function insertVantagem($vantagem)
{
    global $conexao;
    $query = "INSERT INTO vantagem (ID, CUSTO_MOEDAS, FOTO, NOME, DESCRICAO, CNPJ_EMPRESA)  VALUES
     ('{$vantagem->getId()}','{$vantagem->getCusto_Moedas()}','{$vantagem->getNome()}','{$vantagem->getDescricao()}','{$vantagem->getCNPj_Empresa()}')";
    $conexao->exec($query);
}
function consultaVantagem()
{
    global $conexao;
    $consulta = "SELECT * FROM vantagem " ;
    $result = $conexao->query($consulta) or die($conexao->error);
    $vantagem = $result->fetchAll();
    return $vantagem;
}
