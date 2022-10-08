<?php
interface HelloWorld {
  public function sayHello(): void;
}

$hello = new class implements HelloWorld {
  public function sayHello(): void
  {
    echo "Hello World!" . PHP_EOL;
  }
};
$hello->sayHello();