<?php 
include'koneksi.php'; 
?>

<!DOCTYPE html>
<html>
<head>

<style type="text/css">
	body { 
		background-image: url(bs4.jpg);
		background-size: 100%; 
		}
</style>
	<br>
	<title>Edit Data Mahasiswa</title>
	<link rel="stylesheet" href="./style.css">
</head>
<div align="center">
    <h2 align="center">Edit Data</h2>

	<?php
	$nim = $_GET['nim'];
	$sql = mysqli_query($koneksi,"select * from mahasiswa where nim='$nim'");
	while($tampil = mysqli_fetch_array($sql)){
		?>

		<form method="post" action="edit-aksi.php">
			<div class="table-users">
			<table align="center" style="padding-bottom: 5px">
				<tr>			
					<td>NIM</td>
					<td>:</td>
					<td>
						<input type="number" name="nim" value="<?php echo $tampil['nim']; ?>">
					</td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama" value="<?php echo $tampil['nama']; ?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>:</td>
					<td><input type="text" name="alamat" value="<?php echo $tampil['alamat']; ?>"></td>
				</tr>
				<tr>
					<td>No.Telpon</td>
					<td>:</td>
					<td><input type="text" name="telepon" value="<?php echo $tampil['telepon']; ?>"></td>
				</tr>	
			</table>
		</div>
			<center>
				<button style="align-content: center;" >Ubah Data</button>
				<a href="index2.php" ><button style="align-content: center;">Keluar</button></a>
			</center>
		</form>
	<?php 
	}
	?>
	</div>
</body>
</html>