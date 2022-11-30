<?php
$str = <<<'EOD'
Exemplo dun string
expandido en varias liñas
empregando a sintaxe nowdoc.
EOD;

/* Un exemplo máis complexo con variables. */
class foo
{
    public $foo;
    public $bar;

    function foo()
    {
        $this->foo = 'Foo';
        $this->bar = array('Bar1', 'Bar2', 'Bar3');
    }
}

$foo = new foo();
$nome = 'MeuNome';

echo <<<'EOT'
Meu nome é "$nome". Estou escribindo un pouco de $foo->foo.
Agora, estou escribindo un pouco de {$foo->bar[1]}.
Isto debería mostrar unha 'A' maiúscula: \x41
EOT;
?>

