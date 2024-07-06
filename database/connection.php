<?php
// Database connection parameters
$host = '127.0.0.1';      // MySQL server host (often 'localhost' or '127.0.0.1')
$username = 'root';       // MySQL username
$password = 'Zaree3520s'; // MySQL password
$database = 'mausak_hope_web'; // MySQL database name

// Create a connection to the database
$mysqli = new mysqli($host, $username, $password, $database);

// Check connection
if ($mysqli->connect_error) {
    die('Connection failed: ' . $mysqli->connect_error);
}

// Optionally, you can set character set to utf8mb4 if needed
if (!$mysqli->set_charset("utf8mb4")) {
    printf("Error loading character set utf8mb4: %s\n", $mysqli->error);
    exit();
}

// Now $mysqli object can be used for interacting with the database
?>
