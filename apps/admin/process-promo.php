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
		$query_get_shipped = "SELECT kode_produk FROM TOKOKEREN.SHIPPED_PRODUK S, TOKOKEREN.SUB_KATEGORI SK where SK.kode = S.kategori AND SK.nama='".$sub_kategori."'";
		$res_shipped = pg_query($query_get_shipped);
		while ($row = pg_fetch_assoc($res_shipped)) {
			$kode_to_insert = $row['kode_produk'];
			$queryInsert_Shipped = "INSERT INTO TOKOKEREN.PROMO_PRODUK (id_promo, kode_produk) VALUES ('".$id."', '".$kode_to_insert."')";
			echo "$queryInsert_Shipped";
			echo "<br>";
			$result_insert_shipped = pg_query($queryInsert_Shipped);
			if(!$queryInsert_Shipped){
				$errormessage = pg_last_error(); 
		   		echo "Error with query: " . $errormessage; 
		    	exit(); 
				}
			}
			$_SESSION['message'] ="Promo Berhasil Ditambahkan";
			header("location: index.php");	
	}else{
		$errormessage = pg_last_error(); 
	    echo "Error with query: " . $errormessage; 
	    exit(); 
	} 

}