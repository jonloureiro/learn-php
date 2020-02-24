<?php ini_set("display_errors", 1);
    require_once 'connection.php';
    $connection = newConnection(null);
    $result[] = $connection->exec("CREATE DATABASE IF NOT EXISTS learning_php;");
    $result[] = $connection->exec("USE learning_php;");
    $result[] = $connection->exec("CREATE TABLE IF NOT EXISTS task (
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      text VARCHAR(255) NOT NULL,
      created_at TIMESTAMP NOT NULL,
      edited_at TIMESTAMP
    );");



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="../assets/styles/sanitize.css">
  <link rel="stylesheet" href="../assets/styles/typography.css">
  <link rel="stylesheet" href="../assets/styles/forms.css">
  <link rel="stylesheet" href="assets/styles/style.css">

  <title>CRUD</title>
</head>
<body>
  <header>
    <form class="header__form" action="#" method="post">
      <label for="text">Tarefa</label>
      <input class="header__input" type="text" name="text">
      <input class="header__bottom" type="submit" value="Add">
    </form>
  </header>
  <main>
  <h2>main</h2>
  </main>
  <footer>
    <a href="https://github.com/jonloureiro" class="footer__text">github/jonloureiro</a>
  </footer>
</body>
</html>
