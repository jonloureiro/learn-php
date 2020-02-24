<?php
$ignore = [
    '.',
    '..',
    '.DS_Store',
    'assets',
    'index.php',
];
$files = array_diff(scandir(__DIR__), $ignore);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/styles/sanitize.css">
  <link rel="stylesheet" href="assets/styles/typography.css">
  <link rel="stylesheet" href="assets/styles/forms.css">
  
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

    ul {
      list-style-type: none;
    }

    a {
      color: var(--main-txt-color);
      text-decoration: none;
    }
  </style>

  <title>Learning</title>
</head>
<body>
  <ul>
    <?php foreach ($files as $file): ?>
      <li>
        <a href=<?= $file?>><?= "→ " . $file?></a>
      </li>
    <?php endforeach; ?>
  </ul>
</body>
</html>
