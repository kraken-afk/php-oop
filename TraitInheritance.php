<?php

namespace Origin {
  trait sayGoodBye {
    public static function sayGoodBye(): void
    {
      echo "Good Bye";
    }
  }
}



namespace {
  require_once "./Trait.php";

  trait All {
    use Origin\sayHello, Origin\sayGoodBye;
  }

  class Greet {
    use All;
  }

  Greet::sayGoodBye();
}