<?php

function newConnection($database = 'learning_php')
{
    $server = "192.168.99.103:3306";
    $user = "root";
    $password = "root";
  
    try {
        $connection = new PDO("mysql:host=$server;dbname=$database", $user, $password);
        return $connection;
    } catch (PDOException $e) {
        die('Error: '. $e->getMessage());
    }
}
