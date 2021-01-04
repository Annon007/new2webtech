<?php

$FirstNameerror = "";
	$LastNameerror = "";
	$PhoneNumbererror = "";
	$Addresserror ="";
	$Passworderror="";
	$Password="";$EmailAddress="";
		/*$myfile = fopen("../data/user.txt", "r") or die("Unable to open file!");
	while( $line=fgets($myfile))
{
	$words = explode(",",$line);
	$EmailAddress=$words[0];
	
	
	if($_SESSION['email']=$EmailAddress)
	{
	$mypass=$words[1];
	
	
	$Password=$mypass;
	
	}
	else {};
	
	
	
	
	
	
	
	
	
	
	
}
fclose($myfile);*/

require_once('../data/connection.php');
 
 //$Passwordw = MD5($Password);
 session_start();
 $Password="";$EmailAddress=$_SESSION['Email'];
 $sql = "SELECT Password FROM users WHERE EmailAddress='$EmailAddress'";
 $result = mysqli_query($conn,$sql);
 if(mysqli_num_rows($result)>0)
 {
	 while($row= mysqli_fetch_assoc($result))
	 {
		 //$id=$row["ID"];
		 $Password=$row["Password"];
		 //session_start();
		 //$_SESSION['id']=$id;
		 //$_SESSION['Email']=$Email;
	 }
	 //header("Location: ../view/home2.php");
 }
 else
 {
	 echo "Invalid Email or Password";
 }





	?>
<!DOCTYPE html>
<html>
<head>
	<title>Password Recover</title>
	<link rel="stylesheet" href="Style.css">
</head>
<body>
<style>
	h1  {text-align: center;}
	h2  {text-align: center;}
	div {text-align: center;}	
</style>
<div class="content1">
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
</div>


    <?php include '../view/fotter.php' ?>
</body>
</html>