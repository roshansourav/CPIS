<?php

    session_start();
 
$serverName = "localhost";
$userName = "root";
$password = "";
$dbname = "CPIS";

$conn = new mysqli($serverName, $userName, $password, $dbname);
if($conn->connect_error)
{
    die("Connection Failed :" .$conn->connect_error);
}

$dbranch = $_POST['hbranchcode'];
$dbranchname = $_POST['hname'];
$dbranchplace = $_POST['hplace'];
$dbranchphone = $_POST['hphone'];
$dbranchadmin = $_POST['hadmin'];
$dpassword = $_POST['hpassword'];

$_SESSION['hbranchcode'] = $dbranch;
$_SESSION['hbranchname'] = $dbranchname;



 $sql = "SELECT branchcode from HOSPITAL where branchcode = '$dbranch'";

$result = $conn->query($sql);

if($result->num_rows > 0)
{
  
    die("Branch already exist ");

}


  $sql = "INSERT into HOSPITAL values('$dbranch','$dbranchname','$dbranchplace','$dbranchphone','$dbranchadmin','$dpassword')";

  $result = $conn->query($sql);

     if($result)
   {
 
        header('Location: ../html/hospital.html');
    }
 else
 {
     echo "Database entry failed. Please try again..";
 }
$conn->close();


?>