<?php ini_set("display_errors", 1);
    require_once 'connection.php';
    $connection = newConnection(null);
    $result[] = $connection->exec("CREATE DATABASE IF NOT EXISTS learning_php;");
    $result[] = $connection->exec("USE learning_php;");
    $result[] = $connection->exec("CREATE TABLE IF NOT EXISTS task (
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      texto VARCHAR(255) NOT NULL,
      created_at TIMESTAMP NOT NULL,
      edited_at TIMESTAMP
    );");
    print_r($result)
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="../assets/styles/sanitize.css">
  <link rel="stylesheet" href="../assets/styles/typography.css">
  <link rel="stylesheet" href="../assets/styles/forms.css">

  <style>
    :root {
      --main-txt-color: #353535;
      --main-bg-color: #F1F2EA;
    }
    
    html {
      font-size: 200%;
    }

    body {
      padding: 1rem;
      background-color: var(--main-bg-color);
      color: var(--main-txt-color);
    }
  </style>

  <title>CRUD</title>
</head>
<body>

  
</body>
</html>
