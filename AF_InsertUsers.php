<?php

	require "../connect_db.php";
	include "../ErrorHandler.php";
	
	$error_message = "";
    /*
	// Input Initialization Blocks of Code
	

	// Input Validation Blocks of Code											
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		if ( trim($supplierName) == "") {		
			$error_message=" <p style='color:red';> Enter the supplier name! </p>";
		}
		elseif(strlen($supplierName) <= 30){
			$error_message=" <p style='color:red';> Supplier Name has max of 30 characters! </p>";
		}
		elseif ( ctype_alnum($supplierName) == FALSE ) {
			$error_message=" <p style='color:red';>Supplier Name must be alphnumeric only!</p>";
		}
		elseif ( trim($supplierEmail) == ""  ) {
			$error_message=" <p style='color:red';> Enter the supplier email! </p>";
		}
		elseif(strlen($supplierEmail) <= 30){
			$error_message=" <p style='color:red';> Supplier Email has max of 30 characters! </p>";
		}
		elseif (!filter_var($supplierEmail, FILTER_VALIDATE_EMAIL)) {
			$error_message=" <p style='color:red';>Please enter an actual email!</p>";
		}
		
		if ($error_message == "") {		// Checks if supplier name/email matches one in the database
			$q = "SELECT * FROM t4_suppliers WHERE supplierID='$supplierID' AND supplierName='$supplierName' AND supplierEmail='$supplierEmail'";
			$r = mysqli_query ( $dbc , $q );    
			
			if ($r){
				if (mysqli_num_rows($r) == 0) { 
					$error_message = "<p style='color:red';> Invalid supplier name/email combination. </p>";
				}
			}
			else {
				$error_message = "<p style='color:red';>Invalid supplier name/email combination.</p>";
			}
		}
		
	}
	

	$q = "INSERT INTO t4_suppliers (supplierID, supplierName, supplierEmail) VALUES ('$supplierID', '$supplierName', '$supplierEmail')";
	$r = mysqli_query ( $dbc , $q );
	
	if ($r) {
        echo "Everything got added in good";
    }
    else { 
        echo "<br style='color:red';>" . mysqli_error( $dbc );
    }*/
    echo $_POST["username"];
    echo $_POST["supplierID"];
    echo $_POST["supplierID"];
	
	echo "<form action = '" . $_SERVER['SCRIPT_NAME'] ."' method = 'POST'>";
	echo "<br> Enter Username <input type = 'text' name = 'username'>";		
    echo "<br> Enter Username <input type = 'text' name = 'username'>";	
	echo "<br> Enter name of the company <input type = 'text' name = 'supplierName'>";
	echo "<br> Enter email of the company <input type = 'text' name = 'supplierEmail'>";
	echo "<br> <input type = 'submit' style='color:white; background-color:blue' value = 'Submit'>"; 
	echo "</form>";

	echo "<br> <a href= 'AF_ShowSuppliersTable.php'> Go Back </a>";

?>