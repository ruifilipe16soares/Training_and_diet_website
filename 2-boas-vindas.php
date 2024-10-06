<?php
// Verifica se o nome foi passado pela URL
if (isset($_GET["nome"])) {
    $nome = $_GET["nome"];
    echo '<!DOCTYPE html>
    <html>
    <head>
        <title>Página de Boas Vindas</title>
        <style>
            body {
                background-color: #f2f2f2;
                font-family: Arial, sans-serif;
                font-size: 20px;
                text-align: center;
                padding: 50px;
            }
            
            h1 {
                color: #333333;
                font-size: 28px;
            }
            
            .button {
                background-color: #4CAF50;
                color: white;
                padding: 10px 20px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin-top: 20px;
            }
        </style>
    </head>
    <body>
        <h1>Bem-vindo à nossa página, ' . $nome . '!</h1>
        <a class="button" href="2index.html">Voltar à página inicial</a>
    </body>
    </html>';

} else {
    // Redireciona para a página de login
    header("Location: novologin.html");
    exit();
}
?>
