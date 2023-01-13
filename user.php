


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Crud Operation</title>
    <!-- css -->
    <link rel="stylesheet" href="style.css">
     <!-- Bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container text-center my-5">
<a href="display.php"><img  src="TCL-Logo-copy.png" alt=""></a>
    <h1>Tea Scheduler</h1>
  </div>
   <div class="container my-5">
    <div><h1>Add Makers</h1></div>
    <form method="post">
  <div class="mb-3">
    <label class="form-label">Day</label>
    <input type="text" name="day" class="form-control" placeholder="enter day"  aoutocomplete="off">
    
  </div>
  <div class="mb-3">
<label class="form-label">Morning</label>
    <input type="text" name="mname" class="form-control" placeholder="enter name"  aoutocomplete="off">
  </div>
  <div class="mb-3">
<label class="form-label">Evening</label>
    <input type="text" name="ename" class="form-control" placeholder="enter name"  aoutocomplete="off">
  </div>
  
 
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
   </div>
</body>
</html>
<!-- connection -->
<?php
include 'connection.php';
if(isset($_POST['submit'])){
    // storing data in variebles
    $day=$_POST['day'];
    $mname=$_POST['mname'];
    $ename=$_POST['ename'];
   
echo "submit got clicked \n";
    // sql injection
    $query="insert into `makers` (day,morning,evening)
            values('$day','$mname','$ename')";
             $result=mysqli_query($con,$query);
            if($result){
                echo "data inserted succesfully";
            }else{
                die(mysql_error($con));
            }
}
 ?>