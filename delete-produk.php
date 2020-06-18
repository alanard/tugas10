<?php 


include "koneksi.php";

$delete = mysqli_query($koneksi, "DELETE FROM produk WHERE nm_produk = '$_GET[nm_produk]'");

if ($delete) {
	echo "<script>
		alert('Data Berhasil dihapus!');
		document.location.href = 'lomba.php';
	  </script>";
}else {
	echo "<script>
		alert('Data Gagal dihapus!');
		document.location.href = 'lomba.php';
	  </script>";
}

?>