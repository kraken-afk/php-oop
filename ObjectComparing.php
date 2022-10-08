<?php
require_once "./Person.php";

use Helper\Person;

$objectOne = new Person("Romeo", 17, "id");
$objectTwo = new Person("Romeo", 17, "id");

var_dump($objectOne == $objectTwo); // true
var_dump($objectOne === $objectTwo);  // false