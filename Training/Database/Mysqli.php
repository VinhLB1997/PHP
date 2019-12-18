<?php

// Connect database using MySQLi (object-oriented) libary
// Create connect database
$conn = new mysqli("localhost", "root", "");

// Check connection
if ($conn->connect_error) {
    die("Connect error" . $conn->connect_error);
} else {
    echo "Connect OK";
}
