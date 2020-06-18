<?php 

include "koneksi.php";

if (isset($_POST["submit"])) {

	$nm_produk = $_POST["nm_produk"];
	$keterangan = $_POST["keterangan"];
	$harga = $_POST["harga"];
	$jumlah = $_POST["jumlah"];

	$query = "INSERT INTO produk VALUES('$nm_produk','$keterangan','$harga','$jumlah')";
	mysqli_query($koneksi, $query);
	if ($_POST["submit"]) {
		echo "<script>
		alert('Data Berhasil Ditambah!');
		document.location.href = 'beranda.php';
	  </script>";
	}else {
		echo "<script>
		alert('Data Gagal Ditambah!');
		document.location.href = 'beranda.php';
	  </script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Produk</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<div class="table-box">
	<div class="table-title">Tambah Produk</div>
	<div class="table-content">
	 	<form action="" method="POST">
			<label>Nama Produk</label>
			<input type="text" class="form-tambah" name="nm_produk" placeholder="Masukan Nama Produk" required>

			<label>Keterangan</label>
			<input type="text" class="form-tambah" name="keterangan" placeholder="Masukan Keterangan" required>

			<label>Harga</label>
			<input type="number" class="form-tambah" name="harga" placeholder="Masukan Harga Produk" required>

			<label>Jumlah</label>
			<input type="number" class="form-tambah" name="jumlah" placeholder="Masukan Jumlah" required>

			<input type="submit" name="submit" class="btn-tambah" value="TAMBAH">
		</form>
	</div>
</div>
</body>
</html>