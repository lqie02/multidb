<?php
	$server = "localhost";
	$user = "root";
	$password = "";
	$database = "pr_mon06";
	$conn = mysqli_connect($server, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
