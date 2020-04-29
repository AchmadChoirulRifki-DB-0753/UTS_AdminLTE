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
	<title>Edit Data Dosen</title>
	<link rel="stylesheet" href="./style.css">
</head>
<div align="center">
    <h2 align="center">Edit Data</h2>

	<?php
	$kode_dosen = $_GET['kode_dosen'];
	$sql = mysqli_query($koneksi,"select * from dosen where kode_dosen='$kode_dosen'");
	while($tampil = mysqli_fetch_array($sql)){
		?>

		<form method="post" action="edit-aksi-anggota.php">
			<div class="table-users">
			<table align="center" style="padding-bottom: 5px">
				<tr>			
					<td>NIM :</td>
					<td>:</td>
					<td>
						<input type="text" name="kode_dosen" value="<?php echo $tampil['kode_dosen']; ?>">
					</td>
				</tr>
				<tr>
					<td>Nama :</td>
					<td>:</td>
					<td><input type="text" name="nama_dosen" value="<?php echo $tampil['nama_dosen']; ?>"></td>	
			</table>
		</div>
			<center>
				<button style="align-content: center;" >Ubah Data</button>
				<a href="index_anggota.php" ><button style="align-content: center;">Keluar</button></a>
			</center>
		</form>
	<?php 
	}
	?>
	</div>
</body>
</html>