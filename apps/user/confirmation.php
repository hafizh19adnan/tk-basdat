<?php
	include ('header.php');
	include ('navbar.php');
	if(isset($_POST['submit'])){
		$berat = $_GET['berat'];
		$harga = $_GET['harga'];
		$toko = $_GET['toko'];
		$ongkir = $berat;
		$query = pg_query("SELECT tarif FROM TOKOKEREN.JASA_KIRIM WHERE nama='".$_POST['jasa_kirim']."' LIMIT 1");
		while($row= pg_fetch_assoc($query)){
			$ongkir = $row['tarif']*$berat;
		}
		$query2 = "SELECT * FROM TOKOKEREN.TRANSAKSI_SHIPPED";
		$num_shipped_row = pg_num_rows(pg_query($query2))+1;
		$no_invoice = generateId($num_shipped_row);
		$total = $harga+$ongkir;
	}

	function generateId($num_shipped_row){

	if($num_shipped_row>99999999){
		$id = "V".$num_shipped_row."";
	}else if($num_shipped_row>9999999){
		$id = "V0".$num_shipped_row."";
	}else if($num_shipped_row>999999){
		$id = "V00".$num_shipped_row."";
	}else if($num_shipped_row>99999){
		$id = "V000".$num_shipped_row."";
	}else if($num_shipped_row>9999){
		$id = "V0000".$num_shipped_row."";
	}else if($num_shipped_row>999){
		$id = "V00000".$num_shipped_row."";
	}else if($num_shipped_row>99){
		$id = "V000000".$num_shipped_row."";
	}else if($num_shipped_row>9){
		$id = "V0000000".$num_shipped_row."";
	}else{
		$id = "V00000000".$num_shipped_row."";
	}
	return $id;
	
	}

?>

<div class="container">
	<div class="head-tab">
  		<ul class="nav nav-tabs">
		  	<h1>Konfirmasi Belanja</h1>  
		</ul>
  	</div>
	<div class="tab-content">
		<div class="tab-pane fade in active">
			<h3>No. Invoice : <?php if(isset($_POST['submit'])) echo $no_invoice ?></h3>
			<br>
			<h4>Alamat Pengiriman <span style="margin-left: 5.6em">: <?php if(isset($_POST['submit'])) echo $_POST['alamat'] ?></span></h4><br>
			<h4>Nama Jasa Kirim<span style="margin-left: 7.2em">: <?php if(isset($_POST['submit'])) echo $_POST['jasa_kirim'] ?></span></h4><br>
			<h4>Total Belanja <span style="margin-left: 9em">: Rp. <?php if(isset($_POST['submit'])) echo $harga ?></span></h4><br>
			<h4>Ongkos Kirim <span style="margin-left: 8.5em">: Rp. <?php if(isset($_POST['submit'])) echo $ongkir ?></span></h4><br>
			<h4>Total Biaya <span style="margin-left: 10em">: Rp. <?php if(isset($_POST['submit']))  echo $total ?></span></h4><br>	
			<form action="checkout.php" method="post">
				<input type="hidden" name="no_invoice" value="<?php if(isset($_POST['submit'])) echo $no_invoice ?>">
				<input type="hidden" name="alamat" value="<?php if(isset($_POST['submit'])) echo $_POST['alamat'] ?>">
				<input type="hidden" name="jasa_kirim" value="<?php if(isset($_POST['submit'])) echo $_POST['jasa_kirim'] ?>">
				<input type="hidden" name="ongkir" value="<?php if(isset($_POST['submit'])) echo $ongkir ?>">
				<input type="hidden" name="total" value="<?php if(isset($_POST['submit'])) echo $total ?>">
				<input type="hidden" name="toko" value="<?php if(isset($_POST['submit'])) echo $toko ?>">
				<input type="submit" class="btn btn-success" name="submit" value="Checkout">
			</form>
			
		</div>	
    </div>
</div>