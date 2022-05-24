<?php 

$dbcon = mysqli_connect("localhost","root","","royalbank_db");
        //check if the connection is okay
        if($dbcon){
           // echo "Connected Successfully";
        }else{
            die("connection failed");
        }

?>