<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Moeda Estudantil</title>
    <link rel="stylesheet" href="/CSS/style.css">
    <link rel="stylesheet" href="/CSS/reset.css">
</head>

<body>

    <div class="container">
        <div class="quadro-cadastro">
            <form action="/php/cadastro.php" method="post">
                <h2>Cadastro de alunos</h2>

                <label for="name">Nome</label>
                <input name="name" id="name" type="text">
                <label for="cpf">CPF</label>
                <input name="cpf" id="cpf" type="text">
                <label for="rg">RG</label>
                <input name="rg" id="rg" type="text">

                <label for="logradouro">Logradouro</label>
                <input name="logradouro" id="logradouro" type="text">
                <label for="numero">Numero</label>
                <input name="numero" id="numero" type="number">
                <label for="complemento">Complemento</label>
                <input name="complemento" id="complemento" type="text">
                <label for="cep">CEP</label>
                <input name="cep" id="cep" type="text">
                <label for="bairro">Bairro</label>
                <input name="bairro" id="bairro" type="text">
                <label for="cidade">Cidade</label>
                <input name="cidade" id="cidade" type="text">
                <label for="instituicao">Instituição de ensino</label>
                <input name="instituicao" id="instituicao" type="text">
                <label for="curso">Curso</label>
                <input name="curso" id="curso" type="text">
                <input type="submit" value="Cadastrar">
            </form>
        </div>
    </div>
</body>

</html>