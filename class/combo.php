<?php 

include "koneksi.php";

	
class combo extends database{

	function __construct()
			{
				$this->getConnection();
			}

			
	function tampil_paket(){
		$sql = "SELECT * FROM tbl_paket";
				$result = mysqli_query($this->getConnection(),$sql);
				while ($row = mysqli_fetch_array($result)) {
					$hasil[] = $row;
				}
				return $hasil;

	}

	function tampil_hotel(){
		$sql = "SELECT * FROM tbl_hotel";
				$result = mysqli_query($this->getConnection(),$sql);
				while ($row = mysqli_fetch_array($result)) {
					$hasil[] = $row;
				}
				return $hasil;

	}
	function tampil_daerah(){
		$sql = "SELECT * FROM tbl_daerah";
				$result = mysqli_query($this->getConnection(),$sql);
				while ($row = mysqli_fetch_array($result)) {
					$hasil[] = $row;
				}
				return $hasil;

	}
	
	


} 

?>