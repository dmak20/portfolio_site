<?php

// connect to the mysql server
$mysql_server = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';
$mysql_db = 'dmak';

$conn = new mysqli($mysql_server, $mysql_user, $mysql_pass, $mysql_db);

if ($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}

?>