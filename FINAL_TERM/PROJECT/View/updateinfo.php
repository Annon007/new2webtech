<?php

/*$FirstNameerror = "";
	$LastNameerror = "";
	$PhoneNumbererror = "";
	$EmailAddresserror ="";
	$Addresserror ="";
	$Passworderror="";
	$FirstName=$LastName=$PhoneNumber=$EmailAddress=$Address=$Password="";
		$myfile = fopen("../data/newuser.txt", "r") or die("Unable to open file!");
	while( $line=fgets($myfile))
{
	$words = explode(",",$line);
	$myemail=$words[0];
	//session_start();
	
	if($_SESSION['email']=$myemail)
	{
	$myfirstname=$words[1];
	$mylastname=$words[2];
	$myphonenumber=$words[3];
	$myaddress=$words[4];
	
	
	$FirstName=$myfirstname;
	$LastName=$mylastname;
	$PhoneNumber=$myphonenumber;
	$Address=$myaddress;
	}
	else {};
	
	
	
	
	
	
	
	
	
	
	
}

fclose($myfile);
*/


require_once('../data/connection.php');
 $FirstName=$LastName=$PhoneNumber=$Address="";
 //$Passwordw = MD5($Password);
 session_start();
$EmailAddress=$_SESSION['Email'];
 $sql = "SELECT FirstName,LastName,PhoneNumber,Address FROM users WHERE EmailAddress='$EmailAddress'";
 $result = mysqli_query($conn,$sql);
 if(mysqli_num_rows($result)>0)
 {
	 while($row= mysqli_fetch_assoc($result))
	 {
		 //$id=$row["ID"];
		 
		 $FirstName=$row["FirstName"];
		 $LastName=$row["LastName"];
		 $PhoneNumber=$row["PhoneNumber"];
		 $Address=$row["Address"];
		 
		 
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
	<title>Personal Information</title>
		<link rel="stylesheet" href="Style.css">

</head>
<body>
<style>
	h1  {text-align: center;}
	h2  {text-align: center;}
	div {text-align: center;}	
</style>
<div class="content1">

<h1>Personal Info.</h1>
<div>
	<form action="../controller/validation_updateinfo.php" method="POST">
  <label style="color:blue" for="FirstName">First name:</label><?php //echo $FirstNameerror ; ?><br>
  <input type="text" id="FirstName" name="FirstName" value="" placeholder =<?php echo $FirstName?>><br>
  
  <label style="color:blue" for="LastName">Last name:</label><?php //echo $LastNameerror ; ?><br>
  <input type="text" id="LastName" name="LastName" value="" placeholder =<?php echo$LastName?>><br>
  
  <label  style="color:blue" for="PhoneNumber">Phone Number:</label><?php //echo $PhoneNumbererror ; ?><br>
  <input type="text" id="rPhoneNumber" name="PhoneNumber" value="" placeholder =<?php echo$PhoneNumber?>><br>
  
  
 
  <label style="color:blue" for="Address">Address:</label><?php //echo $Addresserror;?><br>
  <input type="address" id="Address" name="Address" value="" placeholder =<?php echo$Address?>><br>
  

  <input style="color:green" type="submit" value="Update" name="update">
 
  <br><br>
  
</form>
</div>
</div>



    <?php include '../view/fotter.php' ?>


</body>
</html>