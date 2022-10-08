<?php
class SocialMedia {
  var String $name;

  final public function isOnline(): bool
  {
    return true;
  }
}

final class Twitter extends SocialMedia{
  // 
  public function __construct(String $name)
  {
    $this->name = $name;
  }
}