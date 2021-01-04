

<!DOCTYPE html>
<html>
<head>
	<title>Roots of Bangladesh Ltd.</title>
	<link rel="stylesheet" href="Style.css">
</head>
<body>
<style>
h1{text-align: center;}
div {text-align: right;}
</style>
<div class="content1">
<h1 style ="colour:blue">Welcome to Roots of Bangladesh</h1>
	<p>
			WE OFFER YOU THE BEST QUALITY OF AGRICULTURE PRODUCTS. 
			</p>
</div>
<div class="content4">
	<ul><li>
		<div id="left" class="box">
			<h2>Sign Up
			<form action="../View/signup.php" method="post">
				<input style="color:green" type="submit" value="Sign Up" >
			</form></h2>
		</div>
		
	</li>
	<li>
		<div id="right" class="box">
			<h2>LOGIN
				<form action="../View/login.php" method="post">
					<input style="color:green" type="submit" value="Log in" >
				</form>
			</h2>
			
		</div>
	</li></ul>
</div>
<div class="content2">
<ul><li>

		<div class="card">
			<img src="f.jpg" alt="" >
			<div class="card_box">
			<h2>Fertilizers</h2>
			<p>
			Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum culpa neque quo eum et quasi velit voluptatum cum maiores exercitationem.
			</p>
			</div>
		</div>
	</li>
	<li>
		<div class="card">
			<img src="download2.jpg" alt="" >
			<div class="card_box">
			<h2>Seeds</h2>
			<p>
			Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum culpa neque quo eum et quasi velit voluptatum cum maiores exercitationem.
			</p>
			</div>
		</div>
	</li>
	<li>
		<div class="card">
			<img src="download1.jpg" alt="" >
			<div class="card_box">
			<h2>Soil</h2>
			<p>
			Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum culpa neque quo eum et quasi velit voluptatum cum maiores exercitationem.
			</p>
			</div>
		</div>
	</li>
	</ul>
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
	
	
	
    <?php include '../view/fotter.php' ?>
	







</body>
</html>
