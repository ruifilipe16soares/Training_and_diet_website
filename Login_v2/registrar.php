<?php
$con = mysqli_connect("localhost", "root", "", "api_data");

if ($con) {
    $nome = $_POST['name'];
    $idade = $_POST['age'];
    $email = $_POST['email'];
    $password = $_POST['pass'];

    $sql = "INSERT INTO data (nome, idade, email, password) VALUES ('$nome', '$idade', '$email', '$password')";
    $result = mysqli_query($con, $sql);

    if ($result) {
        // Dados registrados com sucesso
        echo '
        <!DOCTYPE html>
        <html>
        <head>
            <title>Resposta de Registo</title>
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
            <h1>Dados registrados com sucesso!</h1>
            <a class="button" href="novologin.html">Ir para a página de login</a>
            <script>
                // Redirecionar para a página de login ao clicar no botão
                document.querySelector(".button").addEventListener("click", function() {
                    window.location.href = "novologin.html";
                });
            </script>
        </body>
        </html>';
    } else {
        // Erro ao registrar os dados
        echo "Erro ao registrar os dados.";
    }
} else {
    // Falha na conexão com a base de dados
    echo "Conexão com a Base de Dados falhada";
}
?>
