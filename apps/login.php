<?php
function login(){
        $conn= pg_connect("host=localhost dbname=hafizhrafizal user=postgres password=basdatkeren");
        $password=$_POST["password"];
        $email=$_POST["email"];
        
        $query1 = "SELECT * FROM tokokeren.PENGGUNA 
                    WHERE password='$password' AND email='$email' AND email NOT IN (SELECT email FROM tokokeren.PELANGGAN) ";
        $query2 = "SELECT * FROM tokokeren.PENGGUNA 
                    WHERE password='$password' AND email='$email' AND email IN (SELECT email FROM tokokeren.PELANGGAN) "; 

        $admin = pg_num_rows(pg_query($conn,$query1));
        $user = pg_num_rows(pg_query($conn,$query2));

        if($admin==1){
            header("location:admin");       
        }else{
            if($user==1){
                header("location:user");
            }else{
                die('Error Login');
            }
       }
}
login();
