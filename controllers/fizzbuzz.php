<?php
require_once "include/util.php";
// require_once "models/fizzbuzz.php";

function post_check() {
  $result = 'NaN';
  $number = (int)safeParam($_POST, 'number', false);
  if ($number) {
    if ($number % 3 != 0 && $number % 5 != 0) {
      $result = $number;
    } else if ($number % 3 == 0 && $number % 5 == 0) {
      $result = "FizzBuzz";
    } else if ($number % 3 == 0) {
      $result = "Fizz";
    } else if ($number % 5 == 0) {
      $result = "Buzz";
    }
  }
  $result = array("result" => $result);
  echo(json_encode($result));
  exit();  
}