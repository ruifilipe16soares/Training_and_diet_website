<?php
header('Content-Type: application/json');

$con = mysqli_connect("localhost", "root", "", "api_data");

if ($con) {
    $sql = "SELECT * FROM data";
    $result = mysqli_query($con, $sql);

    if ($result) {
        $data = array();

        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }

        echo json_encode($data);
    }
} else {
    echo json_encode(array("error" => "Falha na conexão com a base de dados"));
}
?>
