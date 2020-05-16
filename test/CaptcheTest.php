<?php

require_once "../src/Captche.php";

use Wd\Captche;

$captche= new Captche();
$a=$captche->entry();
var_dump($a);