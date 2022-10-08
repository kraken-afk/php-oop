<?php

/**
 * think namespace like folder
 */

namespace Origin {

  const WORD = "Hello, World!";

  class Person {
    var string $name;
    public function __construct(string $name)
    {
      $this->name = $name;
    }

    public function sayHello(): void
    {
      echo "Hello, My name is $this->name" . PHP_EOL;
    }
  }
}

namespace Secondary {

  const WORD = "Hello, Sea!";

  class Person {
    var string $name;
    public function __construct(string $name)
    {
      $this->name = $name;
    }

    public function introduce(): void
    {
      echo "Hello, My name is $this->name";
    }
  }
}