<?php

namespace Origin {
  class Product
  {
    private string $name;
    private int $price;

    public function __construct(string $name, int $price)
    {
      $this->name = $name;
      $this->price = $price;
    }

    public function getName()
    {
      return $this->name;
    }

    public function getPrice()
    {
      return $this->price;
    }
  }
}

namespace {
  use Origin\Product;

  $myProduct = new Product("Milk", 10000);
  echo $myProduct->getName() . PHP_EOL;

  class ProductDummy extends Product{
    public function info(): void {
      echo "Name  : " . $this->getName() . PHP_EOL;
      echo "Price : " . $this->getPrice() . PHP_EOL;
    }
  }

  $cola = new ProductDummy("cola", 5000);
  $cola->info();
}