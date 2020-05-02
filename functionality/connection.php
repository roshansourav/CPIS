<?php

     $serverName = "localhost";
     $userName = "root";
     $password = "";
     $dbname = "CPIS";

     $conn = new mysqli($serverName, $userName, $password, $dbname);
     

     if ($conn->connect_error) 
     {
        die("Connection failed: " . $conn->connect_error);
     } 
     $var1 = 123456789012;
     
     $sql = "select * from PATIENTS where aadhaar = ".$var1;
     $retval = $conn->query($sql);
     ///////////////////////////////////////////////////////////////////////////////////////////

    //  $retval = mysql_query( $sql, $conn );
   
     if(! $retval ) {
        die('Could not get data: ' . mysql_error());
     }
     
     while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
        echo "EMP ID :{$row['aadhaar']}  <br> ".
           "EMP NAME : {$row['fname']} <br> ".
           "EMP SALARY : {$row['lname']} <br> ".
           "EMP SALARY : {$row['dob']} <br> ".
           "EMP SALARY : {$row['gender']} <br> ".
           "EMP SALARY : {$row['phone']} <br> ".
           "EMP SALARY : {$row['email']} <br> ".
           "EMP SALARY : {$row['bloodgroup']} <br> ".
           "--------------------------------<br>";
     }
     
     echo "Fetched data successfully\n";
     
     mysql_close($conn);


?>