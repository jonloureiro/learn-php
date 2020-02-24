<?php

require_once 'connection.php';

$sql = "SELECT * FROM user";

$connection = newConnection();
$result = $connection->query($sql);

$rows = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $rows[] = $row;
        print_r($row);
        echo "<br>";
    }
} else {
    echo "Erro: " . $connection->error;
}

$connection->close();
