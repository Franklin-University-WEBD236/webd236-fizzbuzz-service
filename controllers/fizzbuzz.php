<?php
require_once "include/util.php";
// require_once "models/fizzbuzz.php";

function fizzbuzz($number) {
  $result = "NaN";
  if ($number % 3 != 0 && $number % 5 != 0) {
    $result = $number;
  } else if ($number % 3 == 0 && $number % 5 == 0) {
    $result = "FizzBuzz";
  } else if ($number % 3 == 0) {
    $result = "Fizz";
  } else if ($number % 5 == 0) {
    $result = "Buzz";
  }
  return result;
}

function post_check() {
  $result = array();
  $start = (int)safeParam($_POST, 'start', false);
  $stop = (int)safeParam($_POST, 'stop', false);
  if ($start > $stop) {
    
  }
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