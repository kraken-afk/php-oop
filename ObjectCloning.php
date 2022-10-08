<?php

class Person
{
  var String $name;
  var Int $age;

  public function __construct(String $name, Int $age)
  {
    $this->name = $name;
    $this->age = $age;
  }

  public function __clone()
  {
    echo "clone succeed" . PHP_EOL;
  }
}

$me = new Person("Romeo", 17);


// only use clone keyword
$clone = clone $me;
$clone->name = "kyoto";

var_dump($me);
var_dump($clone);

$me->country = "id";
var_dump($me);
