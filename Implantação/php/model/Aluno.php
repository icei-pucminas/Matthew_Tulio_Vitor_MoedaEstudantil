<?php
require_once "Usuario.php";
class Aluno
{
    private $cpf;
    private $email;
    private $rg;
    private $endereco;
    private $curso;
    private $moedas = 0;

    public function __construct($cpf, $email, $rg, $endereco, $curso)
    {
        $this->cpf = $cpf;
        $this->email = $email;
        $this->rg = $rg;
        $this->endereco = $endereco;
        $this->curso = $curso;
    }

    public function getCpf()
    {
        return $this->cpf;
    }
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        return $this->email = $email;
    }

    public function getRg()
    {
        return $this->rg;
    }
    public function setRg($rg)
    {
        return $this->rg = $rg;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }
    public function setEndereco($endereco)
    {
        return $this->endereco = $endereco;
    }

    public function getCurso()
    {
        return $this->curso;
    }
    public function setCurso($curso)
    {
        return $this->curso = $curso;
    }

    public function getMoedas()
    {
        return $this->moedas;
    }
    public function setMoedas($moedas)
    {
        return $this->moedas = $moedas;
    }


    public function visualizarExtrato()
    {
    }

    public function trocarMoedasPorVantagens()
    {
    }
}
