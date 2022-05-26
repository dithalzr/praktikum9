<?php 
include 'koneksi.inc.php';

$username=$_POST['username'];
$password=$_POST['password'];

$select=mysqli_query($conn, "SELECT * FROM admin WHERE username='$username' AND password='password'");
header('location:cetak.php');
?>