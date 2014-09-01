<?php # Script 8.2 - mysqli_connect.php

// This file contains the database access information.
// This file also establishes a connection to MySQL
// and selects the database.
GLOBAL $conn;
// Set the database access information as constants:
DEFINE ('DB_USER', 'lynqxc5_lynqx');
DEFINE ('DB_PASSWORD', 'dj05imon');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'lynqxc5_washman');

// Make the connection:
$conn = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL: ' .mysqli_connect_error() );

?>