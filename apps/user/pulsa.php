<?php

	include('header.php');
	include('navbar.php');
?>

		<div id="headline-shipped">
		<div class="container">
			<h1>Paket Pulsa</h1>
			<div class="col-xs-6"></div>
		</div>
	</div>
	<div id="produk-shipped">
		<div class="row">
				<div class="col-md-3">
					<div class="thumbnail">
						<form>
							<input type="text" name="" class="form-control" placeholder="Cari Produk Pulsa .."><br>
							<input type="submit" class="form-control btn btn-danger" name="" value="Cari">
						</form>
					</div>
				</div>
				<div class="col-md-9">
				<?php
				include ('pagination.php'); 
				$conn=pg_connect("host=localhost dbname=hafizhrafizal user=postgres password=basdatkeren");
        		$query = "SELECT * FROM tokokeren.PRODUK_PULSA S, tokokeren.PRODUK P WHERE P.kode_produk = S.kode_produk ";   			 
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
					$i++; 
                	$count++;
					echo "<div class='col-md-4'>
					<div class='thumbnail'>
					<img src='../assets/images/xl.jpeg'>
					<div class='content'> 
					<h2>".$row['nama']."</h2>
					<h5>Rp. ".$row['harga']."</h5>
					<h5>Kode Produk : ".$row['kode_produk']."</h5>
					<h5>Nominal : ".$row['nominal']."</h5>";		
					echo "</div><a href='#' data-toggle='modal' data-id='".$row['kode_produk']."'data-target='#modalPulsa'  class='ref-modal-pulsa btn btn-lg btn-danger'>Beli Sekarang </a></div></div>";
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

		


  <!-- Modal -->
<div class="modal fade" id="modalPulsa" role="dialog">
    <div class="modal-dialog">
    
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Masukan Data</h4>
        </div>
        <div class="modal-body">
          <p>Kode Produk Terpilih : <span id="kode-ref"></span></p>
          <form action="proses-pulsa.php" method="post">
          	<div class="form-group">	
			   	<input type="text" name="nomer_hp" minlength="12" maxlength="20" class="form-control" id="email" value="" placeholder="Masukan Nomer HP/Token">
			   	<input type="text" class="form-control" id="kode-pulsa-post" value="" name="kode_produk">
			   	<input type="submit" class="btn btn-danger" name="">
  			</div>
          </form>
        </div>
        
      </div>
      
    </div>
  </div>
  

<?php
include('footer.php');
?>