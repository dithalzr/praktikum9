<?php
$host="localhost";
$username="root";
$password="";
$db="20082010143";

$conn=mysqli_connect($host, $username, $password, $db);
if (!$conn) {
		echo 'Error : '.mysqli_connect_error($conn);
	}
?>