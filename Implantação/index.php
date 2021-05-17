<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Moeda Estudantil</title>
    <link rel="stylesheet" href="/CSS/index.css">
    <link rel="stylesheet" href="/CSS/reset.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>

<body>

    <div class="container">
        <div class="quadro-cadastro">
            <form action="/php/cadastro.php" method="post">
                <h2>Cadastro de alunos</h2>

                <label for="usuario">Nome</label>
                <input name="usuario" id="usuario" type="text">
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
                <input type="submit" value="Cadastrar">
            </form>
        </div>
    </div>
    <script>

    </script>
</body>

</html>