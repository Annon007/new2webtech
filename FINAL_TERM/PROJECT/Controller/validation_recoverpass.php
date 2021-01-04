<?php


	/*$EmailAddresserror ="";
	$Passworderror="";
	$EmailAddress=$Password="";

 
/if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(empty($_REQUEST["EmailAddress"]))
    {
        $EmailAddresserror ="please enter the EmailAddress";
    }
    
    else
    {
        $EmailAddress = $_REQUEST["EmailAddress"]; 
    }
    
    if(empty($_REQUEST["Password"]))
    {
       $Passworderror ="please enter the Password";
    }
    
    else
    {
        $Password = $_REQUEST["Password"]; 
    }
    
    
    if(empty($_REQUEST["Password"]))
	{
		echo "Your Password is not updated<br> click here to <a href='/RB/View/recoverpass.php'>Try again</a>";
	}
	else
	{$fileW = fopen("../data/Updatedpassword.txt", "w") or die("Unable to open file");

 
		
        fwrite($fileW, $EmailAddress.",");
        fwrite($fileW, $Password);
		
	$fileW = fopen("../data/user.txt", "w") or die("Unable to open file");

 
		
        fwrite($fileW, $EmailAddress.",");
        fwrite($fileW, $Password);
		
		
		
		
		
		
        fclose($fileW);
		
		
		echo "Your Password is updated<br> click here to <a href='/RB/View/home2.php'>Continue</a>";*/

		
require_once('../data/connection.php');
 //UPDATE user_info SET username='$user',email='$email',password='$pass' WHERE id=$hidden_id
 //$Passwordw = MD5($Password);
 $Password = $_POST['Password'];
 session_start();
 $EmailAddress=$_SESSION['Email'];
 $sql = "UPDATE users SET Password='$Password' WHERE EmailAddress='$EmailAddress'";
 $result = mysqli_query($conn,$sql);
  header("Location: ../view/home2.php");
 
 

	
   
    


?>




