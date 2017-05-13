<?php
function connectDB(){
	$conn = pg_connect("host=localhost dbname=hafizhrafizal user=postgres password=basdatkeren");
	if(!conn){
		die('Not Connected');
	}
	return $conn;
}
