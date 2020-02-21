<h2 class="title">Variáveis</h2>

<h3 class="subtitle">++ ou --</h3>
<?php
$i = 1;
echo "1 # \$i = 1";
echo "<br> " . ++$i . " # ++\$i:";
echo "<br> " . $i++ . " # \$i++:";
echo "<br> " . $i . " # \$i:";
?>

<h3 class="subtitle">Existência</h3>
<?php
// $semAtribuicao = "Não existe";
echo "\$semAtribuicao ?? Valor default";

$testando = $semAtribuicao ?? "Valor default";
echo "<br>" . $testando;
?>

<h3 class="subtitle">Variável de variável</h3>
<?php
$a = "b";
$b = "c";
$c = "d";
$d = "e";
echo "$a {$$a} {$$$a} {$$$$a}";

$$$$a = "b";
echo "<br> $a $d";
?>

<h3 class="subtitle">Referência</h3>
<?php
$a = "b";
$b = &$a;
$b = "c";
echo $a;
?>

<h3 class="subtitle">Constantes</h3>
<?php
define('PRIMEIRA_CONST', 'constante 1');
const SEGUNDA_CONST = 'constante 2';
const FUNCIONA = PRIMEIRA_CONST . ' (#)';
define('TBM_FUNCIONA', SEGUNDA_CONST . ' (#)');

echo PRIMEIRA_CONST . '<br>';
echo SEGUNDA_CONST . '<br>';
echo FUNCIONA . '<br>';
echo TBM_FUNCIONA . '<br>';
?>
