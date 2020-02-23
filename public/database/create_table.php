<?php

require_once 'connection.php';

$sql = "CREATE TABLE IF NOT EXISTS user (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100) NOT NULL
)";

$connection = newConnection();
$connection->query($sql);

$result = $connection->query($sql);

if ($result) {
    echo "Tabela user iniciada" . "<br>";
} else {
    echo "Erro: " . $connection->error;
}

$connection->close();
