

<!DOCTYPE html>
<html>
<head>
	<title>Roots of Bangladesh Ltd.</title>
</head>
<body>
<style>
h1{text-align: center;}
div {text-align: right;}
</style>
<h1 style ="colour:blue">Welcome to Roots of Bangladesh</h1>
<div>

<label style="color:blue">NEW USER?</label>
<form action="/RB/View/signup.php" method="post">
	<input style="color:green" type="submit" value="Sign Up" >
</form>
<form action="/RB/View/login.php" method="post">
	<input style="color:green" type="submit" value="Log in" >
</form>

</div>
<h2 style="colour:red">Select Products </h2>
<label for="icat" >Cetagory:</label>
    <select name="icat" id="icat" >
        <option value="fertilizer" >Fertilizer</option>
        <option value="soil" >Soil</option>
        <option value="seeds" >Seeds</option>
    </select>
	<ol>
	<?php
      $myfile = fopen("../data/products.txt", "r") or die("Unable to open file!");
      #echo fread($myfile, filesize("data/products.txt"));
      while ($line = fgets($myfile)) 
	  {
		  echo "<br>";
        echo $line."<br>"."<button>Add to cart</button>";
		echo "<br>";
		
      }
      fclose($myfile);
    ?>
	</ol>
	






</body>
</html>
