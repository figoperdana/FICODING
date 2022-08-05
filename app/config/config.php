<?php

$root = (isset($_SERVER['HTTPS']) ? "https://" : "http://").$_SERVER['HTTP_HOST'];
$root .= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
define('BASEURL', $root);

// DB
define('DB_HOST', 'us-cdbr-east-06.cleardb.net');
define('DB_USER', 'bb56e5c72c1b8a');
define('DB_PASS', 'e6afea9f');
define('DB_NAME', 'heroku_38bfe8e5b9a810e');
