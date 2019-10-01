<?php
/*
 * ROUTER
 * redirects URLs to their proper .php files.
 */

// get the URI requested
$request = $_SERVER['REQUEST_URI'];

// remove .php if used
$request = rtrim($request, ".php");

// redirect '' or '/' to home
if ($request == '' or $request == '/') {
  $request = "/index";
}

// redirect to actual .php file
$request = __DIR__ . $request . ".php";

// check if it exists, if so: use it!
if (!file_exists($request)) {
  require '404.php';
} else {
  /** @noinspection PhpIncludeInspection */
  // (this stops PhpStorm complaining)
  require $request;
}
