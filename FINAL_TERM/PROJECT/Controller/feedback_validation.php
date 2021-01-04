
<?php
		require_once('../data/connection.php');

		$FeedBackerror ="";
		$Feedback ="";
		$Feedback=$_POST['Feedback'];

		session_start();
		$EmailAddress =$_SESSION['Email'];
		
		$sql= "INSERT INTO feedbacks (EmailAddress,Feedback)
		       VALUES ('$EmailAddress','$Feedback')";
			   
		$result=mysqli_query($conn,$sql);
		
		if($result)
		{
			echo "Your Feedback is updated<br>click here to <a href='../View/home2.php'>Continue</a>";
		}
		else
		{
			echo "ERROR:".$sql;
		}

		/*if($_SERVER["REQUEST_METHOD"] == "POST")
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
		
		}*/
		
		
		
		
		
?>
