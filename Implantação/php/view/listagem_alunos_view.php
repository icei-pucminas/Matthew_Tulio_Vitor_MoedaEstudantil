<?php
include("/xampp/htdocs/php/controller/consulta_aluno.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Moeda Estudantil</title>

    <link rel="stylesheet" href="/CSS/reset.css">
    <link rel="stylesheet" href="/CSS/listagem_alunos.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

</head>

<body>

    <h1>Listagem de alunos</h1>
    <div class="container">
        <table>
            <tr>
                <th>CPF</th>
                <th>EMAIL</th>
                <th>RG</th>
                <th>ENDERECO</th>
                <th>CURSO</th>
            </tr>
            <?php while ($dado = $con->fetch_array()) { ?>
                <tr>
                    <td><?php echo $dado["CPF"]; ?></td>
                    <td><?php echo $dado["EMAIL"]; ?></td>
                    <td><?php echo $dado["RG"]; ?></td>
                    <td><?php echo $dado["ENDERECO"]; ?></td>
                    <td><?php echo $dado["CURSO"]; ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>

</body>

</html>