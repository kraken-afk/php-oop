<?php

/**
  Magic function adalah function yang sudah ditentukan
  kegunaannya di php -> default behavior
*/

require_once "./Person.php";

use Helper\Person;

$me = new Person("me", 17, "id");


/**
  __toString();
*/

$str = (String)$me;
echo $str;

/**
  __invoke();
 */
$me("Hello", 12123);

/**
  __debugInfo();
 */
 var_dump($me);

 # for more info explore php.manual