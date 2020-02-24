<?php ini_set("display_errors", 1);

require_once 'connection.php';

$initSQL = "CREATE DATABASE IF NOT EXISTS learning_php;
            USE learning_php;
            CREATE TABLE IF NOT EXISTS task (
              id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
              text VARCHAR(255) NOT NULL,
              created_at TIMESTAMP NOT NULL,
              edited_at TIMESTAMP
            );";
$selectSQL = "SELECT * FROM task LIMIT ? OFFSET ?;";
$insertSQL = "INSERT INTO task (`text`, `created_at`)
              VALUES (
                ?,
                NOW()
              );";
$deleteSQL = "DELETE FROM task WHERE `task`.`id` = ?;";
$updateSQL = "UPDATE task
              SET `text` = ?, `edited_at` = NOW()
              WHERE `task`.`id` = ?;";
$limit = 20;
$offset = 0;

$dbh = newConnection(null);
$results['init'] = $dbh->exec($initSQL);

if ($_POST && $_POST['type'] === 'POST' && $task = trim($_POST['task'])) {
    $sth = $dbh->prepare($insertSQL);
    $sth->bindParam(1, $task, PDO::PARAM_STR);
    $results['create'] = $sth->execute();
    unset($_POST['id']);
} elseif ($_POST && $_POST['type'] === 'DELETE' && is_int((int) $_POST['id'])) {
    $sth = $dbh->prepare(($deleteSQL));
    $sth->bindParam(1, $_POST['id'], PDO::PARAM_INT);
    $results['delete'] = $sth->execute();
} elseif ($_POST && $_POST['type'] === 'PUT'
          && is_int((int) $_POST['id']) && $task = trim($_POST['task'])) {
    $sth = $dbh->prepare($updateSQL);
    $sth->bindParam(1, $task, PDO::PARAM_STR);
    $sth->bindParam(2, $_POST['id'], PDO::PARAM_INT);
    $results['update'] = $sth->execute();
}

$sth = $dbh->prepare($selectSQL);
$sth->bindParam(1, $limit, PDO::PARAM_INT);
$sth->bindParam(2, $offset, PDO::PARAM_INT);
$results['read'] = $sth->execute();
$tasks = $sth->fetchAll(PDO::FETCH_ASSOC);
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
    <form class="header__form" action="/crud/" method="post">
      <input type="hidden" name="type"
        value=<?= ($_GET && $_GET['id'] && $_GET['task']) ? 'PUT' : 'POST'?>>
      <input type="hidden" name="id"
        value=<?= ($_GET && $_GET['id'] && $_GET['task']) ? $_GET['id'] : ''?>>
      <label for="task">Tarefa</label>
      <input class="header__input" type="text" name="task"
        value="<?= ($_GET && $_GET['id'] && $_GET['task']) ? $_GET['task'] : ''?>">
      <input class="header__button" type="submit"
        value=<?= ($_GET && $_GET['id'] && $_GET['task']) ? 'Editar' : 'Adicionar'?>>
    </form>
    <?php if ($_GET && $_GET['id'] && $_GET['task']): ?>
      <form action="/crud/" method="get">
        <input class="header__cancel-button" type="submit" value="X">
      </form>
    <?php endif; ?>
  </header>
  <main>
    <?php if ($tasks): ?>
      <table>
        <tr>
          <th>Tarefa</th>
          <th>Última modificação</th>
          <th>Ações</th>
        </tr>
        <?php foreach ($tasks as $task): ?>
        <tr>
          <td>
            <?= $task['text']; ?>
          </td>
          <td>
            <?=
                date(
                    'H:i -  j, M \d\e o',
                    strtotime($task['edited_at'] ?? $task['created_at'])
                );
            ?>
          </td>
          <td style="width: 9rem;">
            <div class="table-item__action">
              <form action="/crud/" method="get">
                <input type="hidden" name="id" value=<?= $task['id'] ?>>
                <input type="hidden" name="task" value="<?= $task['text'] ?>">
                <input class="table-item__edit" type="submit" value="O">
              </form>
              <form action="/crud/" method="post">
                <input type="hidden" name="type" value="DELETE">
                <input type="hidden" name="id" value=<?= $task['id'] ?>>
                <input class="table-item__del" type="submit" value="X">
              </form>
            </div>
          </td>
        </tr>
        <?php endforeach; ?>
      </table>
    <?php endif; ?>
    <div style="margin-top: 2rem; display: flex; flex-direction: column; align-items: center">
      <?php if ($_POST): ?>
        <strong>HTML FORM METHOD POST</strong>
        <ul>
          <?php foreach ($_POST as $key => $post): ?>
            <li>
              <strong><?= $key ?></strong>: <?= $post ?>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>

      <?php if ($_GET): ?>
        <strong style="margin-top: 1.125rem;">HTML FORM METHOD GET</strong>
        <ul>
          <?php foreach ($_GET as $key => $get): ?>
            <li>
              <strong><?= $key ?></strong>: <?= $get ?>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>

      <strong style="margin-top: 1.125rem;">RESULTS</strong>
      <ul>
        <?php foreach ($results as $key => $result): ?>
          <li>
            <strong><?= $key ?></strong>: <?= $result ?>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </main>
  <footer>
    <a href="https://github.com/jonloureiro" class="footer__text">github/jonloureiro</a>
  </footer>
</body>
</html>
