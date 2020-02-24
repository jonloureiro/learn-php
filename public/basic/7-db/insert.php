<?php

require_once 'connection.php';


$sql = "INSERT INTO user (nome) VALUE (
  'duarte'
)";
$connection = newConnection();
$result = $connection->query($sql);

if ($result) {
    echo "Dados inseridos" . "<br>";
} else {
    echo "Erro: " . $connection->error;
}

$connection->close();
