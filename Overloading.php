<?php
class Zero {
  private array $properties = array();

  public function __get($name)
  {
    return $this->properties[$name];
  }

  public function __set($name, $value)
  {
    return $this->properties[$name] = $value;
  }

  public function __isset($name)
  {
   return isset($this->properties[$name]);
  }

  public function __unset($name)
  {
    unset($this->properties[$name]);
  }

  public function __call($name, $args)
  {
    $args = join(', ', $args);
    echo "Call function $name with arguments $args" . PHP_EOL;
  }

  public static function __callStatic($name, $arguments)
  {
    $args = join(', ', $arguments);
    echo "Call function $name with arguments $args" . PHP_EOL;
  }
}

$zero = new Zero();