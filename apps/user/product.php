<?php
	include('header.php');
	include('navbar.php');

?>
  
	<div id="headline-shipped">
		<div class="container">
			<h1>Shipped Product</h1>
			<div class="col-xs-6"></div>
		</div>
	</div>
	<div id="produk-shipped">
		<div class="row">
				<div class="col-md-3">
					<div class="thumbnail">
						<h3>Filter Produk</h3>
						<form action="product.php" method="post" id="filter-toko">
						   <select name="toko" class="form-control btn btn-default" id="sel1">
						   	<option >Semua Toko</option>
						    <?php
							    $conn =pg_connect("host=localhost dbname=hafizhrafizal user=postgres password=basdatkeren");
				        		$query = "SELECT nama FROM Tokokeren.Toko ";   			 
						        $result = pg_query($conn,$query); 
						        if (!$result) { 
						            echo "Problem with query " . $query . "<br/>"; 
						            echo pg_last_error(); 
						            exit(); 
						        } 
						        while ($row = pg_fetch_assoc($result)) {
						        	echo "<option>".$row['nama']."</option>";
						        }
						    ?>
						     </select>
						     <input type="submit" name="submit" class="btn btn-danger">	    
						</form>	
						<form action="product.php" id="filter-toko">
						   <select name="kategori" class="form-control btn btn-default" id="sel1" onchange=showSub(this.value)>
						    <?php
							    $conn= pg_connect("host=localhost dbname=hafizhrafizal user=postgres password=basdatkeren");
				        		$query = "SELECT nama FROM Tokokeren.Kategori_Utama ";   			 
						        $result = pg_query($conn,$query); 
						        while ($row = pg_fetch_assoc($result)) {
						        	echo "<option>".$row['nama']."</option>";
						        }
						    ?>
						     </select>
						     <select name="subkategori" class="form-control btn btn-default" id="sel2">
						   	<option></option> 
						     </select>
						     <input type="submit" name="" value="Ubah Kategori" class="btn btn-danger">	    
						</form>	
					</div>
				</div>
				<div class="col-md-9">
				<?php 
				include ('pagination.php');
				$conn= pg_connect("host=localhost dbname=hafizhrafizal user=postgres password=basdatkeren");
				
				if(isset($_POST['toko'])){
					echo "<h4>Menampilkan Produk dari Toko <strong>".$_POST['toko']."</strong></h4>";
					$toko = $_POST['toko'];
					$query = "SELECT * FROM tokokeren.SHIPPED_PRODUK S, tokokeren.PRODUK P WHERE S.nama_toko = '$toko' AND P.kode_produk = S.kode_produk" ;
					
				}else{
					$query = "SELECT * FROM tokokeren.SHIPPED_PRODUK S, tokokeren.PRODUK P WHERE P.kode_produk = S.kode_produk ";	
				}
        		   			 
		        $result = pg_query($conn,$query); 
		       	
		       	//Initialize Pagination
		       	$rpp = 10; // jumlah record per halaman
		        $reload = "product.php?pagination=true";
		        $page = isset($_GET["page"]) ? (intval($_GET["page"])) : 1;
		        $tcount = pg_num_rows($result);
		        $tpages = ($tcount) ? ceil($tcount/$rpp) : 1; // total pages, last page number
		        $count = 0;
		        $i = ($page-1)*$rpp;
		        $no_urut = ($page-1)*$rpp;

		       	while (($count<$rpp) && ($i<$tcount)) {
		       		$row = pg_fetch_assoc($result);
				  $baru = $row['is_baru'];
				  $asuransi = $row['is_asuransi'];
				  $i++; 
                  $count++;
				  echo "<div class='col-md-4'>
					<div class='thumbnail'>
					<img src='../assets/images/adidas1.jpg'>
					<div class='content'>
					<h3>".$row['nama']."</h3>
					<h5>Rp. ".$row['harga']." / <strong>Rp. ".$row['harga_grosir']."(Grosir)</strong></h5>
					<p>Barang ";
					if($asuransi=='t'){
						echo "memiliki asuransi";
					}else{
						echo "tidak memiliki asuransi";
					}	
					echo ". Tersedia <strong>".$row['stok']." stok barang. </strong> Kondisi barang ";
					if($baru=='t'){
						echo "<strong>BARU.</strong></p>";
					}else{
						echo "<strong>BEKAS.</strong></p>";
					}
					
					echo "
					</div>
					<a href='details.php?kode=".$row['kode_produk']."' class='btn btn-lg btn-danger'>Beli Sekarang</a>
					</div>
					</div>";
					
				}

			?>
				
				</div>				
			</div>
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-9"><div><?php echo paginate_one($reload, $page, $tpages); ?></div></div>
		</div>
		</div>
	</div>		 

<?php
	include('footer.php');
?>