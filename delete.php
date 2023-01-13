<?php
    include "connection.php";

    // delet operation
    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];

        $query="delete from `makers` where id=$id";
        $result=mysqli_query($con,$query);
        if($result){
            // echo "Deleted successful";
            header('location:display.php');
        }else{
            die(mysqli_error($con));
        }
    }