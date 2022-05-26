<?php
error_reporting(0);
include "admin/koneksi.inc.php";

//memindahkan nilai data form ke variabel sederhana agar mudah ditulis

		// proses insert data
		$insert = mysqli_query($conn, "INSERT INTO kontak VALUES (
			'".$_POST['id']."',
			'".$_POST['nama']."',
			'".$_POST['jkel']."',
			'".$_POST['email']."',
			'".$_POST['alamat']."',
			'".$_POST['kota']."',
			'".$_POST['pesan']."'
		)");

		if ($insert) {
			echo "<center>Data Berhasil Terkirim<center>";
		} else {
			echo "Gagal!";
		}
mysqli_close();
header("location:kontak.html");
?>