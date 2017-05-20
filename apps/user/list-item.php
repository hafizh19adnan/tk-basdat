<?php
	include 'header.php';
	include 'navbar.php';
?>
<div class="container">
	<h1>List Item</h1>
	<h3>No.Invoice : <?php echo $_GET['no_invoice'] ?></h3>
	<table class="table">
		    <thead>
		      <tr>
		        <th>Nama Produk</th>
		        <th>Berat</th>
		        <th>Kuantitas</th>
		        <th>Harga</th>
		        <th>Sub total</th>
		        <th>Action</th>
		   
		       
		      </tr>
		    </thead>
		    <tbody>						      
		      
		      <?php 
	        
	          $conn=pg_connect("host=localhost dbname=hafizhrafizal user=postgres password=basdatkeren");
	           $query = "SELECT DISTINCT * FROM TOKOKEREN.TRANSAKSI_SHIPPED T, TOKOKEREN.LIST_ITEM L, TOKOKEREN.PRODUK P
						WHERE T.no_invoice='".$_GET['no_invoice']."' AND T.email_pembeli='".$_SESSION['email']."' AND T.no_invoice=L.no_invoice AND L.kode_produk=P.kode_produk";         
	            $result = pg_query($conn,$query);
	            $count_res = pg_num_rows($result);
	            if($count_res==0){
	            	echo "<tr><td>Keranjang Kosong. Kek Hati ini :(</td></tr>";
	            }else{
	            	 while ($row = pg_fetch_assoc($result)) { 
	              
			              echo "<tr>
				        <td>".$row['nama']."</td>
				        
				        <td>".$row['berat']."</td>
				        <td>".$row['kuantitas']."</td>
				        <td>".$row['harga']."</td>
				        <td>".$row['total_bayar']."</td>
				        <td><a href='review.php?kode=".$row['kode_produk']."' class='btn btn-success'>Ulas</a></td>
				       
				        ";
			            }
	            }
	            ?>
		    </tbody>
		  	</table>
</div>