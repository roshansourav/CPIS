<!DOCTYPE html>
<html>
<head>
  <title>Hospital Login</title>

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
<script type="text/javascript" src="../js/pwdcheck.js"></script>

<script type="text/javascript">
 function ESCclose(evt) {
  if (evt.keyCode == 27) 
   window.close();
 }
</script>

</head>

<body onload="displayTime();" onkeypress="ESCclose(event);">
  <!--for bootstrap css-->
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
  <!--for doctor css-->
  <link rel="stylesheet" type="text/css" href="../css/hospitallogin.css">

   <!-- ............................................  Header-Section starts here  ...................................... -->

   <?php
      include ('../includes/headerNew.php') ;
    ?>


  <!-- ..................................................  Header-section closes here  ................................... -->

<div class="container">
  <div class="row">
    <div class="col-md-2">
    </div>
  <div class="col-md-6">
     <h2>Login Your Hospital</h2><br/>
        <div class="panel panel-success">
          <span><button class="btn btn-info" type="submit" active>Log in</button>&nbsp;&nbsp;&nbsp;&nbsp;
          <button class="btn btn-info" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign up</button>

<div id="id01" class="modal">
  
  <form method="POST" class="modal-content animate" action="../functionality/hospitalsignup.php" onSubmit = "return checkPassword(this)">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="../images/hospital.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Hospital Name</b></label>
      <input type="text" placeholder="Hospital" name="hname" required>

      <label for="uname"><b>Branch Code</b></label>
      <input type="text" placeholder="Code" name="hbranchcode" required>

      <label for="uname"><b>Place</b></label>
      <input type="text" placeholder="Place" name="hplace" required>

      <label for="uname"><b>Branch Phone</b></label>
      <input type="number" placeholder="Branch Phone Number" name="hphone" required>

      <label for="uname"><b>Admin Name</b></label>
      <input type="text" placeholder="Name" name="hadmin" required>

      <label for="uname"><b>Password</b></label>
      <input type="password" placeholder="Password" name="password" required>
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
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

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

       <form method="POST" action="../functionality/hauthentication.php">
          <div class="panel-heading" style="color: red;">All fields are mendatory</div>
          <div class="panel-body">
             <div class="panel-heading"></div><br>
            <div class="form-group">
                <label for="exampleInputname">Branch Code : </label>
                <input type="text" class="form-control" name="branchid" placeholder="Branch Code" required>
              </div>
              <div class="form-group">
                <label for="exampleInputname">Password : </label>
                <input type="password" class="form-control" name="branchpassword" placeholder="password" required>
              </div>
              <button class="btn btn-info" type="submit">Submit</button>

          </div>
      </form>
        

        </div>
      </div>
        </div>
    </div><!--for row-->
  </div><!--for container-->



  <link rel="stylesheet" type="text/css" href="css/footer.css"  />

   <!-- .................................  Footer-section starts here  .............................................. -->

   <?php
  include ('../includes/footer.php') ;
?>

  <!-- ..........................................  Footer-section ends here  ...................................... -->

</body>
</html>