
<?php


$FirstNameerror = "";
	$LastNameerror = "";
	$PhoneNumbererror = "";
	$EmailAddresserror ="";
	$Addresserror ="";
	$Passworderror="";
	$FirstName=$LastName=$PhoneNumber=$EmailAddress=$Address=$Password="";

 
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(empty($_REQUEST["FirstName"]))
    {
        $FirstNameerror ="please enter the First name";
    }
    
    else
    {
        $FirstName = $_REQUEST["FirstName"]; 
    }
    
    if(empty($_REQUEST["LastName"]))
    {
        $LastNameerror ="please enter the Last name";
    }
    
    else
    {
        $LastName = $_REQUEST["LastName"]; 
    }
    
    
    if(empty($_REQUEST["PhoneNumber"]))
    {
        $PhoneNumbererror ="please enter the Phone number";
    }
    
    else
    {
        $PhoneNumber = $_REQUEST["PhoneNumber"]; 
    }
    
    
    if(empty($_REQUEST["EmailAddress"]))
    {
        $EmailAddresserror ="please enter the Email address";
    }
    
    else
    {
        $EmailAddress = $_REQUEST["EmailAddress"]; 
    }
    
    if(empty($_REQUEST["Address"]))
    {
        $Addresserror ="please enter the Address";
    }
    
    else
    {
        $Address = $_REQUEST["Address"]; 
    }
    
    
    if(empty($_REQUEST["Password"]))
    {
        $Passworderror ="please enter the Password";
    }
    
    else
    {
        $Password = $_REQUEST["Password"]; 
    }
    

	
	if(empty($_REQUEST["FirstName"]))
	{
		echo "Your Profile is not updated<br> click here to <a href='/RB(user)/new2webtech/View/updateinfo.php'>Try again</a>";
	}
	else {
        $fileW = fopen("../data/UpdatedProfiles.txt", "w") or die("Unable to open file");

 
		fwrite($fileW, "\n");
        fwrite($fileW, $FirstName.",");
        fwrite($fileW, $LastName.",");
		fwrite($fileW, $PhoneNumber.",");
		fwrite($fileW, $Address.",");
		
		
		
		
		
		
        fclose($fileW);
		echo "Your Profile is  updated<br> click here to <a href='/RB/View/home2.php'>Continue</a>";
	}

		
		
		
 


   
    
}



?>
<!DOCTYPE html>
<html>
<head>
	<title>Personal Information</title>
</head>
<body>
<style>
	h1  {text-align: center;}
	h2  {text-align: center;}
	div {text-align: center;}	
</style>
<h1>Personal Info.</h1>
<div>
	<form action="../view/updateinfo.php" method="POST">
  <label style="color:blue" for="FirstName">First name:</label><?php echo $FirstNameerror ; ?><br>
  <input type="text" id="FirstName" name="FirstName" value="" placeholder =<?php echo $FirstName?>><br>
  
  <label style="color:blue" for="LastName">Last name:</label><?php echo $LastNameerror ; ?><br>
  <input type="text" id="LastName" name="LastName" value="" placeholder =<?php echo$LastName?>><br>
  
  <label  style="color:blue" for="PhoneNumber">Phone Number:</label><?php echo $PhoneNumbererror ; ?><br>
  <input type="text" id="rPhoneNumber" name="PhoneNumber" value="" placeholder =<?php echo$PhoneNumber?>><br>
  
  
 
  <label style="color:blue" for="Address">Address:</label><?php echo $Addresserror;?><br>
  <input type="address" id="Address" name="Address" value="" placeholder =<?php echo$Address?>><br>
  

  <input style="color:green" type="submit" value="Back" name="back">
 
  <br><br>
  
</form >

</div>

<h1>
	
    <?php include '../view/fotter.php' ?>
	
</h1>
</body>
</html>

