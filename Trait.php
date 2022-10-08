<?php

namespace Origin {
  trait sayHello
  {
    public function sayHello(?string $name = null): void
    {
      if (is_null($name))
        echo "Hello, Nice to meet you." . PHP_EOL;
      else
        echo "Hello $name, Nice to meet you." . PHP_EOL;
    }

    public function run(): void
    {
      echo "run from Trait!" . PHP_EOL;
    }
  }
}

namespace {

  use Origin\sayHello;

  class Person
  {
    private string $name;

    public function __construct(string $name)
    {
      $this->name = $name;
    }

    public function run(): void
    {
      echo "run from class" . PHP_EOL;
    }

    use sayHello;
  }

  $me = new Person("Romeo");
  $me->sayHello("Kyoto");
  $me->run();
}
