<?php
// Convert from array into object

$array = [
  "firstname" => "Romeo",
  "lastname" => "Noveanre",
  "age" => 17
];

$obj = (object)$array;

var_dump($obj->age);