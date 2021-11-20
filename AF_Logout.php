<?php

	session_start();

	$_SESSION['login_status'] = "LOGGED OUT";	//Resets the session variable
	echo "<br>User successfully logged out.";
	
	echo "<form action = 'Team4.php' method = 'POST'>";
	echo "<br> <input type = 'submit' style='color:white; background-color:blue' value = 'Go Back'>"; // Button to go back to the home page
	echo "</form>";

?>