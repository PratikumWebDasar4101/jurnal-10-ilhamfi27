<?php 
require_once 'models/User_data_model.php';
class User_data_controller
{
	private $user_data_m;

	function __construct()
	{
		$this->user_data_m = new User_data_model();
	}

	public function all_data()
	{
		return $this->user_data_m->list_data();
	}
}