<?php
session_start();
if(!isset($_SESSION['login'])||$_SESSION['login']!=true)
{

    header("location:index.php");

}

?>

<?php

$servername="localhost";
$username="root";
$serverpassword="";
$databasename="college";

$conn=mysqli_connect($servername,$username,$serverpassword,$databasename);
if(!$conn)
{
    echo "connection unsuccessful";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  
  $empid=$_SESSION['empid'];
  if(isset($_FILES['formfile'])||$_POST['formfile']!=null)
  {
    $filename=$_FILES['formfile']['name'];
    $filetype=$_FILES['formfile']['type'];
    $filetmpname=$_FILES['formfile']['tmp_name'];
    $filesize=$_FILES['formfile']['size'];

    move_uploaded_file($filetmpname,"i/".$filename);

    $insertionquery="UPDATE `credentials` SET `file`='$filename' WHERE empid='$empid';";
    $result=mysqli_query($conn,$insertionquery);
    $_SESSION['file']=$filename;
  }
  else
  {
      
  }
  if(isset($_POST['password'])||$_POST['password']!=null)
  {
    $password=$_POST['password'];
    $insertionquery="UPDATE `credentials` SET `password`=$password WHERE empid=$empid;";
    $result=mysqli_query($conn,$insertionquery);
    $_SESSION['file']=$filename;
  }
  else
  {
      
  }
     
  if(isset($_POST['number'])||$_POST['number']!=null)
  {
    $number=$_POST['number'];
    $insertionquery="UPDATE `credentials` SET `number`=$number WHERE empid=$empid;";
    $result=mysqli_query($conn,$insertionquery);
    $_SESSION['file']=$filename;
  }
  else
  {
      
  }
     
}




?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    
    <link rel="stylesheet" href="all.css">
    <link rel="stylesheet" href="css/all.css">

    <title>Aditya birla login page</title>
  </head>
  <body>
      <div class="container mt-3">
        <img src="aditya.jpg" alt="no image found" width="250" height="150"><span class="mt-3" style="float:right;"><H2>SAFETY INSPECTION</H2></span>
        <hr>
      </div>
<div class="container mt-3">

<div class="container">
  <div class="row">
    <div class="col">
    <img src=<?php echo "i/".$_SESSION['file']; ?> alt="no image found" width="150" height="150">
     <br>
     <br>
    <h5>LOGGED IN AS:</h5>
    <P><?php echo $_SESSION['name']; ?></P>
    <br>
     
    <h5>EMPLOYEE ID:</h5>
    <P><?php echo $_SESSION['empid']; ?></P>
    <br>
    
    <div class="mt-3">
        <a href="setting.php" style="text-decoration: none;"><h5 style="color:maroon;"><i class="fas fa-user-cog"></i>  Settings</h5></a>
    </div>
    <br>
    <div class="mt-3">
        <a href="logout.php"  style="text-decoration: none;"><h5 style="color:maroon;"><i class="fas fa-sign-out-alt"></i>LOGOUT</h5></a>
    </div>
    <br><br>
    </div>
    <div class="col">
      <br>
      <form action="setting.php" method="POST" enctype="multipart/form-data">
      <div class="mb-3">
    <label for="formFile" class="form-label">Upload Image</label>
    <input class="form-control" type="file" id="formFile" name='formfile'>
    </div>
    <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Mobile Number</label>
    <input type="text" class="form-control" id="number" name='number' placeholder="Enter Your Mobile Number">
    </div>
    <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Password</label>
    <input type="text" class="form-control" id="password" name='password' placeholder="Enter Password">
    </div>
    <button type="submit" class="btn btn-primary mt-3">update</button>
    </div>
    </form>
  </div>
</div>

</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>