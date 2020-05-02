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


$var1 = $_POST['nmaadhaar'];
$sql = " SELECT fname, lname, aadhaar from PATIENTS where aadhaar = $var1";

$result = $conn->query($sql);

if($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        
        $_SESSION["dfname"] = $row["fname"];
        $_SESSION["dlname"] = $row["lname"];
        
    }
    $_SESSION["daadhaar"] = $var1;

     header('Location: ../html/updatereport.php');
 


}
else
{

    echo "No record found. Please try again";
}

$conn->close();


?>