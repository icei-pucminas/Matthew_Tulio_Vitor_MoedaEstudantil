<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Moeda Estudantil</title>
    <link rel="stylesheet" href="/CSS/cadastro.css">
    <link rel="stylesheet" href="/CSS/reset.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>

<body>

    <div class="container">
        <div class="quadro-cadastro">
            <form action="" method="post">
                <h2>Cadastro de alunos</h2>
                <a href=""></a>
                <label for="nome">Nome</label>
                <input name="nome" id="nome" type="text">
                <label for="senha">Senha</label>
                <input name="senha" id="senha" type="password">
                <label for="email">Email</label>
                <input name="email" id="email" type="text">
                <label for="cpf">CPF</label>
                <input name="cpf" id="cpf" type="text">
                <label for="rg">RG</label>
                <input name="rg" id="rg" type="text">

                <label for="endereco">Endereco</label>
                <input name="endereco" id="endereco" type="text">
                <label for="instituicao">Instituição de ensino</label>
                <input name="instituicao" id="instituicao" type="text">
                <label for="curso">Curso</label>
                <input name="curso" id="curso" type="text">
                <input name="enviar" type="submit" value="Cadastrar">
                <button><a href="/index.php">Voltar</a></button>
            </form>
        </div>

        <?php
        include("/xampp/htdocs/php/controller/cadastro_controller.php");
        login_senha();
        ?>
    </div>

</body>

</html>