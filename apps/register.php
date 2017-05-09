<?php
	include('header.php');
	include('navbar-default.php');

?>

	<div id="register">
		<div class="container">
			<div class="col-md-8">
				<br>
				<h1>Register Here</h1><br>
						<form class="form">
							<div class="form-group">
							 	<div class="col-md-12">
							 		<label for="email">E-mail:</label>
							    	<input type="email" class="form-control" id="email"><BR>
							 	</div> 
  							</div>
  							<div class="form-group">
								<div class="col-md-6">
								<label for="password">Password:</label>
							    <input type="password" class="form-control" id="password">
							</div>
							<div class="form-group">
								<div class="col-md-6">
								<label for="password">Ulangi Password:</label>
							    <input type="password" class="form-control" id="password"> <br>
							</div>
							<div class="form-group">
							 	<div class="col-md-12">
							 		<label for="email">Nama Lengkap:</label>
							    	<input type="email" class="form-control" id="email"><BR>
							 	</div> 
  							</div>
 							<div class="form-group">
 								<div class="col-md-6">
								  <label for="sel1">Jenis Kelamin:</label>
								  <select class="form-control" id="sel1">
								    <option>Laki-laki</option>
								    <option>Perempuan</option>
								  </select>
								</div>
							</div>
							<div class="col-xs-6">
								<label for="email">No.Telpon / HP</label>
							    <input type="email" class="form-control" id="email"><br>
							</div>
							<div class="form-group">
								<div class="col-md-12">
								  <label for="address">Alamat:</label>
								  <textarea class="form-control" rows="5" id="address"></textarea>
								</div>
							</div>
							<div class="col-md-12">
								<br>
								<button id="register-form" class="btn btn-success">DAFTAR</button>			<br>			
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