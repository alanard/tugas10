<?php 

$koneksi = mysqli_connect("localhost","root","","arkademy") or die ("Gagal Menghubungkan Ke database");


// hanya untuk proses debuging
if ($koneksi) {
	echo "Terhubung";
}else {
	echo "Gagal Terhubung";
}

?>