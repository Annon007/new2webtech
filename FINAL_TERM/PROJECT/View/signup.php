<?php

$FirstNameerror = "";
	$LastNameerror = "";
	$PhoneNumbererror = "";
	$EmailAddresserror ="";
	$Addresserror ="";
	$Passworderror="";
	$FirstName=$LastName=$PhoneNumber=$EmailAddress=$Address=$Password="";
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
		<link rel="stylesheet" href="Style.css">

</head>
<body>
<style>
	h1  {text-align: center;}
	h2  {text-align: center;}
	div {text-align: center;}	
</style>
<div class="content1">
<h1>Sign up , for new account</h1>
<div>
	<form action="../Controller/validation_signup.php" method="POST">
  <label style="color:black" for="FirstName">First name:</label><?php echo $FirstNameerror ; ?><br>
  <input type="text" id="FirstName" name="FirstName" value="" ><br>
  
  <label style="color:black" for="LastName">Last name:</label><?php echo $LastNameerror ; ?><br>
  <input type="text" id="LastName" name="LastName" value=""  ><br>
  
  <label  style="color:black" for="PhoneNumber">Phone Number:</label><?php echo $PhoneNumbererror ; ?><br>
  <input type="text" id="rPhoneNumber" name="PhoneNumber" value=""><br>
  
  <label  style="color:black" for="EmailAddress">Email Address:</label><?php echo $EmailAddresserror ; ?><br>
  <input type="email" id="EmailAddress" name="EmailAddress" value=""><br>
  <label style="color:black" for="Address">Address:</label><?php echo $Addresserror;?><br>
  <input type="address" id="Address" name="Address" value=""><br>
  
  <label style="color:black" for="Password">Password:</label><?php echo $Passworderror ; ?><br>
  <input type="text" id="Password" name="Password" value="" placeholder ="enter your password"><br><br>
  <input style="color:green" type="submit" value="Submit" name="submit">
    
  
</form>
</div>
</div>
<br>
<br>
<br>
<br>

<?php include '../view/fotter.php' ?>

</body>
</html>
	
	
	