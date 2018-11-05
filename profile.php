<?php  
include "koneksi.php";
session_start();
$id = $_SESSION['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body>
	<h3>PROFILE ANDA</h3>
	<table>
		<?php 
		$quwery = "SELECT * FROM user WHERE id = '$id'";
		$result = mysqli_query($conn, $quwery);
		$d = mysqli_fetch_array($result);
		?>
		<tr>
			<td>Username : </td>
			<td>
				<?php echo $d['username']; ?>
			</td>
		</tr>
		<tr>
			<td colspan="2"><a href="logOut.php">Logout</a></td>
		</tr>
	</table>
</body>
</html>