<?php
    include "db_conn.php";
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $sql="DELETE FROM students WHERE id=$id";
        if(mysqli_query($conn,$sql)){
            header("Location: index.php");
        }else{
            echo "Error deleting record: ". mysqli_error($conn);
        }
    }
?>