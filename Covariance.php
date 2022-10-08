<?php

namespace Origin {

  class Animal {
    var String $name;
  }

  interface AnimalShelter {
    public function adopt(String $name): Animal;
  }

  class Cat extends Animal {
    public function __construct(String $name)
    {
      $this->name = $name;
    }

    public function interact(): void
    {
      echo "MEOW MEOW" . PHP_EOL;
    }
  }

  class Dog extends Animal {}

  class CatShelter implements AnimalShelter {
    public function adopt(string $name): Cat
    {
      return new Cat($name);
    }
  }
}

namespace {
  use Origin\CatShelter;

  $shelter = new CatShelter;

  $kyoto = $shelter->adopt("Kyoto");

  $kyoto->interact();
}