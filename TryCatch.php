<?php
require_once "./Exception.php";

use Origin\LoginRequest;

try {
  Origin\validationLoginRequest(new LoginRequest("  ", "  "));
} catch (Exception $errMsg) {
  var_dump($errMsg);
  echo "Error: {$errMsg->getMessage()}" . PHP_EOL;
  // getTrace() - untuk debug
  var_dump($errMsg->getTrace());
  echo $errMsg->getTraceAsString() . PHP_EOL . PHP_EOL;
} finally {
  echo "DB connection closed" . PHP_EOL;
}

echo "finnish";