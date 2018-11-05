<?php  
require_once 'controllers/User_data_controller.php';
session_start();
$ud = new User_data_controller();
?>
<!DOCTYPE html>
<html>
<head>
	<?php  
	include "front_end.php";
	?>
	<title>Dashboard</title>
</head>
<body>
	<div class="container">
		<div class="row halaman-utama">
			<div class="col-md-3">
				<ul class="nav nav-pills nav-stacked">
				  <li class="active"><a href="dashboard.php">Dashboard</a></li>
				  <li><a href="newData.php">Add Data</a></li>
				  <li><a href="logOut.php">Logout</a></li>
				</ul>
			</div>
			<div class="col-md-9">
				<table class="table table-hover" style="width:100%">
					<thead>
						<tr>
							<th>Nama</th>
							<th>NIM</th>
							<th>Kelas</th>
							<th>Hobby</th>
							<th>Genre Film</th>
							<th>Tempat Wisata</th>
							<th>Tanggal Lahir</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
					<?php 
					// while($data=mysqli_fetch_array($result)){
					foreach ($ud->all_data() as $data) {
					?>
						<tr>
							<td align="center">
								<?php
								echo $data['Nama'];
								?>
							</td>
							<td align="center">
								<?php
								echo $data['nim'];
								?>
							</td>
							<td align="center">
								<?php
								echo $data['kelas'];
								?>
							</td>
							<td align="center">
								<?php
								echo $data['hobby'];
								?>
							</td>
							<td align="center">
								<?php
								echo $data['genre_film'];
								?>
							</td>
							<td align="center">
								<?php
								echo $data['tempat_wisata'];
								?>
							</td>
							<td align="center">
								<?php
								echo $data['tanggal_lahir'];
								?>
							</td>
							<td>
								<a href="edit.php?id=<?php echo $data['id']; ?>"> Edit</a> || 
								<a href="hapus.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Apakah anda akan menghapus data ini?');"> Hapus</a>
							</td>
							
						</tr>
						<?php 
						}
						?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>
