<?php 

include '../class/user.php';

$db= new user();



$aksi = $_GET['aksi'];
 if($aksi == "tambah"){
 	$db->input( $_FILES['foto']['name'],$_POST['nama_user'],$_POST['email_user'],$_POST['no_hp'],$_POST['no_rek'],$_POST['nama_rek'],$_POST['username'],$_POST['password'],$_POST['tgl_lahir'],$_POST['jekel'],$_POST['alamat']);
 	
 	header("location:admin.php#ajax/data_member.php");

 }elseif($aksi == "hapus"){ 	
 	$db->hapus($_GET['id']);
	header("location:admin.php#ajax/data_member.php");

}elseif($aksi == "update"){
 	$db->update($_POST['id_user'],$_FILES['foto']['name'],$_POST['nama_user'],$_POST['email_user'],$_POST['no_hp'],$_POST['no_rek'],$_POST['nama_rek'],$_POST['username'],$_POST['password'],$_POST['tgl_lahir'],$_POST['jekel'],$_POST['alamat']);
 	header("location:admin.php#ajax/data_member.php");
 }
?>