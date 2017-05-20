<?php
    include('header.php');
    include('navbar.php');
    if(!isset($_GET['kode'])){
      header("location: product.php");
    }
?> 

    <div id="content">
    	<div class="row">
    		<div class="detail-content">
    		<div class="container">
    			<div class="col-md-4">
    				
    					<div class="thumbnail">
    					<img src="../assets/images/adidas1.jpg">
    					
    				</div>
    				
    				
    			</div>
    			<div class="col-md-8">
            <?php 
              $conn = pg_connect("host=localhost dbname=hafizhrafizal user=postgres password=basdatkeren");
              $query = pg_query($conn, "SELECT * FROM TOKOKEREN.PRODUK P, TOKOKEREN.SHIPPED_PRODUK S WHERE P.kode_Produk=S.kode_produk AND S.kode_Produk='".$_GET['kode']."'");
              while($row= pg_fetch_assoc($query)){
                echo "<h3>".$row['nama']."</h3>
                      <h5>".$row['nama_toko']."</h5>
                      <h4><strong>Rp ".$row['harga']."</strong></h4>
                      <div class='promo'>
                        <p>Jaminan 100% Aman. Bekerjasama dengan <strong>POLRI</strong>.</p>
                      </div>
                      <p>Tersedia <strong>".$row['stok']." </strong>barang</p>";
                echo "<p>Masukan jumlah yang diinginkan</p>
                      <form method='post' action='cart.php?toko=".$row['nama_toko']."&kode_produk=".$row['kode_produk']."&harga=".$row['harga']."'>
                        <input required placeholder='Masukan Jumlah' type='number' class='form-control' style='width:50%' name='jumlah' min='1'><br>
                        <input required placeholder='Masukan Berat' type='number' class='form-control' style='width:50%' name='berat' min='1'><br>
                        <input type='submit' name='submit' value='Masukan Keranjang' class='btn btn-primary'>
                      </form>";
                  }

                ?>
                 
             
    			</div>
    		</div>
    		</div>
    	</div>
    	<div class="row">
    		<div class="detail-content">
    		<div class="container">
    		<div class="head-tab">
			  <ul class="nav nav-tabs">
			  	
			  	<li class="active"><a data-toggle="tab" href="#home">Detail Barang</a></li>
			    <li><a data-toggle="tab" href="#menu1">Estimasi Pengiriman</a></li>

			    <li><a data-toggle="tab" href="#menu3">Tanya Penjual</a></li>
			  
			   
			  </ul>
			  	</div>

			  <div class="tab-content">
			    <div id="home" class="tab-pane fade in active">
			      <div class="col-md-2">
			      	<h5>Deskripsi</h5>
			      </div>
			      <div class="col-md-4">
			      	<h5>sakdjaskljdakls</h5>
			      </div>
			    </div>
			    <div id="menu1" class="tab-pane fade">
			      <h3>Menu 1</h3>
			      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			    </div>
			   
			    <div id="menu3" class="tab-pane fade">
			      <h3>Menu 3</h3>
			      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
			    </div>
			  </div>
			</div>


    		</div>
    		</div>
    	</div>
    </div>
