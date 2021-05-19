<?php
function criarUsuario()
{
    if (isset($_POST['nome'])) {
        global $login;
        $usuario = new Usuario($login, addslashes($_POST['nome']), addslashes($_POST['senha']));
        return $usuario;
    }
}
function insertUsuario($usuario)
{
    global $conexao;
    $query = "INSERT INTO usuario (LOGIN, NOME, SENHA) VALUES ('{$usuario->getLogin()}', '{$usuario->getNome()}','{$usuario->getSenha()}')";
    $conexao->exec($query);
}
