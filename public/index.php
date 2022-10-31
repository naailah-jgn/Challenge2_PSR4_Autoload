<?php

require_once '../vendor/autoload.php';

use Greetings\Hello;

$hi = new Hello();
echo $hi->talk();
