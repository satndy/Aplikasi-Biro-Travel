<?php 

include 'class/user.php';


$db= new user();




$aksi = $_GET['aksi'];
 if($aksi == "tambah"){
 	$db->input( $_FILES['foto']['name'],$_POST['nama_user'],$_POST['email_user'],$_POST['no_hp'],$_POST['no_rek'],$_POST['nama_rek'],$_POST['username'],$_POST['password'],$_POST['tgl_lahir'],$_POST['jekel'],$_POST['alamat']);
 	
 	header("location:index.php");

 }elseif($aksi == "hapus"){ 	
 	$db->hapus($_GET['id']);
	header("location:profil.php");

}elseif($aksi == "update"){
 	$db->update($_POST['id_user'],$_FILES['foto']['name'],$_POST['nama_user'],$_POST['email_user'],$_POST['no_hp'],$_POST['no_rek'],$_POST['nama_rek'],$_POST['username'],$_POST['password'],$_POST['tgl_lahir'],$_POST['jekel'],$_POST['alamat']);
 	header("location:profil.php");
 }

 elseif($aksi == "tambah_order"){
$db->order($_POST['id_user'],$_POST['id_paket'],$_POST['id_hotel'],$_POST['id_daerah'],$_POST['tgl_pesan'],$_POST['tgl_tour']);
 	
 	header("location:orderlist.php");
 }

?>
