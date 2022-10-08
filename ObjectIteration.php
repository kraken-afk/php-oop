<?php

class Person implements IteratorAggregate{
  protected String $name;
  protected Int $age;
  

  public function __construct(String $name, Int $age)
  {
    $this->name = $name;
    $this->age = $age;
  }

  public function greet(): void
  {
    echo "Hello, My name is $this->name, and i'm $this->age years old" . PHP_EOL;
  }

  // public function getIterator(): Traversable
  // {
  //   return new ArrayIterator((array)$this);
  // }

  public function getIterator(): Traversable
  {
    return new ArrayIterator((array)$this);
  }
}

$me = new Person("Romeo Noveanre", 17);
$me->greet();

foreach ($me as $key => $value) {
  echo "$key: $value" . PHP_EOL;
}