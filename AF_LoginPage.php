<?php
	session_start();

	require "../connect_db.php";	// Connects to the DB
	//	include "ErrorHandler.php";	// Tells me what and where errors are 
	
	$error_message = "";
	// Input Initialization block of code
	if (isset($_POST['username'])){	
		$username = $_POST['username'];
	}else{
		$username = "";
	}
	
	if (isset($_POST['password'])){	
		$password = $_POST['password'];
	}else{
		$password = "";
	}
	
	// Input Validation block of code
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		if ( trim($username) == "") {		// Checks if the username/password was set and is alphonumeric
			$error_message=" <p style='color:red';> Enter your user name! </p>";
		}
		elseif ( trim($password) == ""  ) {
			$error_message=" <p style='color:red';> Enter your password! </p>";
		}
		elseif ( ctype_alnum($password) == FALSE ) {
			$error_message=" <p style='color:red';>Your password must be alphnumeric only!</p>";
		}
		
		if ($error_message == "") {		// Checks if the username/password matches the one in the database
			$q = "SELECT * FROM t4_users WHERE username='$username' AND password='$password'";
			$r = mysqli_query ( $dbc , $q );    
			
			if ($r){
				if (mysqli_num_rows($r) == 0) { 
					$error_message = "<p style='color:red';> Invalid user name/password combination. </p>";
				}
			}
			else {
				$error_message = "<p style='color:red';>Invalid user name/password combination.</p>";
			}
		}
	}
	
	
	// Action Handler: All Validations Passed
	if ($_SERVER['REQUEST_METHOD'] == "POST" & $error_message == "") {
		echo "<br> User $username successfully logged in!";
		$_SESSION['login_status'] = "LOGGED IN";
	}
	
	// Session login if-statements
	if (isset($_SESSION['login_status'])){
		$login_status = $_SESSION['login_status'];
	}else{
		$login_status = "NOT LOGGED IN";
	}
	echo "<br> " . $login_status;
	
	if ($_SERVER['REQUEST_METHOD'] == 'GET' || $error_message != "") {	// Tests to see if it's the first time loading the page. If not, does not load
		echo "<form action = '" . $_SERVER['SCRIPT_NAME'] ."' method = 'POST'>";
		echo "<br> Enter your username <input type = 'text' name = 'username'>";		// Enter username and password here
		echo "<br> Enter your password <input type = 'text' name = 'password'>";
		echo "<br> <input type = 'submit' style='color:white; background-color:blue' value = 'Submit'>"; // Button to submit and refresh the page
		echo "</form>";
		
		echo "<p>" . $error_message . "</p>";	// Tells the user if there is an error with their input
	}else{
		echo "<form action = 'Team4.php' method = 'POST'>";
		echo "<br> <input type = 'submit' style='color:white; background-color:blue' value = 'Go Back'>"; // Button to go back to the home page
		echo "</form>";
	} 
	
	
	include "footer.php";

?>