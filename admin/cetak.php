<?php
include "koneksi.inc.php";

$select=mysqli_query($conn, "SELECT * FROM kontak ORDER BY nama");

echo "<table width='75%' cellpadding='2' cellspacing='0' border='1'>
<tr>
<th>No</th>
<th>ID</th>
<th>Nama</th>
<th>Jenis Kelamin</th>
<th>Email</th>
<th>Alamat</th>
<th>Kota</th>
<th>Pesan</th>";
$no=1;
while($hasil=mysqli_fetch_row($select)){ 
echo "<tr>
<td>$no</td>
<td>$hasil[0]</td>
<td>$hasil[1]</td>
<td>$hasil[2]</td>
<td>$hasil[3]</td>
<td>$hasil[4]</td>
<td>$hasil[5]</td>
<td>$hasil[6]</td>
</tr>";
$no++;
}
echo "</table>";
?>
<a href="../kontak.html">Kembali</a>