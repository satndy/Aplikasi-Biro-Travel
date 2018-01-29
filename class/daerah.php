<?php 

include "koneksi.php";

	
class daerah extends database{

	function __construct()
			{
				$this->getConnection();
			}

			
	function tampil_data(){
		$sql = "SELECT * FROM tbl_daerah";
				$result = mysqli_query($this->getConnection(),$sql);
				while ($row = mysqli_fetch_array($result)) {
					$hasil[] = $row;
				}
				return $hasil;

	}
	


} 

?>