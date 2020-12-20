<?php

$connection =mysqli_connect('localhost','root','','final1');
 if(!$connection)
  {
	  die("Not Connected.".mysqli_error($connection));
  }

$query="SELECT * FROM user_info";

$aoyon=mysqli_query($connection,$query);
$count=mysqli_num_rows($aoyon);

if ($count>0)
{
	if(isset($_REQUEST['deleted']))
	{
		echo "<font color='green'>Data Deleted</font>";
	}
	
	?>

<table class="table">
  <thead class="thead-dark">
 <tr>
 <th>ID</th>
 <th>USERNAME</th>
 <th>EMAIL</th>
 <th>PASSWORD</th>
 <th>What You Want To Do</th>
 </tr>
 </thead>
 
 <?php
 
 while ($row=mysqli_fetch_assoc($aoyon))
 {
	 $db_id=$row['id'];
	 $username=$row['username'];
	 $email=$row['email'];
	 $password=$row['password'];
	 
?>

<tbody>
<tr>
<td><?php echo $db_id; ?></td>
<td><?php echo $username; ?></td>
<td><?php echo $email; ?></td>
<td><?php echo $password; ?></td>
<td><a href="delete.php?id=<?php echo $db_id ?>">Delete</a></td>


<?php 
 }
 ?>
 
 </table>
 <?php
}
else{
	echo "Your Database Is Empty.";
	
}
?>






 
 
 