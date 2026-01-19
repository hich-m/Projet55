<?php
// Database configuration - Railway compatible
define('DB_SERVER', getenv('MYSQLHOST') ?: 'localhost');
define('DB_USER', getenv('MYSQLUSER') ?: 'root');
define('DB_PASSWORD', getenv('MYSQLPASSWORD') ?: '');
define('DB_NAME', getenv('MYSQLDATABASE') ?: 'exam_timetable');
define('DB_PORT', getenv('MYSQLPORT') ?: '3306');

// Create connection
$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set charset to utf8
$conn->set_charset("utf8");
?>
