<?php

require_once 'connection.php';

$sql = "DELETE FROM user WHERE id = 3";

$connection = newConnection();
$result = $connection->query($sql);

if ($result) {
    echo "Usuário deletado" . "<br>";
} else {
    echo "Erro: " . $connection->error;
}


$connection->close();
