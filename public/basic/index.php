<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="assets/sanitize.css">
  <link rel="stylesheet" href="assets/typography.css">
  <link rel="stylesheet" href="assets/forms.css">
  <link rel="stylesheet" href="assets/style.css">

  <title>Learning PHP</title>
</head>

<body>
  <header class="header">
    <h1>Learning PHP</h1>
  </header>
  <main class="main">
    <nav class="sidebar">
      <ul class="sidebar__list">
        <?php
        $ignore = [
          '.',
          '..',
          'index.php',
          'assets',
          '.DS_Store'
        ];
        $files = array_diff(scandir(__DIR__), $ignore);
        foreach ($files as $file) {
          echo "<li>
          <a class=\"sidebar__link\" href=\"?p=${file}\">${file}</a>
          </li>";
        }
        ?>
      </ul>
    </nav>
    <div class="content">
      <?php
      include($_GET['p'] . "/index.php");
      ?>
    </div>
  </main>
  <footer class="footer">
    <a href="https://github.com/jonloureiro" class="footer__text">github/jonloureiro</a>
  </footer>
</body>

</html>