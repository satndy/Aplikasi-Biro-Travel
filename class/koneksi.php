<?php 

class database{

	public $_host = "localhost";
		public $_username = "root";
		public $_password = "";
		public $_database = "tour";
		public $_connection;

	
		public function getConnection() {
			$this->_connection = new mysqli($this->_host, $this->_username, 
											$this->_password, $this->_database);
			if ($this->_connection->connect_errno) {
				return $this->_connection->connect_errno;
			}
				return $this->_connection;
		}

	}

	


?>