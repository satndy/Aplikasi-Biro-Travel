<?php 

include "koneksi.php";

	
class wisata extends database{

	function __construct()
			{
				$this->getConnection();
			}

			

	function tampil_data(){
		$sql = "SELECT * FROM tempat";
				$result = mysqli_query($this->getConnection(),$sql);
				while ($row = mysqli_fetch_array($result)) {
					$hasil[] = $row;
				}
				return $hasil;

	}

	function input($nama,$konten,$gambar){
	
			$sql = "insert into tempat ( `nama`, `konten`, `gambar`) values('$nama','$konten','$gambar')";
				$result = mysqli_query($this->getConnection(),$sql);

		 move_uploaded_file($_FILES['gambar']['tmp_name'], "../images/".$_FILES['gambar']['name']);
 
  echo"<script>alert('Gambar Berhasil diupload !');history.go(-1);</script>";
	}	

	function hapus($id){
$sql = "DELETE from tempat where id='$id'";
				$result = mysqli_query($this->getConnection(),$sql);

				
	}
	
	function edit($id){
			$sql = "SELECT * from tempat where id='$id'";
				$result = mysqli_query($this->getConnection(),$sql);
				while ($row = mysqli_fetch_array($result)) {
					$hasil[] = $row;
				}
				return $hasil;
	}

	



	function update($id,$nama,$konten,$gambar){


if(empty($gambar)){
			$sql = "UPDATE tempat SET   nama='$nama', konten='$konten' WHERE id='$id'";
				$result = mysqli_query($this->getConnection(),$sql);
		}
	
		if(!empty($gambar)){
		$sql = "UPDATE tempat SET nama='$nama', konten='$konten',gambar='$gambar' WHERE id='$id'";
				$result = mysqli_query($this->getConnection(),$sql);

		 move_uploaded_file($_FILES['gambar']['tmp_name'], "../images/".$_FILES['gambar']['name']);
 
  echo"<script>alert('Gambar Berhasil diupload !');history.go(-1);</script>";
			
		}

	
	
	}

}

?>