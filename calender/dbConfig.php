<?php
// Database configuration

$dbHost     = "127.0.0.1";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "testing";

// $dbHost     = "localhost";
// $dbUsername = "nonalang_karaKrisz";
// $dbPassword = "Hacker13prog";
// $dbName     = "nonalang_nonalang";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
