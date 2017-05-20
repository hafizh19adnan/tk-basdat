<?php
	include ('../connect.php');
    include('header.php');
    include('navbar.php');
    $total_harga=0;
    $total_berat=0;
    $toko ="";
    if(isset($_POST['submit'])){
    	$email = $_SESSION['email'];
		$kode_produk = $_GET['kode_produk'];
		$berat = $_POST['berat'];
		$kuantitas = $_POST['jumlah'];
		$harga = $_GET['harga'];
		$sub_total = $kuantitas * $harga;

		$conn =pg_connect("host=localhost dbname=hafizhrafizal user=postgres password=basdatkeren");
		$query = "INSERT INTO TOKOKEREN.KERANJANG_BELANJA (pembeli, kode_produk, berat, kuantitas, harga, sub_total ) VALUES ( '".$email."', '".$kode_produk."', ".$berat.", ".$kuantitas.", ".$harga.", ".$sub_total.")"; 
		$result = pg_query($query);
		 if (!$result) { 
            echo "Problem with query " . $query . "<br/>"; 
            echo pg_last_error(); 
            exit(); 
		} 
		$_SESSION['message']='Ditambahkan ke Keranjang';
    }
    if (isset($_SESSION['message'])) {
        if ($_SESSION['message'] == "Ditambahkan ke Keranjang") {
            echo "<div class='alert alert-success text-center alert-dismissible fade in' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>".$_SESSION['message']."</div>";
        }
        if ($_SESSION['message'] == "Terjadi Kesalahan") {
            echo "<div class='alert alert-danger text-center alert-dismissible fade in' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>".$_SESSION['message']."</div>";
        }
        unset($_SESSION['message']);

    }

?> 
<div class="row">
	<div class="container">
	<div class="col-md-6">
		<div class="container">
	<br><br>
	<div class="head-tab">
  		<ul class="nav nav-tabs">
		  	<h1>Daftar Belanja</h1>  
		</ul>
  	</div>
	<div class="tab-content">
		<div class="tab-pane fade in active">
		<br>
		<table class="table">
		    <thead>
		      <tr>
		        <th>Kode Produk</th>
		        <th>Nama Produk</th>
		        <th>Berat</th>
		        <th>Kuantitas</th>
		        <th>Harga</th>
		        <th>Sub Total</th>
		   
		       
		      </tr>
		    </thead>
		    <tbody>						      
		      
		      <?php 
	        
	          $conn=pg_connect("host=localhost dbname=hafizhrafizal user=postgres password=basdatkeren");
	           $query = "SELECT * FROM TOKOKEREN.KERANJANG_BELANJA K, TOKOKEREN.PRODUK P, TOKOKEREN.SHIPPED_PRODUK S WHERE K.kode_produk=P.kode_produk AND pembeli ='".$_SESSION['email']."' AND P.kode_produk=S.kode_produk";         
	            $result = pg_query($conn,$query);
	            $count_res = pg_num_rows($result);
	            if($count_res==0){
	            	echo "<tr><td>Keranjang Kosong. Kek Hati ini :(</td></tr>";
	            }else{
	            	 while ($row = pg_fetch_assoc($result)) { 
	              
			              echo "<tr>
				        <td>".$row['kode_produk']."</td>
				        <td>".$row['nama']."</td>
				        <td>".$row['berat']."</td>
				        <td>".$row['kuantitas']."</td>
				        <td>".$row['harga']."</td>
				        <td>".$row['sub_total']."</td>
				        ";
			        	$toko=$row['nama_toko'];
			        	$total_berat=$total_berat+$row['berat'];
			        	$total_harga=$total_harga+$row['harga'];
			        }
	            }
	            ?>
		    </tbody>
		  	</table>
			
		</div>	
    </div>
</div>	</div>				
	
</div>
<div class="row">
	<div class="container">
	<div class="col-md-6">
		<div class="container">
	<br>
	<div class="head-tab">
  		<ul class="nav nav-tabs">
		  	<h1>Informasi Pengiriman</h1>  
		</ul>
  	</div>
	<div class="tab-content">
		<div class="tab-pane fade in active">
		<br>
			<form method="post" action="confirmation.php?harga=<?php echo $total_harga ?>&berat=<?php echo $total_berat;?>&toko=<?php echo $toko;?>">
				<div class="form-group">
				 		<label for="jasa-kirim">Jasa Kirim:</label>
				    	<select required name="jasa_kirim" class="form-control " id="sel2">
					   		<option></option>
					   		<?php
					   			$query = "SELECT * FROM TOKOKEREN.TOKO_JASA_KIRIM WHERE nama_toko='".$toko."'";
					   			$execQuery = pg_query($query);
					   			while($row=pg_fetch_assoc($execQuery)){
					   				echo "<option>".$row['jasa_kirim']."</option>";
					   			}
					   		?> 
					    </select>
				<div class="form-group">
					<label for="jasa-kirim">Alamat:</label>
				   	<textarea required name="alamat" rows="4" class="form-control"></textarea>
				</div>
				<div class="form-group">
				   	<input required type="submit" name="submit" class="btn btn-primary" value="Lanjutkan Proses">
				</div>		    
			</form>	
		
			
		</div>	
    </div>
</div>					
	
</div>
