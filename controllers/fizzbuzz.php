<?php
require_once "include/util.php";

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
  return $result;
}

function post_test() {
  $result = array();
  $start = (int)safeParam($_POST, 'start', false);
  $stop = (int)safeParam($_POST, 'stop', false);
  if ($start > $stop) {
    $temp = $start;
    $start = $stop;
    $stop = $temp;
  }
  for ($i = $start; $i<$stop; ++$i) {
    $result[$i] = fizzbuzz($i);
  }
  echo(json_encode($result));
  exit();  
}

function get_test() {
  // Put your code for get_test here, something like
  // 1. Load and validate parameters or form contents
  // 2. Query or update the database
  // 3. Render a template or redirect
  renderTemplate(
    "views/fizzbuzztest.php",
    array(
      'title' => 'fizzbuzztest',
    )
  );
}