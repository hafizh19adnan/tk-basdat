<?php
	include('../user/header.php');
	include('navbar.php');
?>
<div id="create-category">
	<div class="container">
		<br><br><h1 class="text-center">Create Category</h1><br>
		
			<form class="form">
							<div class="form-group">
				 	<div class="col-md-6">
				 		<label for="cat-code">Kode Kategori:</label>
				    	<input type="cat-code" class="form-control" id="cat-code"><BR>
				 	</div> 
					</div>
					<div class="form-group">
					<div class="col-md-6">
					<label for="cat-name">Nama Kategori:</label>
				    <input type="text" class="form-control" id="cat-name">
				</div>
				<div id="subcat">
					<div class="col-md-12">
						<label>Subkategori 1</label>
					</div>
					<div class="form-group">
						<div class="col-md-6">
						<label for="sub-code">Kode subkategori:</label>
					    <input type="text" class="form-control" id="sub-code">
					</div>
					<div class="form-group">
					 	<div class="col-md-6">
					 		<label for="sub-name">Nama Subkategori:</label>
					    	<input type="text" class="form-control" id="sub-name"><BR>
					 	</div> 
						</div>
					</div>
					<div class="col-md-12" align="left">
						<button type="button" class="btn btn-default">
						<span class="glyphicon glyphicon-plus"></span>Tambah Subkategori
					</button>
					</div>
				<div class="col-md-12">
					<br>
					<button id="cat-form" class="btn btn-success">SUBMIT</button>							
				</div>
			</form>		
	</div>	
</div>
