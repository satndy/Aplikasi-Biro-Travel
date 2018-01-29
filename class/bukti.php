<?php 

include "koneksi.php";

	
class bukti extends database{

	function __construct()
			{
				$this->getConnection();
			}

			

	function hapus($id_user){
$sql = "DELETE from tbl_user where id_user='$id_user'";
				$result = mysqli_query($this->getConnection(),$sql);

				
	}
	
	function insert($id_pesan,$file){
			$sql = "INSERT INTO `tbl_bukti` (`id_bukti`, `id_pesan`, `file`) VALUES (NULL, '$id_pesan', '$file');";
				$result = mysqli_query($this->getConnection(),$sql);

			 move_uploaded_file($_FILES['file']['tmp_name'], "images/".$_FILES['file']['name']);
 
  echo"<script>alert('Gambar Berhasil diupload !');history.go(-1);</script>";
	}


	



	function update($id_user,$foto,$nama_user,$email_user,$no_hp,$no_rek,$nama_rek,$username,$password,$tgl_lahir,$jekel,$alamat){


if(empty($foto)){
			$sql = "UPDATE tbl_user SET   nama_user='$nama_user', email_user='$email_user',no_hp='$no_hp',no_rek='$no_rek',nama_rek='$nama_rek',username='$username',password='$password' ,tgl_lahir='$tgl_lahir' ,jekel='$jekel' ,alamat='$alamat'  WHERE id_user='$id_user'";
				$result = mysqli_query($this->getConnection(),$sql);
		}
	
		if(!empty($foto)){
		$sql = "UPDATE tbl_user SET  foto='$foto', nama_user='$nama_user', email_user='$email_user',no_hp='$no_hp',no_rek='$no_rek',nama_rek='$nama_rek',username='$username',password='$password' ,tgl_lahir='$tgl_lahir' ,jekel='$jekel' ,alamat='$alamat'  WHERE id_user='$id_user'";
				$result = mysqli_query($this->getConnection(),$sql);

		 move_uploaded_file($_FILES['foto']['tmp_name'], "foto/".$_FILES['foto']['name']);
 
  echo"<script>alert('Gambar Berhasil diupload !');history.go(-1);</script>";
			
		}

	
	
	}

}

?>