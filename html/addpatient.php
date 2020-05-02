<?php
    session_start();
    
?>  

<!DOCTYPE html>
<html>
<head>
  <title>add patient</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial scale=1.0">

  <style type="text/css">
    ul
    {
      float:left;
      list-style-type: none;
      
    }
    a
    {
      text-decoration: none;
      color: black;
    }
    li a:hover,h5 b:hover
    {
      text-decoration: none;
      color:white;
    }
    .col-md-5,.col-md-2,.col-md-3
    {
      margin-top: 15px;
    }
    h5
    {
      font-size: medium;
    }
  </style>

  <script type="text/javascript" src="../js/time.js"></script>

</head>


<body onload="displayTime();"
  <!--for bootstrap css-->
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
  <!--for doctor css-->
  <link rel="stylesheet" type="text/css" href="../css/addpatient.css">

   <!-- ............................................  Header-Section starts here  ...................................... -->

   <?php
   include ('../includes/headerNew.php') ;
 ?>


<!-- ..................................................  Header-section closes here  ................................... -->


  <br>
<form method="POST" action="../functionality/patientRegistration.php"> 
  <div class="container">
    <div class="panel-heading"></div>
      <div class="panel-body">
        <fieldset class="col-md-12">     
          <legend>New Patient Registration</legend>
            <div class="panel panel-default">
              <div class="panel-body">
                <img src="../images/children.png" style="float: right;">
                <br><br><br>
                <div class="form-group">
                <label for="exampleInputname">Aadhar Number</label>
                <?php
                $x=$_SESSION["aadhaar"];
                echo "<input type = 'text' class='form-control' name='inaadhaar' value='$x'  />";
                ?>
                <!-- <input type="number" class="form-control" id="exampleInputName"  placeholder="Aadhar"> -->
                </div>
                <div class="form-group">
                <label for="exampleInputname">First Name</label>
                <input type="text" class="form-control" id="exampleInputName"  name="infname" placeholder="First">
                </div>
                <div class="form-group">
                <label for="exampleInputname">Last Name</label>
                <input type="text" class="form-control" id="exampleInputName" name="inlname"   placeholder="Last">
                </div>
                <div class="form-group">
                <label for="exampleInputname">Date of Birth</label>
                <input type="date" class="form-control" id="exampleInputName" name="indob">
                </div>
                <div class="form-group">
                <label for="exampleInputname">Gender :</label>
                &nbsp;&nbsp;&nbsp;

               
                
                <select class="form-control" name="ingender">
                  <option value="M">Male</option>
                  <option value="F">Female</option>
                  <option value="O">Other</option>
                </select> 
                </div>
                <div class="form-group">
                <label for="exampleInputname">Mobile Number</label>
                <input type="number" class="form-control" name="inmobile"  placeholder="Mobile">
                </div>
                <div class="form-group">
                <label for="exampleInputname">E-mail</label>
                <input type="email" class="form-control" name="inemail"  placeholder="Email">
                </div>
                <div class="form-group">
                <label for="exampleInputname">Blood Group</label>
                <select class="form-control" name="inbgroup">
                  <option value="A+">A RhD positive (A+)</option>
                  <option value="A-">A RhD negative (A-)</option>
                  <option value="B+">B RhD positive (B+)</option>
                  <option value="B-">B RhD negative (B-)</option>
                  <option value="O+">O RhD positive (O+)</option>
                  <option value="O-">O RhD negative (O-)</option>
                  <option value="AB+">AB RhD positive (AB+)</option>
                  <option value="AB-">AB RhD negative (AB-)</option>
                  <option value="NA">Don't Know</option>
                </select>
                </div>
                <button type="submit" class="btn btn-info" value="Submit" name="btnSubmit">Submit</button>
              </div>
            </div><!--panel panel-default-->
        </fieldset>       
        <div class="clearfix"></div>
        </div><!--panel body-->      
  </div>
</form>

<br>


   <!-- .................................  Footer-section starts here  .............................................. -->

   <?php
   include ('../includes/footer.php') ;
 ?>
 
   <!-- ..........................................  Footer-section ends here  ...................................... -->

</body>
</html>