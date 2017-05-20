<?php 
 session_start();
 $conn =pg_connect("host=localhost dbname=hafizhrafizal user=postgres password=basdatkeren");
 $email = $_SESSION['email'];

 $no_invoice = $_POST['no_invoice'];
 $alamat = $_POST['alamat'];
 $jasa_kirim = $_POST['jasa_kirim'];
 $ongkir = $_POST['ongkir'];
 $total = $_POST['total'];
 $date = date('Y/m/d');
 $time_bayar = date('Y/m/d h:i:s');
 $toko = $_POST['toko'];

 $query1 = "INSERT INTO TOKOKEREN.TRANSAKSI_SHIPPED(email_pembeli, no_invoice, tanggal, waktu_bayar, status, total_bayar,nama_toko, alamat_kirim, biaya_kirim,no_resi, nama_jasa_kirim)VALUES ( '".$email."', '$no_invoice', '$date', '$time_bayar', 2, $total , '$toko',
'$alamat', $ongkir, NULL, '$jasa_kirim')" ;
 $exec1 = pg_query($query1);
if($exec1){
	$query2 = "SELECT * FROM TOKOKEREN.KERANJANG_BELANJA WHERE pembeli ='".$email."'";
	$exec2 = pg_query($query2);
	if($exec2){
		while($row = pg_fetch_assoc($exec2)){
			$query3 = "INSERT INTO TOKOKEREN.LIST_ITEM( no_invoice, kode_produk, berat, kuantitas, harga, sub_total ) VALUES ( '".$no_invoice."', '".$row['kode_produk']."', ".$row['berat']." ,".$row['kuantitas']." , ".$row['harga'].", ".$row['sub_total'].")";
			$exec3 = pg_query($query3);
			if(!$exec3){
				die('Mati Aja Lo!'); 
				exit();
			}
		}
		$query4 = pg_query("DELETE FROM TOKOKEREN.KERANJANG_BELANJA WHERE pembeli='".$email."'");
		if($query4){
			$_SESSION['message']='Transaksi Berhasil';
			header("location: dashboard.php");
		}
	}

 
}
