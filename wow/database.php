<?php
$servername = "localhost";
$username = "wow2016";
$password = "abhinavsetia";
$dbname = "wow2016";
$domain = "wow.bits-quark.org";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

?>
