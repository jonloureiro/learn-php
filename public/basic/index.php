<!DOCTYPE html>
<html lang="pt-BR">

<head>
  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="assets/styles/sanitize.css">
  <link rel="stylesheet" href="assets/styles/typography.css">
  <link rel="stylesheet" href="assets/styles/forms.css">
  <link rel="stylesheet" href="assets/styles/style.css">

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
          $text = strtoupper(substr($file, 2));
          echo "<li>
          <a class=\"sidebar__link\" href=\"?p=${file}\">${text}</a>
          </li>";
        }
        ?>
      </ul>
    </nav>
    <div class="content">
      <?php
      if (!$_GET['p']) {
        echo '<h2 class="title">Ainda estou aprendendo ;B</h2>';
      } else {
        echo '<a class="content__link-to-home" href="\basic">←</a>';
        include($_GET['p'] . "/index.php");
      }
      ?>
    </div>
  </main>

  <footer class="footer">
    <a href="https://github.com/jonloureiro" class="footer__text">github/jonloureiro</a>
  </footer>

  <?php
  require "./vendor/HotReloader.php";

  use HotReloader\HotReloader;

  $reloader = new HotReloader();
  $reloader->init();
  ?>

</body>

</html>
