<!-- connection -->
<?php
include 'connection.php';
$id=$_GET['updateid'];
$query="SELECT * from `makers` where id=$id";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($result);
// $id=$row['id'];
$day=$row['day'];
$mname=$row['morning'];
$ename=$row['evening'];

if(isset($_POST['update'])){
    // storing data in variebles
    $day=$_POST['day'];
    $mname=$_POST['mname'];
    $ename=$_POST['ename'];
    
echo "submit got clicked \n";
    // sql injection
    $query="UPDATE  `makers` set id=$id,day='$day',morning='$mname',evening='$ename' where id=$id";
             $result=mysqli_query($con,$query);
            if($result){
                echo "data updated succesfully";
            }else{
                die(mysql_error($con));
            }
}
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Crud Operation</title>
    <!-- raw css -->
    <link rel="stylesheet" type="text/css" href="style.css">
     <!-- Bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container text-center my-5">
  <a href="display.php"><img  src="TCL-Logo-copy.png" alt=""></a>
    
    <h1>Tea Scheduler</h1>
  </div>
   <div class="container my-5">
   <div ><h1>Update Makers</h1></div>
    <form method="post">
  <div class="mb-3">
    <label class="form-label">Day</label>
    <input type="text" name="day" class="form-control" placeholder="enter your day"  aoutocomplete="off" value=<?php echo $day;?>>
    
  </div>
  <div class="mb-3">
<label class="form-label">Morning</label>
    <input type="text" name="mname" class="form-control" placeholder="enter name"  aoutocomplete="off" value=<?php echo $mname;?>>
  </div>
  <div class="mb-3">
<label class="form-label">Evening</label>
    <input type="text" name="ename" class="form-control" placeholder="enter name"  aoutocomplete="off" value=<?php echo $ename;?>>
  </div>
  <div class="mb-3">
    
 
  <button type="submit" name="update" class="btn btn-primary">Update</button>
</form>
   </div>
</body>
</html>
