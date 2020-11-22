<?php

$FirstNameerror = "";
	$LastNameerror = "";
	$PhoneNumbererror = "";
	$Addresserror ="";
	$Passworderror="";
	$Password="";$EmailAddress="";
		$myfile = fopen("../data/user.txt", "r") or die("Unable to open file!");
	while( $line=fgets($myfile))
{
	$words = explode(",",$line);
	$EmailAddress=$words[0];
	
	
	if($_SESSION['email']=$EmailAddress)
	{
	$mypass=$words[1];
	
	
	$Password=$mypass;
	
	}
	else {echo "Something is Wrong";};
	
	
	
	
	
	
	
	
	
	
	
}
fclose($myfile);
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Password Recover</title>
</head>
<body>
<style>
	h1  {text-align: center;}
	h2  {text-align: center;}
	div {text-align: center;}	
</style>
<h1>Password Recover</h1>
<div>
	<form action="../controller/validation_recoverpass.php" method="POST">
  <label style="color:blue" for="EmailAddress">Email:</label><br>
  <input type="text" id="EmailAddress" name="EmailAddress" value="" placeholder =<?php echo $EmailAddress?>><br>
  
  <label style="color:blue" for="Password">Password:</label><br>
  <input type="text" id="Password" name="Password" value="" placeholder =<?php echo $Password?>><br>
  

  

  <input style="color:green" type="submit" value="Update" name="update">
    
  <br><br>
  
</form>
</div>




</body>
</html>