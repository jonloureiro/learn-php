<h2 class="title">POO</h2>

<h3 class="subtitle">Olha aí</h3>
<?php
// self:: para static
// parent:: para super
// this-> para si mesmo

interface IFoo
{
    public function publicFunction();
}


class Foo implements IFoo
{
    private $a = 'private';
    protected $b = 'protected';
    public $c = 'public';
    public static $pi = 3.1415;

    public function __construct()
    {
        echo "construtor Foo" . "<br>";
    }

    public function __destruct()
    {
        echo "destrutor Foo" . "<br>";
    }


    protected function helloFoo()
    {
        echo "helloFoo... ";
        echo $this->a . " ";
        echo $this->b . " ";
        echo $this->c . "<br>";
    }

    public function publicFunction()
    {
        echo "essa função é pública" . "<br>";
    }
}

class Bar extends Foo
{
    public function __construct()
    {
        echo "construtor Bar" . "<br>";
    }

    public function __destruct()
    {
        parent::__destruct();
    }

    public function helloBar()
    {
        echo "chamando helloFoo" . "<br>";
        parent::helloFoo();
        echo "helloBar... ";
        echo $this->a . " ";
        echo $this->b . " ";
        echo $this->c . "<br>";
    }
}

$foo = new Foo();
$foo->publicFunction();
unset($foo);
echo "<br>";

$bar = new Bar();
$bar->helloBar();
unset($bar);

echo "<br>";
echo Bar::$pi;
