<?php

// without Yield keyword
function getEven(Int $max): Iterator
{
  $array = array();
  for ($i = 1; $i <= $max; $i++) if ($i % 2 === 0) $array[] = $i;
  return new ArrayIterator($array);
}

// foreach (getEven(100) as $value) {
//   echo $value . PHP_EOL; 
// } 

// with Yield keyword
function getOdd(Int $max): Iterator { for ($i = 1; $i <= $max; $i++) if ($i % 2 === 1) yield $i;}