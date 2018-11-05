<?php  
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<?php  
	include "front_end.php";
	?>
	<title>New Data</title>
</head>
<body>

	<br>
	<br>
	<center>
		<h3>CREATE USER</h3>
		<table>
		<form action="prosesNewData.php" method="POST">
			<tr>
				<td>Nama Depan</td>
				<td>
					<input type="text" name="nama_depan" pattern="[A-Za-z ]{1,25}" title="Nama Depan Maximal 25 Karakter">
				</td>
			</tr>
			<tr>
				<td>Nama Belakang</td>
				<td>
					<input type="text" name="nama_belakang" pattern="[A-Za-z ]{1,25}" title="Nama Belakang Maximal 25 Karakter">
				</td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>
					<input type="text" name="nim" pattern="[0-9]{10}" title="Nim Maximal 10 Karakter Serta Harus Angka">
				</td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>
					<input type="text" name="kelas">
				</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>
					<input type="email" name="email" placeholder="@gmail">
				</td>
			</tr>
			<tr>
				<td>hobby</td>
				<td>
					<input type="checkbox" name="hobby[]" value="Menulis">Menulis
					<input type="checkbox" name="hobby[]" value="Membaca">Membaca
					<input type="checkbox" name="hobby[]" value="Makan">Makan
					<input type="checkbox" name="hobby[]" value="Basket">Basket
					<input type="checkbox" name="hobby[]" value="Badminton">Badminton
					<input type="checkbox" name="hobby[]" value="Nonton">Nonton
				</td>
			</tr>
			<tr>
				<td>Genre Film</td>
				<td>
					<input type="checkbox" name="genre_film[]" value="horror">Horror
					<input type="checkbox" name="genre_film[]" value="SCI-Fi">SCI-Fi
					<input type="checkbox" name="genre_film[]" value="action">Action
					<input type="checkbox" name="genre_film[]" value="Kartun">Kartun
					<input type="checkbox" name="genre_film[]" value="anime">Anime
				</td>
			</tr>
			<tr>
				<td>Tempat Wisata</td>
				<td>
					<input type="checkbox" name="tempat_wisata[]" value="jakarta">Jakarta
					<input type="checkbox" name="tempat_wisata[]" value="bali">Bali
					<input type="checkbox" name="tempat_wisata[]" value="lombok">Lombok
					<input type="checkbox" name="tempat_wisata[]" value="tanjung_selor">Tanjung Selor
				</td>
			<tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>
					<input type="date" name="tanggal_lahir">
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="submit" value="submit">
				</td>
			</tr>
		</form>
		
	</table>
	

</body>
</html>