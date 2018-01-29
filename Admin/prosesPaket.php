<?php 

include '../class/paket.php';

$db= new paket();



$aksi = $_GET['aksi'];
 if($aksi == "tambah"){
 	$db->input( $_POST['nama_paket'],$_POST['harga_paket'],$_POST['ket_paket']);
 	
 	header("location:admin.php#ajax/paket_wisata.php");

 }elseif($aksi == "hapus"){ 	
 	$db->hapus($_GET['id']);
	header("location:admin.php#ajax/paket_wisata.php");

}elseif($aksi == "update"){
 	$db->update($_POST['id_paket'],$_POST['nama_paket'],$_POST['harga_paket'],$_POST['ket_paket']);
 	header("location:admin.php#ajax/paket_wisata.php");
 }
?>