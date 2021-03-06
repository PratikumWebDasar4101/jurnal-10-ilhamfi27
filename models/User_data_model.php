<?php 
require_once 'Koneksi.php';
class User_data_model{
	private $kon;

	function __construct()
	{
		$koneksi = new Koneksi();
		$this->kon = $koneksi->conn();
	}

	public function hapus_user($id)
	{
		$query = "DELETE FROM `data_user` WHERE id = '$id'";
		$query_success = mysqli_query($this->kon, $query);
		return $query_success;
	}
    public function data_user($nama_depan,$nama_belakang,$nim,$kelas,$data_hobby,$data_genre_film,$data_tempat_wisata,$tanggal_lahir)
	{
		$quqery="INSERT INTO `data_user`(
			`nama_depan`,
			`nama_belakang`,
			`nim`,
			`kelas`,
			`hobby`,
			`genre_film`,
			`tempat_wisata`,
			`tanggal_lahir`
		) VALUES (
			'$nama_depan',
			'$nama_belakang',
			'$nim',
			'$kelas',
			'$data_hobby',
			'$data_genre_film',
			'$data_tempat_wisata',
			'$tanggal_lahir'
		)";
		$query_success = mysqli_query($this->kon, $query);
		return $query_success;
	}

	public function list_data()
	{
		$query = "
				SELECT
				    `id`,
				    CONCAT(`nama_depan`, ' ', `nama_belakang`) AS 'Nama',
				    `nim`,
				    `kelas`,
				    `hobby`,
				    `genre_film`,
				    `tempat_wisata`,
				    `tanggal_lahir`
				FROM
				    `data_user`
				";
		$result = mysqli_query($this->kon,$query);
		$data = array();
		while ($d = mysqli_fetch_array($result)) {
			array_push($data,$d);
		}
		return $data;
	}
}
?>