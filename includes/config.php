<?php
$servername = "localhost";
$username = "sambandh_user";
$password = "%6Ao5t#";
$dbname = "sambandh_user";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error . ".<br> Please create a database and import the SQL file");
}

// Start Session
session_start();
