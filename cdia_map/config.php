<?php

// start sessions
session_start();

// database connection constants
define('HOST', 'localhost');
define('PORT', 8889);
define('USERNAME', 'root');
define('PASSWORD', 'root');
define('DATABASE', 'cdia_map');

// autoload classes
spl_autoload_register(function ($class) {
    $path = str_replace('\\', '/', $class);
    require_once $path . '.php';
});

// setup database
try {
    $host = HOST;
    $port = PORT;
    $database = DATABASE;
    $db = new \PDO("mysql:host=$host;port=$port;dbname=$database", USERNAME, PASSWORD);
} catch (\PDOException $e) {
    echo $e->getMessage();
    exit();
}

?>