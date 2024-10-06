<?php
// Verifica se o formulário de login foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera os dados do formulário
    $email = $_POST["email"];
    $password = $_POST["pass"];

    // Conexão com o banco de dados
    $con = mysqli_connect("localhost", "root", "", "api_data");

    // Verifica se a conexão foi estabelecida com sucesso
    if (!$con) {
        die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
    }

    // Consulta para verificar as credenciais do usuário
    $query = "SELECT Nome FROM data WHERE Email = '$email' AND password = '$password'";
    $result = mysqli_query($con, $query);

    // Verifica se a consulta retornou algum resultado
    if (mysqli_num_rows($result) == 1) {
        // Login bem-sucedido
        $row = mysqli_fetch_assoc($result);
        $nome = $row["Nome"];

        // Verifica o prefixo do email
        $prefix = substr($email, 0, 2);
        if ($prefix == "PT" || $prefix == "NT") {
            // Redireciona para a nova página de boas-vindas (2-boas-vindas.php)
            header("Location: 2-boas-vindas.php?nome=$nome");
            exit();
        } else {
            // Redireciona para a página de boas-vindas original (boas-vindas.php)
            header("Location: boas-vindas.php?nome=$nome");
            exit();
        }
    } else {
        // Credenciais inválidas
        echo "Credenciais inválidas. Por favor, tente novamente.";
    }

    // Fecha a conexão com o banco de dados
    mysqli_close($con);
}
?>