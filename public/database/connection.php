<?php

function newConnection($database = 'learning_php')
{
    $server = "192.168.99.103:3306";
    $user = "root";
    $password = "root";
    
    $connection = new mysqli($server, $user, $password, $database);

    if ($connection->connect_error) {
        die('Error: '. $connection->connect_error);
    }
          
    return $connection;
}
