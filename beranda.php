
<?php

include "koneksi.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arkademy</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="table-box">
	<div class="table-title">Kelola barang</div>
	<div class="table-content">
		<table class="table">
			<tr>
				<th>No</th>
				<th>Nama Produk</th>
				<th>Keterangan</th>
				<th>Harga</th>
				<th>jumlah</th>
				<th>Operasi</th>
			</tr>
			<?php 
				$hasil = mysqli_query($koneksi, "SELECT * FROM produk ORDER BY nm_produk");
				$nomer = 1;
				while ($data = mysqli_fetch_assoc($hasil)) :
				?>
			<tr>
				<td><?= $nomer?></td>
				<td><?= $data["nm_produk"] ?></td>
				<td><?= $data["keterangan"] ?></td>
				<td><?= $data["harga"] ?></td>
				<td><?= $data["jumlah"] ?></td>
				<td>
					<a href="update-produk2.php?nm_produk=<?= $data["nm_produk"] ?>" type="button" class="btn-tambah">UPDATE</a>
					<a href="delete-produk.php?nm_produk=<?= $data["nm_produk"] ?>" type="button" class="btn-tambah">DELETE</a>
				</td>
			</tr>
			<?php 
				$nomer++;
				endwhile;
			 ?>
		</table>
		<a href="tambah-produk.php" type="button" class="btn-detail">TAMBAH</a>
	</div>
</div>
</body>
</html>