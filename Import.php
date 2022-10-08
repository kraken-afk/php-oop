<?php

require_once "./NameSpace.php";

use Origin\Person;
use Secondary\Person as PersonTwo;
use const Origin\WORD;

$me = new Person("Romeo");
$me->sayHello();

$neko = new PersonTwo("Kyoto");
$neko->introduce();

echo WORD . PHP_EOL;