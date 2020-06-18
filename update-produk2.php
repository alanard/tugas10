<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
</head>
<body>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['nm_produk'];
	$data = mysqli_query($koneksi,"SELECT * FROM produk WHERE nm_produk='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update-produk2.php">
			<table>
				<tr>			
					<td>Nama Produk</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nm_produk" value="<?php echo $d['nm_produk']; ?>">
					</td>
				</tr>
				<tr>
					<td>Keterangan</td>
					<td><input type="text" name="keterangan" value="<?php echo $d['keterangan']; ?>"></td>
				</tr>
				<tr>
					<td>Harga</td>
					<td><input type="number" name="harga" value="<?php echo $d['harga']; ?>"></td>
                </tr>
                <tr>
					<td>jumlah</td>
					<td><input type="number" name="jumlah" value="<?php echo $d['jumlah']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>