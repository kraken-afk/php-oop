<?php

// Similiar to Throw Handling in Javascript

namespace Origin;

class LoginRequest
{
  var String $username;
  var String $password;

  public function __construct(String $username, String $password)
  {
    $this->username = $username;
    $this->password = $password;
  }
}

function validationLoginRequest(LoginRequest $data)
{
  if (!trim($data->username) || !trim($data->password)) {
    $msgUsername = !$data->username ? "" : "username";
    $msgPassword = !$data->password ? "" : "password";
    $and = $data->username && $data->password ? "&" : "";

    throw new \Exception("$msgUsername $and $msgPassword are not setted yet." . PHP_EOL);
  } else {
    return true;
  }
}

// var_dump(
//   ValidationLoginRequest(new LoginRequest("Romeo", ""))
// );
