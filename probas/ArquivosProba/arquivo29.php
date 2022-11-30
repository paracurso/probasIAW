<?php
$str = <<<EOD
Exemplo dunha cadea
expandida en varias liñas
empregando a sintaxe heredoc.
EOD;

/* Un exemplo máis complexo con variables. */
class foo
{
    var $foo;
    var $bar;

    function foo()
    {
        $this->foo = 'Foo';
        $this->bar = array('Bar1', 'Bar2', 'Bar3');
    }
}

$foo = new foo();
$nome = 'MeuNome';

echo <<<EOT
O meu nome é "$nome". Estou escribindo un pouco de $foo->foo.
Agora, estou escribindo un pouco de {$foo->bar[1]}.
Isto debería mostrar unha 'A' maiúscula: \x41
EOT;
?>
