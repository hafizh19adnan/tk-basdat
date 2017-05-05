<?php
	include('header.php');
	include('navbar-default.php');

?>

	<div id="headline-shipped">
		<div class="container">
			<h1>Paket Pulsa</h1>
			<div class="col-xs-6"></div>
		</div>
	</div>
	<div id="produk-shipped">
		<div class="row">
			<div class="container">
				<h1 class="text-center">Pilih Produk Pulsa</h1>
				<br>
				<div class="col-md-4">
					<div class="thumbnail">
					<img src="assets/images/xl.jpeg">
					<h3>Paket XL 4G Plus</h3>
					<h5>Rp. 100.000</h5>
					<p>Kode Produk : P00001</p>
					<p>Nominal : 50</p>
					<P>Bonus Kuota 4g LTE tanpa batas</P>
					<button type="button" data-toggle="modal" data-target="#myModal"  class="btn btn-lg btn-danger">Beli Sekarang</button>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
					<img src="assets/images/xl.jpeg">
					<h3>Paket XL 4G Plus</h3>
					<h5>Rp. 100.000</h5>
					<p>Kode Produk : P00001</p>
					<p>Nominal : 50</p>
					<P>Bonus Kuota 4g LTE tanpa batas</P>
					<button type="button" data-toggle="modal" data-target="#myModal"  class="btn btn-lg btn-danger">Beli Sekarang</button>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
					<img src="assets/images/xl.jpeg">
					<h3>Paket XL 4G Plus</h3>
					<h5>Rp. 100.000</h5>
					<p>Kode Produk : P00001</p>
					<p>Nominal : 50</p>
					<P>Bonus Kuota 4g LTE tanpa batas</P>
					<button type="button" data-toggle="modal" data-target="#myModal"  class="btn btn-lg btn-danger">Beli Sekarang</button>
					</div>
				</div>
				 
				<div class="col-md-12">
					<a href="#" class="btn-trans-red">Load More ...</a>
				</div>
				
			</div>

		</div>
	</div>		 


  <!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Masukan Data</h4>
        </div>
        <div class="modal-body">
          <p>Kode Produk Terpilih : P000001</p>
          <form>
          	<div class="form-group">	
			   	<input type="email" class="form-control" id="email" placeholder="Masukan No. HP ..."><BR>
			   	<input type="submit" class="btn btn-danger" name="">
  			</div>
          </form>
        </div>
        
      </div>
      
    </div>
  </div>
  

<?php
	include('login.php');
	include('footer.php');
?>