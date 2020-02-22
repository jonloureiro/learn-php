<h2 class="title">Funções</h2>

<h3 class="subtitle">Pureza</h3>
<?php
function naoAltera()
{
    $var = 'não altera';
}

function naoAltera2($param)
{
    $param = 'qlqr coisa;';
}


$var = 'testando';
echo $var . "<br>";
naoAltera();
echo $var . "<br>";
naoAltera2($var);
echo $var . "<br>";

function essaAltera()
{
    global $var;
    $var = 'alterou 1';
}

function essaAltera2(&$var)
{
    $var = 'alterou 2';
}

echo "<br>";
echo $var . "<br>";
essaAltera();
echo $var . "<br>";
essaAltera2($var);
echo $var . "<br>";
?>

<h3 class="subtitle">Return function (use)</h3>
<?php
function soma($a): callable
{
    return function ($b) use ($a) {
        return $a + $b;
    };
}

echo soma(2)(5);
?>
