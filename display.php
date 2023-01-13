<?php
include 'connection.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>

    <link rel="stylesheet" type="text/css" href="style.css">
    
     <!-- Bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

     <!-- google fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Rowdies&display=swap" rel="stylesheet">
</head>
<body>
  <div class="container text-center my-5">
  <a href="display.php"><img  src="TCL-Logo-copy.png" alt=""></a>
    <h1>Tea Scheduler</h1>
  </div>
   

    <div class="container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl No</th>
      <th scope="col">Day</th>
      <th scope="col">Morning</th>
      <th scope="col">Evening</th>
      <th scope="col">Operation</th>
 
    </tr>
  </thead>
  <tbody>

  <?php

    $query= "SELECT *from `makers`";
    $result=mysqli_query($con,$query);
    if($result){
        
       
        while($row=mysqli_fetch_assoc($result)){
          
            $id=$row['id'];
            $day=$row['day'];
    $mname=$row['morning'];
    $ename=$row['evening'];
            echo ' <tr>
            <th scope="row">'.$id.'</th>
            <th>'.$day.'</th>
            <td>'.$mname.'</td>
            <td>'.$ename.'</td>
            
            <td>
            <button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light">update</a></button>
            <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light">delete</a></button>
        </td>
          </tr> ';
        }
    }

  ?>
   
  </tbody>
</table>
    </div>
    <div class="container">
        <button class="btn  btn-primary my-5"><a href="user.php" class="text-light  add">add tea makers</a> </button>
    </div>
   
</body>
</html>