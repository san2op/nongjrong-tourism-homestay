<?php
include "phpconnection5.php";

if (isset($_POST["submit"])) {
$arrival = $_POST["arrival"];
$departure = $_POST["departure"];
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$adult = $_POST["adult"];
$children = $_POST["children"];



$sql="INSERT INTO reservation VALUES('','$arrival', '$departure', '$first_name', '$last_name','$email','$phone','$adult','$children')";
    
mysqli_query($conn,$sql);
echo
"
<script> alert ('data inserted successfully'); </script>

"; {  header ("location:reservedetail.php");
}
}

?> 
<html>
	<div>
		<form class="primary" action="" method="post">
		<label for="arrival">Arrival</label>
		<div class="field">
			<input id="arrival" type="date" name="arrival" required>
		</div>
	</div> 
	 <div class="gap"></div>
	<div>
		<label for="departure">Departure</label>
		<div class="field">
			<input id="departure" type="date" name="departure" required>
		</div>
	</div>
</div><div class="wrapper">
	<div>
		<label for="first_name">First Name</label>
		<div class="field">
			<i class="fas fa-user"></i>
			<input id="first_name" type="text" name="first_name" placeholder="First Name" required>
		</div>
	</div>
	<div class="gap"></div>
	<div>
		 <label for="last_name">Last Name</label> 
		<div class="field">
			<i class="fas fa-user"></i>
			<input id="last_name" type="text" name="last_name" placeholder="Last Name" required>
		</div>
	</div>
</div><label for="email">Email</label>
<div class="field">
	<i class="fas fa-envelope"></i>
	<input id="email" type="email" name="email" placeholder="Your Email" required>
</div><label for="phone">Phone</label>
<div class="field">
	<i class="fas fa-phone"></i>
	<input id="phone" type="tel" name="phone" placeholder="Your Phone Number" required>
</div><div class="wrapper">
	<div>
		<label for="adult">Adults</label>
		<div class="field">
			<select id="adult" name="adult" required>
				<option disabled selected value="">--</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
			</select>
		</div>
	</div>
	<div class="gap"></div>
	<div>
		<label for="children">Children</label>
		<div class="field">
			<select id="children" name="children" required>
				<option disabled selected value="">--</option>
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
                <option value="5">5</option>
			</select>
		</div>
	</div>
<div>

<button type="submit" name="submit">submit</button>
			</div>
		</form> 
	</body> 
</html> 