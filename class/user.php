<?php 

include "koneksi.php";

	
class user extends database{

	function __construct()
			{
				$this->getConnection();
			}

			public function cek_login($username,$password){
				
				$sql = "SELECT * from tbl_user
						WHERE username = '$username' AND password = '$password'";
				$result = mysqli_query($this->getConnection(),$sql);
				$user_data	= mysqli_fetch_array($result);
				$no_rows	= mysqli_num_rows($result); 

				if ($no_rows == 1) {
					$_SESSION['login'] = true;
					$_SESSION['id_user'] = $user_data['id_user'];
					$_SESSION['nama_user'] = $user_data['nama_user'];
					$_SESSION['foto'] = $user_data['foto'];

				

					return TRUE;
				}
				else
				{
					return FALSE;
				}
			}

	function tampil_data(){
		$sql = "SELECT * FROM tbl_user";
				$result = mysqli_query($this->getConnection(),$sql);
				while ($row = mysqli_fetch_array($result)) {
					$hasil[] = $row;
				}
				return $hasil;

	}

	function input($foto,$nama_user,$email_user,$no_hp,$no_rek,$nama_rek,$username,$password,$tgl_lahir,$jekel,$alamat){
	
			$sql = "insert into tbl_user  (`foto`, `nama_user`, `email_user`, `no_hp`, `no_rek`, `nama_rek`, `username`, `password`, `tgl_lahir`, `jekel`, `alamat`) values('$foto','$nama_user','$email_user','$no_hp','$no_rek','$nama_rek','$username','$password','$tgl_lahir','$jekel','$alamat')";
				$result = mysqli_query($this->getConnection(),$sql);

		 move_uploaded_file($_FILES['foto']['tmp_name'], "foto/".$_FILES['foto']['name']);
 
  echo"<script>alert('Gambar Berhasil diupload !');history.go(-1);</script>";
	}	

	function hapus($id_user){
$sql = "DELETE from tbl_user where id_user='$id_user'";
				$result = mysqli_query($this->getConnection(),$sql);

				
	}
	
	function edit($id_user){
			$sql = "SELECT * from tbl_user where id_user='$id_user'";
				$result = mysqli_query($this->getConnection(),$sql);
				while ($row = mysqli_fetch_array($result)) {
					$hasil[] = $row;
				}
				return $hasil;
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
public function order($id_user,$id_paket,$id_hotel,$id_daerah,$tgl_pesan,$tgl_tour){
	
			$sql = "INSERT INTO `tbl_pesan` (`id_pesan`, `id_user`, `id_paket`, `id_hotel`, `id_daerah`, `tgl_pesan`, `tgl_tour`) VALUES (NULL, '$id_user','$id_paket','$id_hotel','$id_daerah','$tgl_pesan','$tgl_tour')";
				$result = mysqli_query($this->getConnection(),$sql);



} 
}

?>