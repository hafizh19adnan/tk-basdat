<?php
session_start();
if(isset($_POST['submit'])){
	$nama = $_POST['nama'];
	$lama_kirim = $_POST['lama_kirim'];
	$tarif = $_POST['tarif'];	
	$conn= pg_connect("host=localhost dbname=hafizhrafizal user=postgres password=basdatkeren");
	$query = "INSERT INTO TOKOKEREN.JASA_KIRIM(nama, lama_kirim, tarif) VALUES ('".$nama."', ".$lama_kirim.", ".$tarif.")";
	$resultInsert = pg_query($query);
	if ($resultInsert) { 
		$_SESSION['message'] ="Jasa Kirim Berhasil Ditambahkan";
		header("location: create-shipping.php");	
	}else{
	
	    $_SESSION['message'] = "Nama Jasa Kirim Sudah Ada";
	    header("location: create-shipping.php");
	    exit(); 
	} 
}