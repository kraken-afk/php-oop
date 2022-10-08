<?php
namespace Origin {

    use Locale;

  abstract class Location {
    var string $name;

    public function __construct(string $name)
    {
      $this->name = $name;
    }
  }
  class City extends Location{}
}
