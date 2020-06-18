<?php 

include "koneksi.php";


$produk = mysqli_query("SELECT * FROM produk WHERE nm_produk = '$_GET[nm_produk]'");
// var_dump($produk);

if (isset($_POST["submit"])) {

	$nm_produk = $_POST["nm_produk"];
	$keterangan = $_POST["keterangan"];
	$harga = $_POST["harga"];
	$jumlah = $_POST["jumlah"];

	$query = "INSERT INTO produk VALUES('nm_produk','$keterangan','$harga','$jumlah')";
	mysqli_query($koneksi, $query);
	if ($_POST["submit"]) {
		echo "<script>
		alert('Data Berhasil Update!');
		document.location.href = 'beranda.php';
	  </script>";
	}else {
		echo "<script>
		alert('Data Berhasil Update!');
		document.location.href = 'beranda.php';
	  </script>";
	}
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Produk Arkademy</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<div class="table-box">
	<div class="table-title">Update Produk Arkademy</div>
	<div class="table-content">
	 	<form action="" method="POST">
			<label>Nama Produk</label>
			<input type="text" class="form-tambah" name="nm_produk" placeholder="Ubah Nama Produk" required>

			<label>Keterangan</label>
			<input type="text" class="form-tambah" name="keterangan" value="<?php echo $produk['keterangan']; ?>" required>

			<label>Harga</label>
			<input type="number" class="form-tambah" name="harga" placeholder="Ubah Harga produk" required>

			<label>Jumlah</label>
			<input type="number" class="form-tambah" name="jumlah" placeholder="Ubah jumlah produk" required>

			<input type="submit" name="submit" class="btn-tambah" value="UPDATE">
		</form>
	</div>
</div>
</body>
</html>