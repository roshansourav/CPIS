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



$doctorid = $_POST['doctorid'];
$hpassword = $_POST['hpassword'];
$hbranchcode = $_SESSION['hbranchcode'];


$sql1 = "SELECT * from DOCTORS WHERE uniqueid = '$doctorid'";
$result = $conn->query($sql1);
if($result->num_rows > 0)
{}
else
{
    die("Sorry. The ID you entered, doesn't exist.");
}

$sql2 = " SELECT password from HOSPITAL where branchcode = '$hbranchcode'";

$result = $conn->query($sql2);

if($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        if($row['password'] == $hpassword)
        {
            $sql = "DELETE from DOCTORS WHERE password='$hpassword'";
            $result = $conn->query($sql);
            header('Location: ../html/rightmark.html');
        }
        else
        {
            echo "Incorrect Password. Please try again..";
        }
    }
    
}
else
{
    echo "Incorrect Password. Please try again..";
}

$conn->close();


?>