<?php
require_once "include/util.php";
// require_once "models/fizzbuzz.php";

function post_check() {
  $result = null;
  $number = safeParam($_POST, 'number', false);
  if ($number) {
    $number = (int)$number;
    if (number % 3 == 0)
  }
  // Put your code for post_check here, something like
  // 1. Load and validate parameters or form contents
  // 2. Query or update the database
  // 3. Render a template or redirect
  renderTemplate(
    "views/fizzbuzzcheck.php",
    array(
      'title' => 'fizzbuzzcheck',
    )
  );
}