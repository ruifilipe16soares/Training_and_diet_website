<?php
$con = mysqli_connect("localhost", "root", "", "api_data");
if ($con) {
    $sql = "SELECT * FROM data";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo '<style>
                table {
                    border-collapse: collapse;
                    width: 100%;
                }
                th, td {
                    padding: 8px;
                    text-align: left;
                    border-bottom: 1px solid #ddd;
                }
                th {
                    background-color: #f2f2f2;
                }
              </style>';

        echo '<table>';
        echo '<tr><th>ID</th><th>Nome</th><th>Idade</th><th>Email</th><th>Password</th></tr>';

        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $row['id'] . '</td>';
            echo '<td>' . $row['nome'] . '</td>';
            echo '<td>' . $row['idade'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            echo '<td>' . $row['password'] . '</td>';
            echo '</tr>';
        }

        echo '</table>';
    }
} else {
    echo "Conexao com a Base de Dados falhada";
}
?>
