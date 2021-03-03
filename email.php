<?php
// The message
$message = "Line 1\r\nLine 2\r\nLine 3";

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Send
mail('betoside@gmail.com', 'Test Localhost php email simples', $message);




// $nome = $_POST['nome'];
// $email = $_POST['email'];
// $empresa = $_POST['empresa'];
// $telefone = $_POST['telefone'];
// $msg = $_POST['msg'];

?>


<?php // if ($nome !== ""): ?>

<!-- 

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Process Form</title>
    </head>
    <body>

        <h1>Mensagem de contato</h1>

        <p>
            <strong>Nome:</strong> $nome
        </p>
        <p>
            <strong>Email:</strong> $email
        </p>
        <p>
            <strong>Empresa:</strong> $empresa
        </p>
        <p>
            <strong>Telefone:</strong> $telefone
        </p>
        <p>
            <strong>Mensagem:</strong> $Mensagem
        </p>
        
    </body>
    </html>
 -->


    <?php // else: ?>
    
        <?php // echo '<p>Formulário vazio</p>'; ?>
    
    <?php // endif ?>