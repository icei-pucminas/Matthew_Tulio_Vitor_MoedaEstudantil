<?php
require_once("/xampp/htdocs/php/model/Usuario.php");
class Empresa extends Usuario
{
    private $cnpj;
    private $nome;

    public function __construct($cnpj, $nome)
    {
        $this->cnpj = $cnpj;
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getCnpj()
    {
        return $this->cnpj;
    }

    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
    }
}
