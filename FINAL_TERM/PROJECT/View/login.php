<?php //include("../Controller/validation.php");
$Email=$Password="";?>
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
		<label for="Email">Email:  </label>
		<input type="text" id="Email"name="Email"required  >
		<br>
		<label for="Password">Password:</label>
		<input type="text" id="Password" name="Password"required >
		<br>
		<input type="submit" value="LOGIN"name="submit">
		
		
		
</div>
</div>

	
    <?php include '../view/fotter.php' ?>
	

</body>
</html>