<?php

include("/xampp/htdocs/php/controller/conexao.php");
$cont = arquivo();
$login = strval($cont) . "221";

if (isset($_POST['enviar'])) {
    $nome = addslashes($_POST['nome']);
    $senha = addslashes($_POST['senha']);
    $email = addslashes($_POST['email']);
    $cpf = addslashes($_POST['cpf']);
    $rg =  addslashes($_POST['rg']);
    $endereco = addslashes($_POST['endereco']);
    $instituicao = addslashes($_POST['instituicao']);
    $curso = addslashes($_POST['curso']);


    $sql = "insert into usuario (LOGIN, NOME, SENHA) values ('$login','$nome','$senha')";
    $salvar = mysqli_query($conexao, $sql);
    $sql2 = "insert into aluno (LOGIN_USUARIO, CURSO, ENDERECO, RG, EMAIL, CPF) values ('$login','$curso','$endereco','$rg','$email','$cpf')";
    $salvar2 = mysqli_query($conexao, $sql2);
}

function arquivo()
{
    if (isset($_POST['enviar'])) {
        $contador = "C:/xampp/htdocs/php/controller/reg.txt";
        define("adi", 1);
        $id = fopen($contador, "r+");
        $conteudo = fread($id, filesize($contador));
        fclose($id);
        clearstatcache();
        $conteudo += adi;
        $id = fopen($contador, "r+");
        fwrite($id, $conteudo, strlen($conteudo) + 5);
        fclose($id);
        clearstatcache();
        return $conteudo;
    }
}
function login_Senha()
{
    if (isset($_POST['enviar'])) {
        global $login;
        global $senha;
        echo "<div class='quadro-sucesso'>
        <h1>Cadastrado com sucesso</h1>
        <div class='container2'>
            <p>Login:'$login'</p>
            <p>Senha:'$senha'</p>
            <button><a href='../../index.php'>voltar</a></button>
        </div>
    </div>";
    }
}
