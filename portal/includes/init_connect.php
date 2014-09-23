<?php # Script 8.2 - mysqli_connect.php

// This file contains the database access information.
// This file also establishes a connection to MySQL
// and selects the database.
GLOBAL $conn;
GLOBAL $conn2;
// Set the database access information as constants:
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'portal');

DEFINE ('DB_NAME2', 'log_efceobuduref');

// Make the connection to the portal database:
$conn = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL: ' .mysqli_connect_error() );

// Make the connection to the log database:
$conn2 = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME2) OR die ('Could not connect to MySQL: ' .mysqli_connect_error() );



?>