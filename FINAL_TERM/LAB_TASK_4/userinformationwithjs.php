
<?php

if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$email=$_POST['email'];
    $password=$_POST['password'];



$connection =mysqli_connect('localhost','root','','final1');
  if(!$connection)
  {
	  die("Not Connected.".mysqli_error());
  }
  
  $query= "INSERT INTO user_info(username,email,password)";
  $query.="VALUES ('$username','$email','$password')";
  
  $result=mysqli_query($connection,$query);
  
  if(!$result)
  {
	  die("Not Success".mysqli_error());
  }
  
  
  
}
  
 
?>

<!DOCTYPE html>
<html>
<head>
<title>Update</title>
<script>
	function validate() {
		var x = document.getElementById('username').value;
		var y = document.getElementById('email').value;
		var z = document.getElementById('password').value;
		
		if(x == "") {
			document.getElementById('errorMsg').innerHTML = "Username is empty";
			document.getElementById('errorMsg').style.color = "red";
			return false;	
		}
		if(y == "") {
			document.getElementById('errorMsg').innerHTML = "Password is empty";
			document.getElementById('errorMsg').style.color = "red";
			return false;	
		}
		if(z == "") {
			document.getElementById('errorMsg').innerHTML = "Email is empty";
			document.getElementById('errorMsg').style.color = "red";
			return false;	
		}
		return true;
	}
</script>
</head>
<body>


<form action="userinformationwithjs.php" method="post" >
 
 
 
 <input type="text"  name="username" >
 <input type="email" name="email"  placeholder="email">
 <input type="password" name="password" placeholder="password">
 <input type="submit" name="submit">
 
 </form>