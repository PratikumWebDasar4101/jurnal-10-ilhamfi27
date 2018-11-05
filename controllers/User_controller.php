<?php 
require_once '../models/User_model.php';
class User_controller
{
	private $user_m;

	function __construct()
	{
		$this->user_m = new User_model();
	}

	public function login_check($username, $password)
	{
		return $this->user_m->user_login($username, $password);
	}

	public function registrasi($username, $password)
	{
		return $this->user_m->user_registrasi($username, $password);
	}
}

$u = new User_controller();
if (isset($_GET['proses'])) {
	session_start();
	switch ($_GET['proses']) {
		case 'login':
			$username = $_POST['username'];
			$password = md5($_POST['password']);
			
			$query_success = $u->login_check($username,$password);

			$result = mysqli_num_rows($query_success);
			
			if ($result>0) {
				$data = mysqli_fetch_array($query_success);
				$_SESSION ['id']=$data['id'];
				$_SESSION ['username']= $data['username'];
				header('location: ../dashboard.php');
			}else{
				$_SESSION['prosesRegistrasi'] = "Username atau Password Belum Terdaftar atau Salah";
				header('location: index.php');
			}
			break;
		case 'signup':
			$username 				= $_POST['username'];
			$password 				= $_POST['password'];
			$konfirmasi_password 	= $_POST['konfirmasi_password'];
			if ($password == $konfirmasi_password) {
				$query_success = $u->registrasi($username, md5($password));
				if ($query_success) {
					header('location: ../index.php');
				}else{
					echo "gagal registrasi";
				}
			} else {
				echo "gagal";
			}
			break;
		
		default:
			# code...
			break;
	}
}