<?php

namespace Origin;

use Exception;
use ReflectionClass;
use ReflectionProperty;

class ValidationUtil {
  static public function validateReflection(object $request) {
    $reflection = new ReflectionClass($request);
    $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);

    foreach ($properties as $property) {
      if (!$property->isInitialized($request)) {
        throw new Exception("{$property->name} is not set");
      } else if (!is_null($property->getValue($request))) {
        throw new Exception("{$property->name} is null");
      }
    }
  }
}