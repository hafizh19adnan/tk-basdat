<?php
	include('../user/header.php');
	include('navbar.php');
	if(isset($_SESSION['message'])){
		if ($_SESSION['message']=='Kode kategori harus unik' || $_SESSION['message']=='Kode subkategori harus unik') {
            echo "<div class='alert alert-danger text-center alert-dismissible fade in' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>".$_SESSION['message']."</div>";
        }
	}
?>
<div id="create-category">
	<div class="container">
		<br><br><h1 class="text-center">Create Category</h1><br>
		
			<form class="form" method="post" action='process-category.php'>
				<div class="form-group">
				 	<div class="col-md-6">
				 		<label for="cat-code">Kode Kategori:</label>
				    	<input type="cat-code" maxlength="3" class="form-control" name='cat-code' id="cat-code" required><BR>
				 	</div> 
				</div>
				<div class="form-group">
					<div class="col-md-6">
						<label for="cat-name">Nama Kategori:</label>
				    	<input required type="text"  class="form-control" id="cat-name" name='cat-name'>
					</div>
				</div>
				<div id="subcat">
					<div class="col-md-12">
						<label>Subkategori 1</label>
					</div>
					<div class="form-group">
						<div class="col-md-6">
							<label for="sub-code">Kode subkategori:</label>
					    	<input required type="text" maxlength="5" class="form-control" name='sub-code-1' id="sub-code-1">
						</div>
					</div>
					<div class="form-group">
					 	<div class="col-md-6">
					 		<label for="sub-name">Nama Subkategori:</label>
					    	<input required type="text" class="form-control" name='sub-name-1' id="sub-name-1"><BR>
					 	</div> 
					</div>
				</div>
				<input type="text" id="hidden-input" name="counter" value="1">
				<div class="col-md-12">
					<button type="button" class="btn btn-default" id="add-subcat">
					<span class="glyphicon glyphicon-plus"></span>Tambah Subkategori
					</button>
					<br>
					
				</div>
				<div class="col-md-12">
					
					<br>
					<input type='submit' name='submit' id="cat-form" class="btn btn-success" value="submit">							
				</div>
			</form>		
	</div>	
</div>
</body>
<script type="text/javascript" src="../assets/js/app.js"></script>
