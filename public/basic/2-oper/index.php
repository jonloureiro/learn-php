<h2 class="title">Operadores</h2>

<h3 class="subtitle">Spaceship</h3>
<?php
var_dump(500 <=> 50);
echo "<br>";
var_dump(50 <=> 50);
echo "<br>";
var_dump(50 <=> 500);
?>

<h3 class="subtitle">Checagem</h3>
<?php
echo "Strings" . "<br>";
var_dump(!!"");
echo "<br>";
var_dump(!!" ");
echo "<br><br>";

echo "0" . "<br>";
var_dump(!!0);
echo "<br>";
var_dump(!!"0");
echo "<br>";
var_dump(!!"0.0");
echo "<br>";
var_dump(!!0.0);
echo "<br>";
var_dump(!!0.01);
echo "<br><br>";

echo "Negativo" . "<br>";
var_dump(!!-1);

?>
