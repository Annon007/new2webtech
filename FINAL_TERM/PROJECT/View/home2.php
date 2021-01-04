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
<h1 style ="colour:blue">Welcome to Roots of Bangladesh <?php
				session_start();
				$Email=$_SESSION['Email'];
				echo "'$Email'";
				
			?>
			<p>
			WE OFFER YOU THE BEST QUALITY OF AGRICULTURE PRODUCTS. 
			</p>
			</h1>
</div>

<div class="content4">
<ul><li>
		<div id="left" class="box">
		<h2>LOGOUT
			<form action="../Controller/validation_logout.php" method="post">
					<input style="color:red" type="submit" value="Log Out" name="" >
				</form>
		</h2>		
		</div>
		</li>
		<li>
		<div id="right" class="box">
			<h2>Recover pass/Update Personal Info.
				
				<form action="../view/recoverpass.php" method="post">
	
					<input style="color:red" type="submit" value="Recover pass" name="" >
				</form>

				<form action="../view/updateinfo.php" method="post">
					<input style="color:blue" type="submit" value="Update Personal Info." >
				</form>
			</h2>
			
		</div>
	
		
	</li>
	</ul>
</div>
<div class="content2">
<ul>
<li>
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
	
	
	<?php
      $myfile = fopen("../data/products.txt", "r") or die("Unable to open file!");
      #echo fread($myfile, filesize("data/products.txt"));
      while ($line = fgets($myfile)) {
		  echo "<br>";
        echo $line."<br>";
		print("<form action='../view/See_order.php' method='post'> 
		
		
        <input type='submit' value='Add to cart' name='add' >
	  </form>");

		
		
      }
      fclose($myfile);
    ?>
	<div>
	
			<div id="demo">
			<h1>Cancel order Request
				<button type="button" onclick="loadDoc()">CANCEL</button>
			</div><h2>


					<script>
					function loadDoc() {
					  var xhttp = new XMLHttpRequest();
					  xhttp.onreadystatechange = function() {
						if (this.readyState == 4 && this.status == 200) {
						  document.getElementById("demo").innerHTML =
						  this.responseText;
						}
					  };
					  xhttp.open("GET", "ajax_info.txt", true);
					  xhttp.send();
					}
					</script></h2>
	
	</div>
	<br>
	<div>
	
			<div id="demo">
			<h1>Order list
				<button type="button" onclick="loadDoc()">LIST</button>
			</div><h2>


					<script>
					function loadDoc() {
					  var xhttp = new XMLHttpRequest();
					  xhttp.onreadystatechange = function() {
						if (this.readyState == 4 && this.status == 200) {
						  document.getElementById("demo").innerHTML =
						  this.responseText;
						}
					  };
					  xhttp.open("GET", "order.txt", true);
					  xhttp.send();
					}
					</script></h2>
	
	</div>
	
		<div class="content4">
		<ul><li>
			<div id="left" class="box">
				<form  action="../Controller/feedback_validation.php" method="post">
				<h2><label style="color:blue">FeedBack:</label>
				<textarea  id="Feedback" name="Feedback" cols="25" rows="5" required ></textarea>

				<input type="Submit" value="Submit" name="submit"></h2>
				</form>
			</div>
		</li>
		
		
		<div class="content4">
		<li>
			<div id="right" class="box">
				<h2 style="colour:red">Select Payement 
				<label for="icat" >Cetagory:</label>
					<select name="icat" id="icat" >
						<option value="bkash" >Bkash</option>
						<option value="card" >Card</option>
						<option value="ondelivery" >On Delivery</option>
					</select></h2>
	
		</div>
		</li>
		</ul>
		









	
    <?php include '../view/fotter.php' ?>
	



</body>

</html>
