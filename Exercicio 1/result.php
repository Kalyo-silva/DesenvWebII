<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Exercício 1</title>

    <link rel="stylesheet" href="layout.css">
</head>
<body>
    <?php

    $nome = $_REQUEST['Name']; 
    $telefone = $_REQUEST['Phone']; 
    $email = $_REQUEST['Mail'];
    $msg = $_REQUEST['Message'];

    $resultMsg = "<div>
                    <h1>Resultados</h1>

                    <h2><strong>Nome</strong></h2>
                    <h2>$nome</h2>    

                    <h2><strong>Telefone</strong></h2>
                    <h2>$telefone</h2>
                    
                    <h2><strong>E-Mail</strong></h2>
                    <h2>$email</h2>
                    
                    <h2><strong>Mensagem</strong></h2>
                    <h2>$msg</h2>
                </div>";

    echo $resultMsg;

    ?>
</body>
</html>

