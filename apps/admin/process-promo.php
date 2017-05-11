<?php
session_start();
if(isset($_POST['submit'])){
	$deskripsi = $_POST['deskripsi'];
	$periode_awal = $_POST['periode_awal'];
	$periode_akhir = $_POST['periode_akhir'];
	$kode = $_POST['kode'];	
	$kategori = $_POST['kategori'];	
	$sub_kategori = $_POST['sub_kategori'];	
	
	$conn= pg_connect("host=localhost dbname=hafizhrafizal user=postgres password=basdatkeren");
	$query = "SELECT * FROM PROMO";
	$resultInsert = pg_query($query);
	if ($resultInsert) { 
		$_SESSION['message'] ="Jasa Kirim Berhasil Ditambahkan";
		header("location: create-shipping.php");	
	}else{
		$errormessage = pg_last_error(); 
	    echo "Error with query: " . $errormessage; 
	    exit(); 
	} 

}