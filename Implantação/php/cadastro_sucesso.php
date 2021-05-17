<!DOCTYPE html>
<html lang="en">
<?php

include("conexao.php");
$cont = arquivo();
$login = strval($cont) . "221";


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

function arquivo()
{
    $contador = "reg.txt";
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
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Moeda Estudantil</title>

    <link rel="stylesheet" href="/CSS/reset.css">
    <link rel="stylesheet" href="/CSS/cadastro_sucesso.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

</head>

<body>

    <h1>Cadastrado com sucesso</h1>
    <div class="container">
        <p>Login: <?php echo $login; ?> </p>
        <p>Senha: <?php echo $senha; ?></p>

        <button><a href="/index.php">voltar</a></button>
    </div>
</body>

</html>