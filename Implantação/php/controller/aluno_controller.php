<?php
function criarAluno()
{
    if (isset($_POST['cpf'])) {
        global $login;
        $aluno = new Aluno(addslashes($_POST['cpf']), addslashes($_POST['email']), addslashes($_POST['rg']), addslashes($_POST['endereco']), addslashes($_POST['curso']), $login);
        return $aluno;
    }
}

function insertAluno($aluno)
{
    global $conexao;
    $query = "INSERT INTO aluno (LOGIN_USUARIO ,CURSO, ENDERECO, RG, EMAIL, CPF, MOEDAS) VALUES ('{$aluno->getLogin()}','{$aluno->getCurso()}','{$aluno->getEndereco()}','{$aluno->getRg()}','{$aluno->getEmail()}','{$aluno->getCpf()}', '{$aluno->getMoedas()}')";
    $conexao->exec($query);
}
