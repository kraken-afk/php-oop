<?php

namespace Origin {

  class Math
  {
    const INFO = "Math Helper V 1.0.0";

    static public function sum(int ...$n): int
    {
      $res = 0;
      
      return $res;
    }
  }
}


namespace {
  use Origin\Math;

  echo Math::INFO . PHP_EOL;
  echo Math::sum(2, 1, 4, 5, 6);

  
}