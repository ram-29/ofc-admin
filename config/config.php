<?php
  define('ROOT_URL', 'http://localhost/php/exam/');
  define('DB_HOST', 'localhost');
  define('DB_USER', 'admin');
  define('DB_PASS', 'WATD@FR#$K!123');
  define('DB_NAME', 'php_exam');

  // Navigation:Active
  $path = explode('/', $_SERVER['PHP_SELF']);
  $filename = end($path);