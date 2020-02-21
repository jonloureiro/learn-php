<h2 class="title">Loop</h2>

<h3 class="subtitle">Tabela (desativar hot reloader)</h3>
<form action="#" method="post">
  <div>
    <label for="linhas">Linhas</label>
    <input type="number" name="linhas" value="<?= $_POST['linhas'] < 0 ? 0 : $_POST['linhas'] ?>">
  </div>
  <div>
    <label for="colunas">colunas</label>
    <input type="number" name="colunas" value="<?= $_POST['colunas'] < 0 ? 0 : $_POST['colunas'] ?>">
  </div>
  <input type="submit" value="Gerar tabela">
</form>
<table>
  <?php
  $linhas = intval($_POST['linhas']);
  $colunas = intval($_POST['colunas']);

  if ($linhas < 0) $linhas = 0;
  if ($colunas < 0) $colunas = 0;

  $num = 0;
  for ($i = 0; $i < $linhas; $i++) {
    echo "<tr>";
    for ($j = 0; $j < $colunas; $j++) {
      echo "<td>" . ++$num . "</td>";
    }
    echo "</tr>";
  }
  ?>
</table>


<h3 class="subtitle">For</h3>
<?php
for ($i = 0; $i < 5; $i++) {
  for ($j = 0; $j <= $i; $j++) {
    echo "#";
  }
  echo "<br>";
}

for ($i = "$"; $i !== "$$$$$$"; $i .= "$")
  echo $i . "<br>";
?>


<h3 class="subtitle">Foreach</h3>
<?php
$array = [
  1,
  2,
  4 => 3,
  4,
  5,
];

foreach ($array as $key => $value) {
  echo "[$key] = $value" . "<br>";
}

foreach ($array as &$value) {
  $value *= 2;
  echo "$value ";
}
?>

<h3 class="subtitle">Break / Continue</h3>
<?php
$i = 0;
while (1) {
  if ($i >= 10)
    break;
  $i++;
  if (!($i % 2))
    continue;
  echo "$i ";
}
?>

<style>
  form>div {
    margin-bottom: 8px;
  }

  table {
    margin: 8px 0 0;
  }

  td {
    border: 1px solid WindowFrame;
    padding: 8px;
    text-align: center;
  }
</style>
