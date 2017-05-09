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
				$conn= pg_connect("host=localhost dbname=hafizhrafizal user=postgres password=basdatkeren");
        		$query = "SELECT * FROM tokokeren.PRODUK_PULSA S, tokokeren.PRODUK P WHERE P.kode_produk = S.kode_produk ";   			 
		        $result = pg_query($conn,$query); 
		       

		       	while ($row = pg_fetch_assoc($result)) {
				  
				  echo "<div class='col-md-4'>
					<div class='thumbnail'>
					<img src='assets/images/xl.jpeg'>
					<div class='content'> 
					<h2>".$row['nama']."</h2>
					<h5>Rp. ".$row['harga']."</h5>
					<h5>Kode Produk : ".$row['kode_produk']."</h5>
					<h5>Nominal : ".$row['nominal']."</h5>";		

					
					echo "
					</div>
					<a href='#' data-toggle='modal' data-target='#myModal'  class='btn btn-lg btn-danger' class='btn btn-lg btn-danger'>Beli Sekarang</a>
					</div>
					</div>";
				}

			?>
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
  
<div class="modal fade" id="loginModal" role="dialog">
    <div class="modal-dialog">
    
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title">Login</h3>
        </div>
        <div class="modal-body">
         
          <form action="login.php" method="post">
            <div class="form-group">	
			         <input type="email" name="email" class="form-control" id="email" placeholder="E-Mail">
  			    </div>
            <div class="form-group"> 
               <input type="password" name="password" class="form-control" id="email" placeholder="Password">
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-danger" name="" value="Login">
            </div>
          </form>
        </div>
        <div class="modal-footer">
         
         </div>
        
      </div>
      
    </div>
  </div>

<?php
	include('footer.php');
?>