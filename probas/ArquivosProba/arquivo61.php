<?php
switch($beer)
{
    case 'tuborg';
    case 'carlsberg';
    case 'heineken';
        echo 'Boa elección';
    break;
    default;
        echo 'Por favor faga unha nova selección...';
    break;
}
?>