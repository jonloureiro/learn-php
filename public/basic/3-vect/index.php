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
