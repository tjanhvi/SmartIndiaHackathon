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
    $email=$$_SESSION['email'];
    if(isset($_POST['inlineRadioOptions'])||$_POST['inlineRadioOptions']!=null)
    {
    $str = $email;
	$sth = $conn->prepare("SELECT * FROM college WHERE email LIKE '%$str%'");
	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{

    }
    else{
        $insertionquery="INSERT INTO `college` (`id`, `CollegeName`, `Description`, `Rating`) VALUES ('$_SESSION', 'Lovely Professional University', 'accha hai...', '5');";
        $result=mysqli_query($conn,$insertionquery);
    }
    }
    if(isset($_POST['hazardcon'])||$_POST['hazardcon']!=null)
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
        <img src="../index.png" alt="no image found" width="250" height="150"><span class="mt-3" style="float:right;"><H2>Student Info</H2></span>
        <hr>
      </div>
<div class="container mt-3">

<div class="container">
  <div class="row">
    <div class="col">
    <img src="condacode.png" alt="no image found" width="150" height="150">
     <br>
     <br>
    <h5>LOGGED IN AS:</h5>
    <P><?php echo $_SESSION['name']; ?></P>
    <br>
     
    <h5>STUDENT OF COLLEGE:</h5>
    <P><?php echo $_SESSION['Collegename']; ?></P>
    <br>
    
    <div class="mt-3">
        <a href="setting.php" style="text-decoration: none;"><h5 style="color:maroon;"><i class="fas fa-user-cog"></i>  Settings</h5></a>
    </div>
    <br>
    <div class="mt-3">
        <a href="../logout.php"  style="text-decoration: none;"><h5 style="color:maroon;"><i class="fas fa-sign-out-alt"></i>LOGOUT</h5></a>
    </div>
    <br><br>
    </div>
    <div class="col">
  <Form action="index.php" method="POST">    
    <div class="container">
            <div class="row">
                <div class="col" style="background-color:red; padding:1rem;">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1">
                </div>
                <div class="col" style="background-color:maroon; padding:1rem;">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2">
                </div>
                <div class="col" style="background-color:orange; padding:1rem;">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="3">
                </div>
                <div class="col" style="background-color:yellow; padding:1rem;">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="4">
                </div>
                <div class="col" style="background-color:green; padding:1rem;">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="5">
                </div>
            </div>    
            <div class="row">
                <div class="col" style="background-color:grey; margin-right:2px;">
                    <p>1 Star</p>
                </div>
                <div class="col" style="background-color:grey;  margin-right:2px;">
                    <p>2 Star</p>
                </div>
                <div class="col" style="background-color:grey;  margin-right:2px;">
                    <p>3 Star</p>
                </div>
                <div class="col" style="background-color:grey;  margin-right:2px;">
                    <p>4 Star</p>
                </div>
                <div class="col" style="background-color:grey;  margin-right:2px;">
                    <p>5 Star</p>
                </div>
            </div>
        </div>
        <div class="mt-3">
            <h4>College review Update</h4>
                <div class="mb-3">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name='hazardcon'></textarea>
                </div>
        </div>
        <div class="mt-3">
                <div class="mb-3">
                <button type="submit"
                            class="w-full px-4 py-2 text-lg font-semibold text-white transition-colors duration-300 bg-blue-500 rounded-md shadow hover:bg-red-600 focus:outline-none focus:ring-red-200 focus:ring-4">
                            Update
                        </button>
                </div>
        </div>
        
</form>
    </div>
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