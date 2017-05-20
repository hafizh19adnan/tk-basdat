<?php
session_start();
include '../connect.php';

if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$nama=$_POST['nama'];
	$jenis_kelamin = $_POST['jenis_kelamin']{0};
	$no_telp = $_POST['no_telp'];
	$alamat = $_POST['alamat'];
	$tgl_lahir=$_POST['tgl_lahir'];
	if($_POST['password'] == $_POST['password-match']){
		$password=$_POST['password'];
	}else{
		$_SESSION['message']="Pendaftaran Gagal. Password tidak cocok";
		header("location: register.php");
		exit();
	}
	
	
	$conn= pg_connect("host=localhost dbname=hafizhrafizal user=postgres password=basdatkeren");
	$query = "INSERT INTO TOKOKEREN.PENGGUNA( email, password, nama, jenis_kelamin, tgl_lahir, no_telp, alamat ) VALUES ('".$email."', '".$password."', '".$nama."','".$jenis_kelamin."', '".$tgl_lahir."', ".$no_telp.",'".$alamat."')";
	$resultInsert = pg_query($query);

	if (!$resultInsert) {
		$errormessage = pg_last_error(); 
	   	if(strpos($errormessage, 'email')){
	    	$_SESSION['message']='Email sudah terpakai';
	    } 
	    header("location: register.php");
	    exit(); 
	}

	$query2 = "INSERT INTO TOKOKEREN.PELANGGAN( email, is_penjual, nilai_reputasi, poin ) VALUES ( '".$email."', 'FALSE', NULL, 0)";
	$resultInsert2 = pg_query($query2);
	if ($resultInsert2) { 
		$_SESSION['role']="user";
		$_SESSION['message'] ="Pendaftaran Berhasil";
		$_SESSION['email'] ="$email";
		header("location: user/index.php");
	}else{
		$errormessage = pg_last_error(); 
		if(strpos($errormessage, 'email')){
	    	$_SESSION['message']='Email sudah terpakai';
	    } 
	     header("location: register.php");
	    exit(); 
	} 

		
}