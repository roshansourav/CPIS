<?php
    session_start();
    
?>  

<!DOCTYPE html>
<html>
<head>
  <title>exist patient</title>

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


<body onload="displayTime();">
  <!--for bootstrap css-->
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
  <!--for doctor css-->
  <link rel="stylesheet" type="text/css" href="../css/existpatient.css">

  <!-- ............................................  Header-Section starts here  ...................................... -->

  <?php
  include ('../includes/headerNew.php') ;
?>


<!-- ..................................................  Header-section closes here  ................................... -->


  <br>

  <div class="container">
    <div class="panel-heading"></div>
      <div class="panel-body">
        <fieldset class="col-md-12">     
          <legend>Welcome <?php echo $_SESSION["dfname"]." ".$_SESSION["dlname"] ?> </legend>
            <div class="panel panel-default">
              <div class="panel-body">
                <img src="../images/children1.png" style="float: right;">
                <br><br><br>

                <form method = "POST" action = "../functionality/existpatientdb.php">
                <div class="form-group">
                  <label for="exampleInputname">Age</label>
                  <!-- <input type="number" class="form-control" id="patientAge" aria-describedby="nameHelp" placeholder=""> -->
                  <?php

                    $now = time();
                    $dob = strtotime($_SESSION["dage"]);
                    $difference = $now-$dob;
                    $age = floor($difference/31556926);

                    echo "<input type = 'text' class='form-control' value = '$age'/>";
                    
                  ?>
                </div>

                <div class="form-group">
                  <label for="exampleInputname">Weight</label>
                  <input type="number" class="form-control"  name="patientweight" placeholder="">
                </div>

                <div class="form-group">
                  <label for="exampleInputname">Description</label>
                  <input type="textarea" class="form-control"  name="pateintdisease" placeholder="">
                </div>

                <div class="form-group">
                <label for="exampleInputname">Specialization</label>
                <select class="form-control" name="docspecialist">
                  <option value="">Allergists/Immunologists</option>
                      <option value="Anesthesiologists" selected>Anesthesiologists</option>
                      <option value="Cardiologists">Cardiologists</option>
                      <option value="Dermatologists">Dermatologists</option>
                      <option value="Gastroenterologists">Gastroenterologists</option>
                      <option value="Geriatric Medicine Specialists">Geriatric Medicine Specialists</option>
                      <option value="Emergency Medicine Specialists">Emergency Medicine Specialists</option>
                      <option value="Neurologists">Neurologists</option>
                      <option value="Psychiatrists">Psychiatrists</option>
                </select>
                </div>

                <div class="form-group">
                <label for="exampleInputname">Doctor</label>
                <select class="form-control" name="docassign">
                  <option value="DoctorA" selected>DoctorA</option>
                  <option value="DoctorB">DoctorB</option>
                  <option value="DoctorC">DoctorC</option>
                  <option value="DoctorD">DoctorD</option>
                  <option value="DoctorE">DoctorE</option>
                  <option value="DoctorF">DoctorF</option>
                
                  <option value="">--unknown--</option>
                </select>
                </div>
                <button type="submit" class="btn btn-info">Submit</button>
                </form>
              </div>
            </div><!--panel panel-default-->
        </fieldset>       
        <div class="clearfix"></div>
        </div><!--panel body-->      
  </div>
  <br>
  <link rel="stylesheet" type="text/css" href="css/footer.css"  />

   <!-- .................................  Footer-section starts here  .............................................. -->

   <?php
   include ('../includes/footer.php') ;
 ?>
 
   <!-- ..........................................  Footer-section ends here  ...................................... -->

</body>
</html>

