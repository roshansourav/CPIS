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

$aadhaar = $_SESSION["daadhaar"];
$branchcode = $_SESSION['hbranchcode'];
$branchname = $_SESSION['hbranchname'];
$today = date("Y/m/d");

    $now = time();
    $dob = strtotime($_SESSION["dage"]);
    $difference = $now-$dob;
$age = floor($difference/31556926);
$weight=$_POST['patientweight'];
$assign=$_POST['docassign'];
$specialist=$_POST['docspecialist'];
$doctorid = "id12";
$disease=$_POST['pateintdisease'];


// echo "aadhaar = ".$aadhaar."<br> branchcode = ".$branchcode."<br>branchname = ".$branchname."<br>";
// echo "datetime = ".$today."<br> age = ".$age."<br> weight = ".$weight."<br> doctorassigned = ".$assign;
// echo "<br> doctorid = ".$doctorid."<br> specialization = ".$specialist."<br> reason = ".$disease;


$sql = "INSERT into DISEASES(aadhaar, branchcode, branchname, datetime, age, weight, doctorassigned, doctorid, specialization, reason) values('$aadhaar', '$branchcode', '$branchname', '$today', '$age', '$weight', '$assign', '$doctorid', '$specialist', '$disease')";



$result = $conn->query($sql);

if($result)
{
    echo "Success";
    // header('Location: ../html/rightmark.html');
}
else
{
    echo "Not success";
}




$conn->close();


?>