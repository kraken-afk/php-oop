<?php

trait A
{
  public static function doA(): void
  {
    echo "A";
  }

  public static function doB(): void
  {
    echo "B";
  }
}


trait B
{
  public static function doA(): void
  {
    echo "a";
  }

  public static function doB(): void
  {
    echo "b";
  }
}

class Letter {
  use A, B {
    A::doA insteadOf B;
    B::doB insteadof A;
  }
}

Letter::doA();