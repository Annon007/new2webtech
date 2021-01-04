<?php
$EmailAddresserror ="";
	$Passworderror="";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(empty($_REQUEST["Email"]))
    {
        $EmailAddresserror ="please enter the First name";
		//echo $FirstNameerror;
    }
    
    else
    {
        $FirstName = $_REQUEST["FirstName"]; 
    }
    
    if(empty($_REQUEST["Password"]))
    {
        $Passworderror ="please enter the Password";
		
		//echo $LastNameerror;
    }
    
    else
    {
        $LastName = $_REQUEST["LastName"]; 
}}
 require_once('../data/connection.php');
 $Email=$Password="";
 $Email = $_POST['Email'];
 $Password = $_POST['Password'];
 //$Passwordw = MD5($Password);
 
 
 $sql = "SELECT * FROM users WHERE EmailAddress='$Email' AND Password='$Password'";
 $result = mysqli_query($conn,$sql);
 if(mysqli_num_rows($result)>0)
 {
	 while($row= mysqli_fetch_assoc($result))
	 {
		 $id=$row["ID"];
		 $Email=$row["EmailAddress"];
		 session_start();
		 $_SESSION['id']=$id;
		 $_SESSION['Email']=$Email;
	 }
	 header("Location: ../view/home2.php");
 }
 else
 {
	 echo "Invalid Email or Password";
 }




?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="Style.css">
</head>
<body>
<style>
	h1  {text-align: center;}
	div {text-align: center;}	
</style>
<div class="content1">
<h1>Login with Email and Passwordword</h1>

<div>
	<form action="../Controller/validation.php" method="post">
		<label for="Email">Email:  </label><?php echo $EmailAddresserror ; ?><br>
		<input type="text" id="Email"name="Email" required  >
		<br>
		<label for="Password">Password:</label><?php echo $Passworderror ; ?><br>
		<input type="text" id="Password" name="Password"required >
		<br>
		<input type="submit" value="LOGIN"name="submit">
		
		
		
</div>
</div>

	
    <?php include '../view/fotter.php' ?>
	

</body>
</html>