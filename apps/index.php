<?php
	
	include('header.php');
	include('navbar-default.php');
	if (isset($_SESSION['message'])) {
        if ($_SESSION['message'] == "Login Dulu Bos!" || $_SESSION['message'] == "Login Gagal Bos!") {
            echo "<div class='alert alert-danger text-center alert-dismissible fade in' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>".$_SESSION['message']."</div>";
        }


        unset($_SESSION['message']);
    }
    if(isset($_SESSION['email'])){
    	$conn= pg_connect("host=localhost dbname=hafizhrafizal user=postgres password=basdatkeren");
    	$email = $_SESSION['email'];
    	$query1 = "SELECT * FROM tokokeren.PENGGUNA 
            WHERE email=$email AND email NOT IN (SELECT email FROM tokokeren.PELANGGAN) ";
		$query2 = "SELECT * FROM tokokeren.PENGGUNA 
		            WHERE email=$email AND email IN (SELECT email FROM tokokeren.PELANGGAN) "; 

		$admin = pg_num_rows(pg_query($conn,$query1));
		$user = pg_num_rows(pg_query($conn,$query2));

		if($admin>=1){
		    header("location:admin");       
		}else{
		    
		    header("location:user");
		   
		}
    }
?>

	<div class="row" id="headline">
		<div class="container">
			<div class="col-xs-6">
				<h1><strong>Toko<mark>Keren.com</mark></strong></h1>
				<h3>Menjawab Semua Kebutuhan</h3>
				<button class="btn btn-danger">Belanja!</button>
			</div>
			<div class="col-xs-6"></div>
		</div>
	</div>
	<div id="highlight">
		<div class="row">
			<div class="container">
				<div class="highlight-content text-center">
					<div class="col-md-4 first" >
						<img class="img-responsive" src="assets/images/sepatu.jpg" width="100%">
					</div>
					<div class="col-md-4 second">
						<img class="img-responsive" src="assets/images/fashion.jpg" width="100%">
					</div>
					<div class="col-md-4 third">
						<img class="img-responsive" src="assets/images/elektronik.jpg" width="100%">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="product-list">
		<div class="container">
			<h2 class="text-center">Produk Terbaik</h2>
			<h5 class="text-center">Pilih produk terbaik favorit anda</h5><br>
			<div class="col-md-6">
				<div class="thumbnail">
					<img src="assets/images/adidas1.jpg">
					<h3>Produk Non-Pulsa</h3>
					<p>Dapatkan produk non-pulsa dengan diskon yang menarik setiap harinya. Bebas dikirim kemana saja kapan saja sesuai keinginan.</p>
					<a href="product.php" class="btn btn-lg btn-danger">Beli Sekarang</a>

				</div>
			</div>
			<div class="col-md-6">
				
					<div class="thumbnail">
					<img src="assets/images/xl.jpeg" >
					<h3>Produk Pulsa</h3>
					<p>Dapatkan produk non-pulsa dengan diskon yang menarik setiap harinya. Bebas dikirim kemana saja kapan saja sesuai keinginan.</p>
					<a href="pulsa.php" class="btn btn-lg btn-danger">Beli Sekarang</a>
				</div>
				
			</div>
		</div>
	</div>
	<div id="feature">
		<div class="container">
			<h2 class="text-center">Kenapa Belanja di TokoKeren?</h2><br>
			<div class="row">
				<div class="feature col-md-3 text-center">
					<img class="img-centered" width="100" src="assets/images/telemarketer.png">
					<h4>Customer Service 24/7</h4>
					<p>Lorem Ipsum dolor sit amet conectetum. Ipsum dolor sit amet conectetum</p>
				</div>
				<div class="col-md-3 text-center">
					<img class="img-centered" width="100" src="assets/images/money.png">
					<h4>Jaminan Uang Kembali</h4>
					<p>Lorem Ipsum dolor sit amet conectetum. Ipsum dolor sit amet conectetum</p>
				</div>
				<div class="col-md-3 text-center">
					<img class="img-centered" width="100" src="assets/images/price-tag.png">
					<h4>Harga Kompetitif</h4>
					<p>Lorem Ipsum dolor sit amet conectetum. Ipsum dolor sit amet conectetum</p>
				</div>
				<div class="col-md-3 text-center">
					<img class="img-centered" width="100" src="assets/images/thumbs.png">
					<h4>Pelapak Terpercaya</h4>
					<p>Lorem Ipsum dolor sit amet conectetum. Ipsum dolor sit amet conectetum</p>
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