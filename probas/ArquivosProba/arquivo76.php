<?php
$var1 = 1;
//primeira chamada a arquivo76b.php
echo "Primeiro include_once<BR>";
include_once 'arquivo76b.php';

//segunda chamada a arquivo76b.php
$var1++;
echo "Segundo include_once<BR>";
include_once 'arquivo76b.php';

$var1 = 1;
//primeira chamada a arquivo76b.php
echo "Primeiro include<BR>";
include 'arquivo76b.php';

//segunda chamada a arquivo76b.php
$var1++;
echo "Segundo include<BR>";
include 'arquivo76b.php';
?>