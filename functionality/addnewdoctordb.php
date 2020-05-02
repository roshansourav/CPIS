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


$uniqueid = $_POST['uniqueid'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$address = $_POST['address'];

$sql = "INSERT into DOCTORS values('$uniqueid', '$fname', '$lname', '$gender', '$dob', '$contact', '$email', '$address')";

  $result = $conn->query($sql);

 if($result)
 {
        header('Location: ../html/rightmark.html');
 }
 else
 {
     echo "Database entry failed. Please try again..";
 }

$conn->close();


?>