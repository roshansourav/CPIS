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


$daadhaar = $_POST['inaadhaar'];
$dfname = $_POST['infname'];
$dlname = $_POST['inlname'];
$ddob = $_POST['indob'];
$dgender = $_POST['ingender'];
$dmobile = $_POST['inmobile'];
$demail = $_POST['inemail'];
$dbgroup = $_POST['inbgroup'];



 $sql = "INSERT into PATIENTS values('$daadhaar', '$dfname', '$dlname', '$ddob', '$dgender', '$dmobile', '$demail', '$dbgroup')";

 $result = $conn->query($sql);

 if($result)
 {
        $_SESSION["dfname"] = $dfname;
        $_SESSION["dlname"] = $dlname;
        $_SESSION["dage"] = $ddob;
        header('Location: ../html/existpatient.php');
 }
 else
 {
     echo "Database entry failed. Please try again..";
 }

$conn->close();


?>