<?php

class Person
{
  const AUTHOR = "Romeo Noveanre";

  var string $name;
  var int $age = 0;
  var ?string $country;

  public function __construct(string $name, int $age, ?string $country)
  {
    $this->name = $name;
    $this->age = $age;
    $this->country = $country;
  }

  public function __destruct()
  // __destruct function will invoked when the class get removed from memory
  {
    echo "GoodBye $this->name" . PHP_EOL;
  }
  
  public function introduce(): void
  {
    echo "Hello my name is $this->name and i'am $this->age years old, i`m from $this->country" . PHP_EOL;
  }

}

$person = new Person("Romeo", 17, "Indonesia");

// $person->introduce();
// :: to access constant
// -> to access properties
// echo "author: " . Person::AUTHOR . PHP_EOL;
// echo "He's age is" . $person->age . "y/o"  . PHP_EOL;

// Person::INFO();


/**
 * INHERITANCE
 */

 class Manager {
   var string $name;

   public function __construct(string $name)
   {
     $this->name = $name;
   }

   public function introduce(): void
   {
     echo "Hello, my name is $this->name" . PHP_EOL;
   }
 }

 $kyoto = new Manager("Kyoto");
//  $kyoto->introduce();

 class VicePresident extends Manager
 {

 }

 $jaka = new VicePresident("Jaka");
//  $jaka->introduce();


 /**
  * NameSpace
  */
  require_once "./NameSpace.php";
  $personOne = new \Origin\Person("Kyoto");
  