<?php
namespace  Origin {
  interface Car {
    function drive(): void;
    function getTire(): int;
  }

  class Supra implements Car {
    public function drive(): void
    {
      echo "VROOOOMMMM";
    }

    public function getTire(): int
    {
      return 4;
    }
  }

  $supra = new Supra;
  $supra->drive();
}