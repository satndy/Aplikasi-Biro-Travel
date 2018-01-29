<?php 

include "koneksi.php";

	
class penginapan extends database{

	function __construct()
			{
				$this->getConnection();
			}

			
	function tampil_data(){
		$sql = "SELECT * FROM tbl_hotel";
				$result = mysqli_query($this->getConnection(),$sql);
				while ($row = mysqli_fetch_array($result)) {
					$hasil[] = $row;
				}
				return $hasil;

	}

	function hapus($id_hotel){
$sql = "DELETE from tbl_hotel where id_hotel='$id_hotel'";
				$result = mysqli_query($this->getConnection(),$sql);

				
	}
	
function input($hotel,$harga,$ket_hotel,$foto){
	
			$sql = "insert into tbl_hotel( `hotel`, `harga`,`ket_hotel`, `foto`) values('$hotel','$harga','$ket_hotel','$foto')";
		
				$result = mysqli_query($this->getConnection(),$sql);

		 move_uploaded_file($_FILES['foto']['tmp_name'], "../images/".$_FILES['foto']['name']);
 
  echo"<script>alert('foto Berhasil diupload !');history.go(-1);</script>";
	}	

	function edit($id_hotel){
			$sql = "SELECT * from tbl_hotel where id_hotel='$id_hotel'";
				$result = mysqli_query($this->getConnection(),$sql);
				while ($row = mysqli_fetch_array($result)) {
					$hasil[] = $row;
				}
				return $hasil;
	}


	function update($id_hotel,$hotel,$harga,$ket_hotel,$foto){


if(empty($foto)){
			$sql = "UPDATE tbl_hotel SET hotel='$hotel',harga=$harga, ket_hotel='$ket_hotel' WHERE id_hotel='$id_hotel'";
				$result = mysqli_query($this->getConnection(),$sql);
		}
	
		if(!empty($foto)){
		$sql = "UPDATE tbl_hotel SET hotel='$hotel',harga=$harga, ket_hotel='$ket_hotel',foto='$foto' WHERE id_hotel='$id_hotel'";
				$result = mysqli_query($this->getConnection(),$sql);

		 move_uploaded_file($_FILES['foto']['tmp_name'], "../images/".$_FILES['foto']['name']);
 
  echo"<script>alert('foto Berhasil diupload !');history.go(-1);</script>";
			
		}

	
	
	}

} 

?>