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
<?php
session_start();
echo " Welcome ".$_SESSION['email'];
echo "<br>";



?>

<form action="/RB/Controller/validation_logout.php" method="post">
	
	<input style="color:red" type="submit" value="Log Out" name="" >
</form>
<br>
<form action="/RB/view/recoverpass.php" method="post">
	
	<input style="color:red" type="submit" value="Recover pass" name="" >
</form>
<br>
<form action="/RB/view/updateinfo.php" method="post">
	<input style="color:blue" type="submit" value="Update Personal Info." >
</form>

</div>
<h2 style="colour:red">Select Products </h2>
<label for="icat" >Cetagory:</label>
    <select name="icat" id="icat" >
        <option value="fertilizer" >Fertilizer</option>
        <option value="soil" >Soil</option>
        <option value="seeds" >Seeds</option>
    </select>
	<br>
	<?php
      $myfile = fopen("../data/products.txt", "r") or die("Unable to open file!");
      #echo fread($myfile, filesize("data/products.txt"));
      while ($line = fgets($myfile)) {
		  echo "<br>";
        echo $line."<br>"."<button>Add to cart</button>";
		echo "<br>";
		
      }
      fclose($myfile);
    ?>
	</br>
	

<div>

<form action="/RB/Controller/feedback_validation.php" method="post">
		<label style="color:blue">FeedBack:<br></label>
		<textarea  id="Feedback" name="Feedback" cols="25" rows="5" ></textarea>
		
		<br>
<?php
		
		$_SESSION['email'];

?>
		<input type="Submit" value="Submit" name="submit">
		<br>
		<br>
		<p>Please Select payment :</p>
			<input type="radio" id="bkash" name="payment" value="bkash">
				<label for="bkash">Bkash</label><br>
			<input type="radio" id="card" name="payment" value="card">
				<label for="card">Card</label><br>
			<input type="radio" id="cashondelivery" name="payment" value="cashondelivery">
				<label for="cashondelivery">Cash on delivery</label>

		
</form>






</div>
<h1>
	
    <?php include '../view/fotter.php' ?>
	
</h1>


</body>
</html>
