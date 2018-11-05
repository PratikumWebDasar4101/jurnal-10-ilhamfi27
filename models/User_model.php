<?php 
require_once 'Koneksi.php';
class User_model{
	private $conn;

	function __construct()
	{
		$koneksi = new Koneksi();
		$this->conn = $koneksi->conn();
	}

	public function user_registrasi($username,$password)
	{
		$query = "INSERT INTO `user`(`username`, `password`) VALUES ('$username','$password')";
		$query_success = mysqli_query($this->conn,$query);
		return $query_success;
	}

	public function user_login($username,$password)
	{
		$query = "SELECT `id`, `username`, `password` FROM `user` WHERE username = '$username' AND password = '$password'";
		$query_success = mysqli_query($this->conn,$query);
		return $query_success;
	}
}
?>