<!DOCTYPE html>
<html lang="pt-BR">

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

  <title>PHP + MySQL</title>
</head>

<body>
  <?php
      require_once 'database.php';
      require_once 'create_table.php';
      require_once 'insert.php';
      require_once 'select.php';
      require_once 'delete.php';

      echo "<br><br>" . "Tudo certo!";
  ?>
</body>

</html>
