<?php
require "Aluno.php";
class Usuario
{
    //login: int, nome: string, senha: string
    private $login;
    private $nome;
    private $senha;

    public function __construct($login, $nome, $senha)
    {
        $this->login = $login;
        $this->nome = $nome;
        $this->senha = $senha;
    }

    public function getLogin()
    {
        return $this->login;
    }
    public function setLogin($login)
    {
        $this->login = $login;
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getSenha()
    {
        return $this->senha;
    }
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }
}
