<?php 
    $servername="localhost";
    $username="root";
    $password="admin123";
    $database="studentregistration_db";

    $conn = mysqli_connect($servername,$username,$password,$database);

    /*if(!$conn){
        die("Connection failed: ".mysqli_connect_error());
    }else{
        echo"Connected Successfully";
    }*/

?>