<body>
	<header>
		<div class="container">

			<img src="../assets/images/logo.png" width="256px">
			<div class="pull-right">
				<br>
				<h4>Halo, <?php 
          $email=$_SESSION['email'] ;
          $conn= pg_connect("host=localhost dbname=hafizhrafizal user=postgres password=basdatkeren");
            $query = "SELECT nama FROM TOKOKEREN.PENGGUNA  WHERE email = '$email' LIMIT 1";          
            $result = pg_query($conn,$query);
            while ($row = pg_fetch_assoc($result)) { 
              
              echo $row['nama'];
            } ?> !</h4>
			</div>
		</div>
		
	</header>
	<nav class="navbar-inverse navbar-head">
		<div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-left" id="nav-list">
          <li><a href="index.php" class="active">Home</a></li>
          <li><a href="#">Promo</a></li>
          <li><a href="product.php">Produk</a></li>
          <li><a href="pulsa.php">Beli Pulsa</a></li>
          <li><a href="#">Testimoni</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Kontak</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right menu-top-right" id="nav-right">
        		<li><a href="dashboard.php" class="navbar-white login">  Dashboard</a></li>
            <li><a href="logout.php" class="navbar-white login" >  Logout</a></li>

        	</ul>
      </div>
    </div>
	</nav>