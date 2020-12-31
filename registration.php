<?php
include 'header.php';
?>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="css/style.css">
<body class="card">

     <h1 style="padding-left:9%;">Enter Details</h1>
        <div class="container reg">
                  
         
           
            <form action="register.php" method="POST">
			<div class="row formview">       
			<div class="col-6">
                    Rollno:<br> <input id="rollno" type="text" name="rollno" required><br>
        
        Email:<br> <input type="email" id="email" name="email" ><br>
		
Phone:<br>
        <select name="countryCode" id="code">
	<option data-countryCode="IN" value="91" Selected>INDIA (+91)</option>
	<optgroup label="Other countries">
		<option data-countryCode="DZ" value="213">Algeria (+213)</option>
		<option data-countryCode="AR" value="54">Argentina (+54)</option>
		<option data-countryCode="AW" value="297">Aruba (+297)</option>
		<option data-countryCode="AU" value="61">Australia (+61)</option>
		<option data-countryCode="AT" value="43">Austria (+43)</option>
		<option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
		<option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
		<option data-countryCode="BH" value="973">Bahrain (+973)</option>
		<option data-countryCode="BD" value="880">Bangladesh (+880)</option>
		<option data-countryCode="BE" value="32">Belgium (+32)</option>
		<option data-countryCode="BR" value="55">Brazil (+55)</option>
		<option data-countryCode="CA" value="1">Canada (+1)</option>
		<option data-countryCode="CN" value="86">China (+86)</option>
		<option data-countryCode="CZ" value="42">Czech Republic (+42)</option>
		<option data-countryCode="DK" value="45">Denmark (+45)</option>
		<option data-countryCode="EG" value="20">Egypt (+20)</option>
		<option data-countryCode="FR" value="33">France (+33)</option>
		<option data-countryCode="DE" value="49">Germany (+49)</option>
		<option data-countryCode="ID" value="62">Indonesia (+62)</option>
		<option data-countryCode="IR" value="98">Iran (+98)</option>
		<option data-countryCode="IQ" value="964">Iraq (+964)</option>
		<option data-countryCode="IE" value="353">Ireland (+353)</option>
		<option data-countryCode="IL" value="972">Israel (+972)</option>
		<option data-countryCode="IT" value="39">Italy (+39)</option>
		<option data-countryCode="JP" value="81">Japan (+81)</option>
		<option data-countryCode="KR" value="82">Korea South (+82)</option>
		<option data-countryCode="KW" value="965">Kuwait (+965)</option>
		<option data-countryCode="NP" value="977">Nepal (+977)</option>
		<option data-countryCode="NL" value="31">Netherlands (+31)</option>
		<option data-countryCode="QA" value="974">Qatar (+974)</option>
		<option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
	</optgroup>
</select>
<input id="phone" type="text" name="phone" > <br>  Password:<br> <input type="password" id="password" name="password" s><br>
</div>

 <div class="col-6">
First Name:<br><input type="text" id="f_name" name="f_name" ><br>
                    Last Name:<br><input type="text" id="l_name" name="l_name" ><br>
                    Gender:  <input id="gender" type="radio" name="gender" value="male"> Male
<input id="gender" type="radio" name="gender" value="female"> Female <br>
        DOB: <br><input type="date" id="dob" name="dob" ><br>
      

</div>
</div>
<br><br>   
<input id="submit-btn" type="submit" value="submit" >

                    </form>
        

     
</body>
</html>