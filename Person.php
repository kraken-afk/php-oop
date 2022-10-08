<?php

namespace Helper {
  class Person
  {
    const AUTHOR = "Romeo Noveanre";
    const CLASSNAME = "Person";

    var string $name;
    var int $age = 0;
    var ?string $country;

    public function __construct(string $name, int $age, ?string $country)
    {
      $this->name = $name;
      $this->age = $age;
      $this->country = $country;
    }

    public function __destruct()
    // __destruct function will invoked when the class get removed from memory
    {
      echo "Class removed from memory" . PHP_EOL;
    }

    public function __toString(): String
    {
     return "Name: $this->name\nAge: $this->age" . PHP_EOL;
    }

    public function __invoke(...$args): Void
    {
      $join = join(", ", $args);
      echo Person::CLASSNAME . " Invoked with\nArguments: [$join]" . PHP_EOL;
    }

    public function __debugInfo(): Array
    {
      $array = (Array)$this;
      $array["author"] = Person::AUTHOR;
      $array["classname"] = Person::CLASSNAME;

      return $array;
    }

    public function introduce(): void
    {
      echo "Hello my name is $this->name and i'am $this->age years old, i`m from $this->country" . PHP_EOL;
    }
  }
}