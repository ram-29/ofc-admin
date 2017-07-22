<?php
  define('ROOT_URL', <YOUR_ROOT_URL>);
  define('DB_HOST', 'localhost');
  define('DB_USER', <YOUR_DB_USER>);
  define('DB_PASS', <YOUR_DB_PASS>);
  define('DB_NAME', <YOUR_DB_NAME>);

  // Navigation:Active
  $path = explode('/', $_SERVER['PHP_SELF']);
  $filename = end($path);