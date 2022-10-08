<?php

$str = <<<STR
  Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci,
  reiciendis corporis aliquam veritatis, ad magni et ipsum fuga libero officia reprehenderit
  alias velit cupiditate rem nobis aliquid? Quas, fuga dolorum.
STR;

$matces = array();

$res = preg_match_all("/[,?\.]/i", $str, $matces);

// echo "Sum of spacial characters: $res" . PHP_EOL;
// var_dump($matces);

$replace = preg_replace("/kasar1|kasar2/i", "***", "dasar kasar1 kasar2!");
// echo $replace . PHP_EOL;

$split = preg_split("/[\s,-]/", "Romeo Noveanre,kyoto-jaka");
var_dump($split);