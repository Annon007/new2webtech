
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


<form action="userinformation.php" method="post">
  
  <h2>Enter Your Information</h2>
  
  
 <input type="text" name="username" placeholder="username">
 <input type="email" name="email" placeholder="email">
 <input type="password" name="password" placeholder="password">
 <input type="submit" name="submit">
 
 </form>