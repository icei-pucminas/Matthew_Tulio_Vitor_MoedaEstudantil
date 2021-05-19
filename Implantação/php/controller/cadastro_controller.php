<?php

require_once("/xampp/htdocs/php/controller/conexao.php");
require_once("/xampp/htdocs/php/model/Usuario.php");
require_once("/xampp/htdocs/php/model/Aluno.php");
require_once("/xampp/htdocs/php/controller/usuario_controller.php");
require_once("/xampp/htdocs/php/controller/aluno_controller.php");

$login = arquivo_login();
cadastrar_usuario_login();

function cadastrar_usuario_login()
{
    if (isset($_POST['enviar'])) {
        $usuario = criarUsuario();
        $aluno = criarAluno();

        if ($usuario->getSetado() == true) {
            insertUsuario($usuario);
            insertAluno($aluno);
        }
        header("Refresh:0; url=../view/cadastro_view.php");
        exit;
    }
}

function arquivo_login()
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
        return strval($conteudo) . "221";
    }
}

function login_Senha()
{
    if (isset($_POST['enviar'])) {
        global $usuario;
        echo "<div class='quadro-sucesso'>
        <h1>Cadastrado com sucesso</h1>
        <div class='container2'>
            <p>Login:" . $usuario->getLogin() . "</p>
            <p>Senha:" . $usuario->getSenha() . "</p>
            <button><a href='../../index.php'>voltar</a></button>
        </div>
    </div>";
    }
}
