<?php

require_once "./helper/ValidationUtil.php";
require_once "./Exception.php";

use Origin\ValidationUtil;

class RegisterRequest {
  var ?string $username;
  var ?string $address;
}

try {
  ValidationUtil::validateReflection(new RegisterRequest());
  echo "VALID" . PHP_EOL;
} catch (Exception $err) {
  echo $err->getMessage() . PHP_EOL;
}

echo "Finish" . PHP_EOL;

