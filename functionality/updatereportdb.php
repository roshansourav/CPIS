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
//.........................................  Connection-Ends here  ........................................................

$actualdisease = $_POST['actualdisease'];
$medicine = $_POST['medicine'];
$precaution = $_POST['precaution'];
$aadhaar = $_SESSION["daadhaar"];







$sql = "UPDATE DISEASES SET actualdisease = '$actualdisease', medicine = '$medicine', precaution = '$precaution' WHERE (aadhaar = '$aadhaar' AND actualdisease IS NULL)";




$result = $conn->query($sql);

if($result)
{
    header('Location: ../html/rightmark.html');
 
}
else
{
    echo "Not success";
}




$conn->close();


?>