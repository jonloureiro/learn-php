<?php

require_once 'connection.php';

$connection = newConnection(null);
$sql = 'CREATE DATABASE IF NOT EXISTS learning_php';
$result = $connection->query($sql);

if ($result) {
    echo "Database iniciado" . "<br>";
} else {
    echo "Erro: " . $connection->error;
}

$connection->close();
