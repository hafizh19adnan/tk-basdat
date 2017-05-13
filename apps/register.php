<?php
	include('header.php');
	include('navbar-default.php');
	if (isset($_SESSION['message'])) {
		if ($_SESSION['message'] == "Pendaftaran Gagal. Password tidak cocok"|| $_SESSION['message']=='Email sudah terpakai') {
	            echo "<div class='alert alert-danger text-center alert-dismissible fade in' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>".$_SESSION['message']."</div>";
	    }
	}
?>

	<div id="register">
		<div class="container">
			<div class="col-md-8">
				<br>
				<h1>Register Here</h1><br>
					<form class="form" method="post" action="process-register.php"  >
						<div class="form-group">
						 	<div class="col-md-12">
						 		<label for="email">E-mail:</label>
						    	<input required type="email" class="form-control" name="email" id="email"><BR>
						 	</div> 
							</div>
							<div class="form-group">
							<div class="col-md-6">
							<label for="password">Password:</label>
						    <input required type="password" class="form-control" minlength="6"  name="password" id="password">
						</div>
						<div class="form-group">
							<div class="col-md-6">
							<label for="password">Ulangi Password:</label>
						    <input required type="password" class="form-control" minlength="6" name="password-match" id="password"> <br>
						</div>
						<div class="form-group">
						 	<div class="col-md-12">
						 		<label for="email">Nama Lengkap:</label>
						    	<input required type="text" class="form-control" name="nama" id="name"><BR>
						 	</div> 
						</div>
						<div class="form-group">
						 	<div class="col-md-12">
						 		<label for="email">Tanggal Lahir:</label>
						    	<input required type="date" class="form-control" name="tgl_lahir" id="name"><BR>
						 	</div> 
						</div>
						<div class="form-group">
							<div class="col-md-6">
							  <label for="sel1">Jenis Kelamin:</label>
							  <select required class="form-control" name="jenis_kelamin" id="sel1">
							    <option>Laki-laki</option>
							    <option>Perempuan</option>
							  </select>
							</div>
						</div>
						<div class="col-xs-6">
							<label for="email">No.Telpon / HP</label>
						    <input required type="text" name="no_telp" class="form-control" id="email"><br>
						</div>
						<div class="form-group">
							<div class="col-md-12">
							  <label for="address">Alamat:</label>
							  <textarea required class="form-control"  name="alamat" rows="5" id="address"></textarea>
							</div>
						</div>
						<div class="col-md-12">
							<br>
							<input type="submit" name="submit" value="Daftar Sekarang" class="btn btn-success"> <BR><BR><br>			
						</div>
					</form>
			</div>
		</div>
	</div>
<br>
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