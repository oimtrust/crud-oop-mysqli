<?php 
	include 'apps/config/database.php';

	/**
	* 
	*/
	class Connection
	{
		
		public function __construct()
		{
			$this->db 	= new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
		}

		public function execute($query)
		{
			$result 	= $this->db->query($query);
			return $result;
		}

		public function redirect($url)
		{
			header("location: $url");
		}
	}
 ?>