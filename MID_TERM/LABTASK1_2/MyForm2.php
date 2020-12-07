<!DOCTYPE html>
<html>
<head>
		<title>My Form2</title>
</head>
<body>
		<?php
	  	$nameError = "";
	  	$name = "";
		$idError="";
		$sid="";
		$genderError="";
		$gender="";
		$emailError="";
		$email="";
		$addressError="";
		$address="";
		$cityError="";
		$city="";
		$countryError="";
		$country="";
		
		
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["name"])) {
				  $nameError = "Name is required";
			}
			else {
				$name = "Name is: " . $_REQUEST["name"];
			}
		}
		if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["sid"])) {
				  $idError = "ID is required";
			}
			else {
				$sid = "ID is: " . $_REQUEST["sid"];
			}
		}
		if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["gender"])) {
				  $genderError = "Gender is required";
			}
			else {
				$gender = "Gender is: " . $_REQUEST["gender"];
			}
		}
		if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["email"])) {
				  $emailError = "Email is required";
			}
			else {
				$email = "Email is: " . $_REQUEST["email"];
			}
		}
		if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["address"])) {
				  $addressError = "Address is required";
			}
			else {
				$address = "Address is: " . $_REQUEST["address"];
			}
		}
		if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["city"])) {
				  $cityError = "city is required";
			}
			else {
				$city = "Name is: " . $_REQUEST["city"];
			}
		}
		if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["country"])) {
				  $countryError = "Country is required";
			}
			else {
				$country = "Country is: " . $_REQUEST["country"];
			}
		}
		?>


		<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		Student Id:<input type="text" name="sid">
		<br />
		
		<span><?php echo $idError; ?></span><br />
		<br /><br />
		Student Name:<input type="text" name="name">
		<br />
		<span><?php echo $nameError; ?></span><br />
		<br /><br />
		Gender: <input type="checkbox" name="gender" value="male" required>Male
	
		<input type="checkbox" name="gender" value="female" required>Female
		<br />
		<span><?php echo $genderError; ?></span><br />
		<br /><br />
		Student Email:<input type="text" name="email">
		<br />
		<span><?php echo $emailError; ?></span><br />
		<br /><br />
		Address:<textarea name="address" cols="40" rows="1" ></textarea>

		<br />
		<span><?php echo $addressError; ?></span><br />
		<br /><br />
		Street Addess:<textarea  name="streeraddress" cols="40" rows="1" ></textarea>

		<br />
		Address line 2:<textarea  name="addressline2" cols="25" rows="1" ></textarea>
		<br />
		
		<br /><br />
		City:<input type="text" name="city">
		<br />
		<span><?php echo $cityError; ?></span><br />
		<br /><br />
		state:<br/>
    <textarea type="text" name="state" cols="25" rows="1" ></textarea>

	<br />
	
	Zip/Postal Code:<br/>
    <textarea type="number" name="zip" cols="25" rows="1" ></textarea>

	<br />
	
    Country:<select><br/>
				<option name="country" value="" ></option>
				<option name="country" value="Bangladesh" >Bangladesh</option>
				<option name="country" value="Germany" >Germany</option>
				<option name="country" value="USA" >USA</option>
			</select><br/>
	<span><?php echo $countryError; ?></span><br />
	<br /><br />
		<input type="submit">
		</form>