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
<h1>Login with Email and Password</h1>
<div>
	<form action="/RB/Controller/validation.php" method="post">
		<label>Email:  </label>
		<input type="text" name="email">
		<br>
		<label>Password:</label>
		<input type="text" name="password">
		<br>
		<input type="submit" value="Login" name="login">
		
		</form>
		
</div>
<h1>
	
    <?php include '../view/fotter.php' ?>
	
</h1>
</body>
</html>