<?php

namespace Valarep;

use Valarep\classes\Animal;

require_once "vendor/autoload.php";

echo"<pre>";

$a = new Animal();
$a->img_src = "images/hero.png";
$a->blabla = 15 ;

var_dump($a);

echo "</pre>";