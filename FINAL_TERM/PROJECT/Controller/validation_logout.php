<?php
session_start();
session_destroy();
echo "You are Logout<br> click here to go to <a href='../view/home.php'>Home</a>";

?>