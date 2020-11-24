
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<style>
	h1  {text-align: center;}
	div {text-align: center;}	
</style>

<div>
<?php

/*$myemail="nihal@yahoo.com";
$mypass="12345";*/

	$myfile = fopen("../data/user.txt", "r") or die("Unable to open file!");
	while( $line=fgets($myfile))
{
	$words = explode(",",$line);
	$myemail=$words[0];
	$mypass=$words[1];
	
}
fclose($myfile);
	if(isset($_POST['login']))
	{
		$email=$_POST['email'];
		
		$password=$_POST['password'];
		if( $email==null)
		{
			echo "Please enter email and passwrod to login <a href='/RB/View/login.php'>Try again</a> ";
		}
		
		else if($email==$myemail  and $password==$mypass)
		{
			//setcookie('email',$email,time()+60);
			session_start();
			$_SESSION['email']=$email;
			
			header("location:/RB/View/home2.php");
			//header("location:/RB/Controller/feedback_validation.php");
			
		}
		else
		{
			echo "Email or Password is Invalid.<br> click here to <a href='/RB/View/login.php'>Try again</a>";
		}
	}
	else
	{header("location:login.php");}

?>
</div>
<h1>
	
     <?php include '../view/fotter.php' ?>
	
</h1>
</body>
</html>