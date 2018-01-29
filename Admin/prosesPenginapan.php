<?php 

include '../class/penginapan.php';

$db= new penginapan();



$aksi = $_GET['aksi'];
 if($aksi == "tambah"){
 	$db->input( $_POST['hotel'],$_POST['harga'],$_POST['ket_hotel'],$_FILES['foto']['name']);
 	
 	header("location:admin.php#ajax/penginapan.php");

 }elseif($aksi == "hapus"){ 	
 	$db->hapus($_GET['id']);
	header("location:admin.php#ajax/penginapan.php");

}elseif($aksi == "update"){
 	$db->update($_POST['id_hotel'],$_POST['hotel'],$_POST['harga'],$_POST['ket_hotel'],$_FILES['foto']['name']);
 	header("location:admin.php#ajax/penginapan.php");
 }
?>