<?php 

include '../class/admin.php';

$db= new admin();



$aksi = $_GET['aksi'];
 if($aksi == "tambah"){
 	$db->input( $_FILES['foto']['name'],$_POST['user_admin'],$_POST['pass_admin'],$_POST['level'],$_POST['nama']);
 	
 	header("location:admin.php#ajax/data_admin.php");

 }elseif($aksi == "hapus"){ 	
 	$db->hapus($_GET['id']);
	header("location:admin.php#ajax/data_admin.php");

}elseif($aksi == "update"){
 	$db->update($_POST['id'],$_FILES['foto']['name'],$_POST['user_admin'],$_POST['pass_admin'],$_POST['level'],$_POST['nama']);
 	header("location:admin.php#ajax/data_admin.php");
 }
?>