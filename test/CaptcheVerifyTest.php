<?php

require_once "../src/Captche.php";

use Wd\Captche;

$captche= new Captche();
$a=$captche->verify($_GET['p'],$_GET['h']);
var_dump($a);

