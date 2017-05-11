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
	$queryRow = "SELECT * FROM TOKOKEREN.PROMO";
	$num_promo_row = pg_num_rows(pg_query($queryRow))+1;
	$id = "R0000".$num_promo_row."";
	$query_promo = "INSERT INTO TOKOKEREN.PROMO( id, deskripsi, periode_awal, periode_akhir,
kode) VALUES ( '".$id."', '".$deskripsi."', '".$periode_awal."', '".$periode_akhir."', '".$kode."')";
	$resultInsert = pg_query($query_promo);
	if ($resultInsert) { 
		$_SESSION['message'] ="Promo Berhasil Ditambahkan";
		header("location: index.php");	
	}else{
		$errormessage = pg_last_error(); 
	    echo "Error with query: " . $errormessage; 
	    exit(); 
	} 

}