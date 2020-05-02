<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
  <title>Doctor</title>

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
  <script type="text/javascript" src="../js/pwdcheck.js"></script>
  
  
</head>


<body onload="displayTime();">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!--for bootstrap css-->
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<!--for doctor css-->
	<link rel="stylesheet" type="text/css" href="../css/doctor.css">

  <!-- ............................................  Header-Section starts here  ...................................... -->

    <?php
      include ('../includes/headerNew.php') ;
    ?>


  <!-- ..................................................  Header-section closes here  ................................... -->



	<br>

	<div class="container">
		<div class="row">
			<div class="col-md-6">

				<div class="card" style="width: 450px;">
  					<img src="../images/doctor1.jpg" style="width: 430px; height: 300px; border-radius: 5px; align-self: center; padding-top: 8px;">
  					<div class="card-body">
   					 <p class="card-text"><b>Healthcare</b> is the right of every individual but lack of quality infrastructure, dearth of qualified medical functionaries, and non- access to basic medicines and medical facilities thwarts its reach to 60% of population in India. <br><b>A majority</b> of 700 million people lives in rural areas where the condition of medical facilities is deplorable. Considering the picture of grim facts there is a dire need of new practices and procedures to ensure that quality and timely healthcare reaches the deprived corners of the Indian villages.
					</p>
  					</div>
				</div>
			</div><!--col md 6-->

				<div class="col-md-6">
		 <h2>Login Doctor</h2><br/>
  			<div class="panel panel-success">
  				<span><button class="btn btn-info" type="submit" active>Log in</button>
  				<button class="btn btn-info" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign up</button>

<!-- ............................................  Sign-Up code starts here.............................................. -->
<div id="id01" class="modal">
  
  <form class="modal-content animate" onSubmit = "return checkPassword(this)" action="/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="../images/doctor1.png" alt="Avatar" class="avatar">
    </div>


    
    <div class="container">
      <label for="uname"><b>Registration Number </b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="newPasswd"><b>New Password </b></label>
      <input type="password" placeholder="New Password" name="password" required>

      <label for="cnfPasswd"><b>Confirm Password </b></label>
      <input type="password" placeholder="Confirm Password" name="hpassword" required>
      <div id="errorresult" style="color:red;"> </div>
      <br>

        
      <button type="submit" class="btn btn-info">Sign Up</button>&nbsp;&nbsp;
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>
    
    



    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="btn btn-danger">Cancel</button>
      
    </div>
  </form>
</div>
<!-- ............................................  Sign-Up codes  closed here.............................................. -->

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<!-- .............................................Log-In code starts here ...................................... -->

          <form onSubmit = "return checkField();">
    			<div class="panel-heading" style="color: red;">All fields are mendatory</div>
   				<div class="panel-body">
   					 <div class="panel-heading"></div><br>
   					<div class="form-group">
         				<label for="exampleInputname">User ID : </label>
         				<input type="text" class="form-control" id="userid" placeholder="user id" required>
        			</div>
        			<div class="form-group">
         				<label for="exampleInputname">Password : </label>
         				<input type="password" class="form-control" id="password" placeholder="password" required>
        			</div>
        			<button class="btn btn-info" type="submit">Submit</button>

           </div>
           </form>
   			</div>
   		</div>
  			</div>

	</div><!--for container--><br>

	<link rel="stylesheet" type="text/css" href="css/footer.css"  />


  <!-- .................................  Footer-section starts here  .............................................. -->

  <?php
  include ('../includes/footer.php') ;
?>

  <!-- ..........................................  Footer-section ends here  ...................................... -->


</body>
</html>