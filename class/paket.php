<?php 

include "koneksi.php";

	
class paket extends database{

	function __construct()
			{
				$this->getConnection();
			}

			
	function tampil_data(){
		$sql = "SELECT * FROM tbl_paket";
				$result = mysqli_query($this->getConnection(),$sql);
				while ($row = mysqli_fetch_array($result)) {
					$hasil[] = $row;
				}
				return $hasil;

	}

	function hapus($id_paket){
$sql = "DELETE from tbl_paket where id_paket='$id_paket'";
				$result = mysqli_query($this->getConnection(),$sql);

				
	}
	
function input($nama_paket,$harga_paket,$ket_paket){
	
			$sql = "insert into tbl_paket( `nama_paket`, `harga_paket`,`ket_paket`) values('$nama_paket','$harga_paket','$ket_paket')";
		
				$result = mysqli_query($this->getConnection(),$sql);

		
	}	

	function edit($id_paket){
			$sql = "SELECT * from tbl_paket where id_paket='$id_paket'";
				$result = mysqli_query($this->getConnection(),$sql);
				while ($row = mysqli_fetch_array($result)) {
					$hasil[] = $row;
				}
				return $hasil;
	}


	function update($id_paket,$nama_paket,$harga_paket,$ket_paket){

$sql = "UPDATE tbl_paket SET nama_paket='$nama_paket',harga_paket=$harga_paket, ket_paket='$ket_paket' WHERE id_paket='$id_paket'";
				$result = mysqli_query($this->getConnection(),$sql);
		
			
		}

	
	
} 

?>