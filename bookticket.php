<?php
include 'header.php';
?>






<div class="row content">
<div class="col-12 content">
<form action="book.php" method="POST">


<div id="oneway">
		<form role="form" action="book.php" method="post">
		  <div class="row">
		  <div class="col-sm-6">
            <label for="from">From:</label>
            <select name="from">
  <option value="Mumbai">Mumbai</option>
  <option value="Dubai">Dubai</option>
  <option value="Kolkata">Kolkata</option>
  <option value="Mysore">Mysore</option>
</select>
          </div>
          
		  <div class="col-sm-6">
            <label for="to">To:</label>
         
            <select name="to" id="to">
  <option value="Mumbai">Mumbai</option>
  <option value="Dubai">Dubai</option>
  <option value="Kolkata">Kolkata</option>
  <option value="Mysore">Mysore</option>
</select>
		 
          </div>
</div>
		  <hr >
		  <div class="row">
			  <div class="col-sm-4">
			    <label for="depart">Depart:</label>
			    <input type="date" class="form-control" id="fromdate" name="fromdate" required>
			  </div>
		  
		
           <hr >
      
			  <div class="col-sm-6">
			    <label for="flight">Flights:</label><br>
                <select name="flight" id="flight">
  <option value="airindia">Air India</option>
  <option value="airarabia">Air Arabia</option>
  <option value="kingfisher">Kingfisher</option>
  <option value="jetairways">Jet Airways</option>
</select>
			  </div>
		  
</div>
		   <hr >
		  <div class="col-sm-6">
		    <label for="class">Class:</label>
		    <select class="form-control" name="class">
		      <option value="Economy">Economy</option>
		      <option value="Business">Business</option>   
		    </select>
		  </div> 
		  </div> 
		  <br>
		 
		  <div class="btn-group btn-group-justified">	
				<div class="btn-group">
					<button type="submit" class="btn btn-success">Submit</button>
				</div>
				<div class="btn-group">
					<button type="reset"  class="btn btn-info" value="Reset">Reset</button>
				</div>
		  </div>
		</form>
	</div>



</form>
</div>
</div>