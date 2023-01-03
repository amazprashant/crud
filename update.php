<?php
    error_reporting(E_ALL);
    error_reporting(-1);
    ini_set('error_reporting',E_ALL);
    include("connection.php");
    //print_r($_POST);
    if(isset($_POST['update'])){
        $id=$_GET['id'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        $phonenumber=$_POST['phonenumber'];
        $city=$_POST['city'];
        $zip=$_POST['zip'];

   echo $update_query="UPDATE `crud` SET `name`='$name',`email`='$email',`address`='$address',`phonenumber`='$phonenumber',`city`='$city',`zip`='$zip' where id = '$id'";
    $query_run=mysqli_query($conn,$update_query);
    header('location:read.php');
   // $res=mysqli_fetch_array($query_run);
}
if(isset($_GET['id'])) 
{
  //$id1=$_GET['id'];
   echo $q = "SELECT * FROM crud WHERE id='".$_GET['id']."'";
    $query_run=mysqli_query($conn,$q);
    $res=mysqli_fetch_array($query_run);
}


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title></title>
</head>
<body>
<div class="container">
<form action="" method="post"class="row g-3">
<div class="col-md-6">
    <label for="inputName4" class="form-label">Name</label>
    <input type="name" name="name" class="form-control" id="name" value="<?php echo  $res['name'];  ?>">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="email"value=" <?php echo $res['email'];?>">
  </div>

  <div class="col-12">
    <label for="inputAddress2" class="form-label">Address </label>
    <input type="text" class="form-control" name="address" id="address" value="<?php echo $res['address']; ?>" placeholder="Apartment, studio, or floor">
  </div>
  <div class="col-md-6">
    <label for="PhoneNumber" class="form-label">Phone Number</label>
    <input type="text" class="form-control"  name="phonenumber" id="phonenumber" value=" <?php echo $res['phonenumber'];?>" placeholder="1234567890">
  </div>
  <div class="col-md-3">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" name="city" class="form-control" id="city" value="<?php echo $res['city'];?>">
  </div>
  <div class="col-md-3">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text"  name="zip" class="form-control" id="zip" value="<?php echo $res['zip'];?>">
  </div>
  <div class="col-12">
  <input type="submit" id="update" name ="update" value="Update">
  </div>
</form>
</body>
</html>