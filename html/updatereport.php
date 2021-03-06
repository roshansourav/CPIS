<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Update Report</title>

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
		h6
		{
		  color: black;
		}
		h6:hover
		{
		  color: white;
		}
	
		.col-md-3:hover
		{
		  background-color: skyblue;
		  transition-duration: 0.5s;
		  transform: scale(1.1); 
		  border-radius: 50px;
		  box-shadow: 0 10px 6px -6px black;
	
		}
	  </style>
	
	<script type="text/javascript" src="../js/time.js"></script>

</head>


<body onload="displayTime();">
  <!--for bootstrap css-->
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
  <!--for doctor css-->
  <link rel="stylesheet" type="text/css" href="../css/updatereport.css">
 

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
          <legend>Update Report for <?php echo $_SESSION["dfname"]." ". $_SESSION["dlname"]; ?> </legend>
            <div class="panel panel-default">
              <div class="panel-body">
                <img src="../images/ur.png" style="float: right;">
                <br><br><br>

                <form method="POST" action="../functionality/updatereportdb.php">
                <div class="form-group">
                <label for="exampleInputname">Actual Disease</label>
                <input type="text" class="form-control" name="actualdisease" placeholder="disease">
                </div>
                <div class="form-group">
                <label for="exampleInputname">Medicine</label>
                <input type="text" class="form-control" name="medicine" placeholder="medicine">
                </div>
                <div class="form-group">
                <label for="exampleInputname">Precaution</label>
                <input type="text" class="form-control" name="precaution" placeholder="precaution">
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