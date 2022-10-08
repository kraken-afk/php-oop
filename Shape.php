<?php

namespace Origin {
  class Shape {
    public function getCorner(): int
    {
      return 0;
    }
  }

  class Rectangle extends Shape{
    private int $corner;

    public function __construct(int $n)
    {
      $this->corner = $n;
    }

    public function getCorner(): int
    {
      return $this->corner;
    }

    public function getParentCorner() {
      return parent::getCorner();
    }
  }
}

namespace {
  use Origin\{Shape, Rectangle};

  $shape = new Shape;
  $rectangle = new Rectangle(4);

  echo $shape->getCorner() . PHP_EOL;
  echo $rectangle->getCorner() . PHP_EOL;

  class Programmer {
    var string $name;
    var $isEmploy = false;

    public function __construct($name)
    {
      $this->name = $name;
    }
  }

  class Company {
    public function __construct(Programmer $employee)
    {
      $employee->isEmploy = true;
    }
  }
  $me = new Programmer("Romeo");
  $company = new Company($me);

  var_dump($me->isEmploy);
}