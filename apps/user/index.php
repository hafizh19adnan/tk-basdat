<?php
	include('header.php');
	include('navbar.php');

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
						<img class="img-responsive" src="../assets/images/sepatu.jpg" width="100%">
					</div>
					<div class="col-md-4 second">
						<img class="img-responsive" src="../assets/images/fashion.jpg" width="100%">
					</div>
					<div class="col-md-4 third">
						<img class="img-responsive" src="../assets/images/elektronik.jpg" width="100%">
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
					<img src="../assets/images/adidas1.jpg">
					<h3>Produk Non-Pulsa</h3>
					<p>Dapatkan produk non-pulsa dengan diskon yang menarik setiap harinya. Bebas dikirim kemana saja kapan saja sesuai keinginan.</p>
					<a href="product.php" class="btn btn-lg btn-danger">Beli Sekarang</a>

				</div>
			</div>
			<div class="col-md-6">
				
					<div class="thumbnail">
					<img src="../assets/images/xl.jpeg" >
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
					<img class="img-centered" width="100" src="../assets/images/telemarketer.png">
					<h4>Customer Service 24/7</h4>
					<p>Lorem Ipsum dolor sit amet conectetum. Ipsum dolor sit amet conectetum</p>
				</div>
				<div class="col-md-3 text-center">
					<img class="img-centered" width="100" src="../assets/images/money.png">
					<h4>Jaminan Uang Kembali</h4>
					<p>Lorem Ipsum dolor sit amet conectetum. Ipsum dolor sit amet conectetum</p>
				</div>
				<div class="col-md-3 text-center">
					<img class="img-centered" width="100" src="../assets/images/price-tag.png">
					<h4>Harga Kompetitif</h4>
					<p>Lorem Ipsum dolor sit amet conectetum. Ipsum dolor sit amet conectetum</p>
				</div>
				<div class="col-md-3 text-center">
					<img class="img-centered" width="100" src="../assets/images/thumbs.png">
					<h4>Pelapak Terpercaya</h4>
					<p>Lorem Ipsum dolor sit amet conectetum. Ipsum dolor sit amet conectetum</p>
				</div>
			</div>
		</div>
	</div>

	<div id="bottom">
		<div class="container">
			<div class="col-md-3">
				<h3>Ikuti Kami</h3>

			</div>
			<div class="col-md-3">
				<h3>TokoKeren</h3>

				<li><a href="#">Tentang Kami</a></li>
				<li><a href="#">Aturan Pelanggan</a></li>
				<li><a href="#">Kebijakan Privasi</a></li>
				<li><a href="#">Berita &amp; Pengumuman</a></li>
			</div>
			<div class="col-md-3">
				<h3>Layanan Pelanggan</h3>

				<li><a href="#">Tentang Kami</a></li>
				<li><a href="#">Aturan Pelanggan</a></li>
				<li><a href="#">Kebijakan Privasi</a></li>
				<li><a href="#">Berita &amp; Pengumuman</a></li>
			</div>
			<div class="col-md-3">
				<h3>Dapatkan Update</h3>
				<form>
					<input type="text" name="" placeholder="Email Anda ..">
					<input type="submit" name="" class="btn btn-warning">
				</form>
			</div>
		</div>
	</div>
<?php
	include('footer.php');
	
?>