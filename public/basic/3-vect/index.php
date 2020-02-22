<h2 class="title">Array</h2>

<h3 class="subtitle">Utilitários</h3>
<?php
$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];
print_r(array_merge($impares, $pares));
echo "<br><br>";

$pares[] = 10;
print_r($impares + $pares);
echo "<br><br>";

array_push($impares, 11);
$inteiros = array_merge($impares, $pares);
sort($inteiros);
print_r($inteiros);
echo "<br><br>";

$usuario = [
  "nome" => "Carlos",
  "idade" => 25,
  "cidade" => "Cuiabá",
];

print_r($usuario);
unset($usuario["cidade"]);
echo "<br>";
print_r($usuario);

$endereco = [
  "CEP" => "78068-000",
  "Rua" => "Rua 30",
  "Bairro" => "Boa Esperança",
];

echo "<br>";
print_r($endereco);
$usuario["endereco"] = $endereco;
echo "<br>";
print_r($usuario);
unset($usuario["endereco"]);

$usuario = array_merge($usuario, $endereco);
echo "<br>";
print_r($usuario);
