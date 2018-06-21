<?php include'header.php';?>
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="index.php">Home</a> / Schedule a Tour</span>
    <h2>Schedule a Tour</h2>
</div>
</div>
<!-- banner -->
<div class="well">
<h3 style="text-align: center;">Need a private tour of your chosen apartment?</h3><h5 style="text-align: center;">Schedule One Here!</h5>
<div class="container">
<div class="spacer">
<div class="row register">
  <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">
                 <form>
                <label for="fullname">Full Name</label>
                <input type="text" class="form-control" name="form_name">
                <label for="email">Email Address</label>
                <input type="text" class="form-control" name="form_email">
                  <label for="states">State of Chosen Apartment</label>
                     <select name="#" id="states" class="form-control">
															<option value="">Lagos</option>
															<option value="">Delta</option>
															<option value="">Edo</option>
															<option value="">Rivers</option>
                                                            <option value="">Abia</option>
                                                            <option value="">Abuja</option>
                                                            <option value="">Ogun</option>
                                                            <option value="">Osun</option>
                                                            <option value="">Oyo</option>
                                                            <option value="">Amambra</option>
                                                            <option value="">Imo</option>
														</select>
                     <label for="City">Input City/Town of Chosen Apartment</label>
				<input type="text" id="City" class="form-control">
               <label for="category">Apartment Category</label>
														<select name="#" id="category" class="form-control">
															 <option value="">Normal Residence</option>
                                                              <option value="">University Off-Campus</option>
                                                               <option value="">Condo</option> 
                                                                 <option value="">Rooftop/Penthouse</option>
                                                                    <option value="">Office Space</option>
														</select>
                   <label for="rooms">Input Number of Rooms and House Type</label>
				<input type="text" id="rooms" class="form-control" placeholder="e.g 4-Bedroom Duplex, Self-Con or 2-Bedroom apartment">
                <label for="date">Preferred Tour Date</label>
             <input type="text" id="date" class="form-control" placeholder="date/month/year">
                <br>     
               <br>      
      <button type="submit" class="btn btn-success" name="Submit">Submit</button>
          </form>      
        </div>
  
</div>
</div>
</div>
</div>
<br>
<br>
<br>
<br>

<?php include'footer.php';?>