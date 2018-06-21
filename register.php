<?php include'header.php';?>
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="index.php">Home</a> / Register</span>
    <h2>Register</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="spacer">
<div class="row register">
  <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">


                <input type="text" class="form-control" placeholder="First Name" name="first_name">
                <input type="text" class="form-control" placeholder="Last Name" name="last_name">
                <input type="text" class="form-control" placeholder="Enter Email" name="form_email">
                <input type="password" class="form-control" placeholder="Password" name="psw_1">
                <input type="password" class="form-control" placeholder="Confirm Password" name="psw_2">

                <textarea rows="6" class="form-control" placeholder="Address" name="form_message"></textarea>
      <button type="submit" class="btn btn-success" name="Submit">Register</button>
          


                
        </div>
  
</div>
</div>
</div>

<?php include'footer.php';?>