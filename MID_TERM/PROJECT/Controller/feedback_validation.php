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
		$FeedBackerror ="";
		$feedback ="";
		session_start();
		$EmailAddress =$_SESSION['email'];
		
		

		if($_SERVER["REQUEST_METHOD"] == "POST")
		{
			if(empty($_REQUEST["Feedback"]))
			{
				$FeedBackerror ="No Feedback";
			}
			
			else
			{
				$feedback = $_REQUEST["Feedback"]; 
			}
			
		
		$fileW = fopen("../data/feedbackSubmitted.txt", "a+") or die("Unable to open file");
		
			
		
		fwrite($fileW, $EmailAddress);
		fwrite($fileW," : ");
		fwrite($fileW,"'". $feedback."'");
		
		
        fclose($fileW);
		echo "You have submitted you Feedback<br> THANK YOU <br> click here to go to<a href='/RB/View/home2.php'>HOME</a>";
		
		}
?>
</div>
<h1>
	
    <?php include '../view/fotter.php' ?>
	
</h1>
</body>
</html>