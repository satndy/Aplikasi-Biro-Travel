<?php 

include '../class/wisata.php';

$db= new wisata();



$aksi = $_GET['aksi'];
 if($aksi == "tambah"){
 	$db->input( $_POST['nama'],$_POST['konten'],$_FILES['gambar']['name']);
 	
 	header("location:admin.php#ajax/wisata.php");

 }elseif($aksi == "hapus"){ 	
 	$db->hapus($_GET['id']);
	header("location:admin.php#ajax/wisata.php");

}elseif($aksi == "update"){
 	$db->update($_POST['id'],$_POST['nama'],$_POST['konten'],$_FILES['gambar']['name']);
 	header("location:admin.php#ajax/wisata.php");
 }
?>