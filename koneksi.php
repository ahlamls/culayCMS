<?php
session_start();
$servername = "localhost";
$username = "culay";
$password = 'gNEBjzunx13wCs5V!#$gNEBjzunx13wCs5V!#$!gNEBjzunx13wCs5V!#$1re1F!E4r1rEQF!f31f13T!513%$!#%1';
$dbname = "culay";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function eskep($str){
  global $conn;
  return $conn->real_escape_string($str);
}
