<!DOCTYPE html>
<!-----------------------------------------------------------------------------------------------------------------
--  AF_Construction.PHP (Original Program)
--  ArcticFox Construction Page
--  LastUpDate: 10/22/21
--  This will show when a link is not yet working
------------------------------------------------------------------------------------------------------------------>
<html lang="en">


<head>
    <title>ArcticFox Add Supplier Page</title>
    <meta charset="UTF-8">

    <!-- CSS -->
    <style>
        img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        h2 {
            color: #dfe7d3;
            text-align: center;
            font-size: 30px;
        }

        a:link {
            color: black;
            background-color: transparent;
            text-decoration: none;
            font-size: 18px;
        }

        a:visited {
            color: black;
            background-color: transparent;
            text-decoration: none;
            font-size: 18px;
        }

        a:hover {
            color: black;
            background-color: transparent;
            text-decoration: underline;
            font-size: 18px;
        }

        a:active {
            color: black;
            background-color: transparent;
            text-decoration: underline;
            font-size: 18px;
        }
    </style>
</head>

<body style="background-color:#00a84c;">

    <!-- Header -->
    <header style="background-color:#dfe7d3;">
        <a href= "Team4.php" ><h1 style="color: #053386;text-align: center; font-size: 38px;"> ArcticFox </h1></a>  <!-- Set the ArcticFox Header -->
    </header>

    <!-- NAV -->
    <nav>
        <?php
		    include "AF_NavBar.php";
        ?>
    </nav>

    <main>
    <h2>Add New Supplier</h2>
    <hr>


<?php

	require "../connect_db.php";
	include "../ErrorHandler.php";
	
	$error_message = "";

	// Input Initialization Blocks of Code	
	if(isset($_POST['supplierName'])){
		$supplierName = $_POST['supplierName'];
	}
	
	if(isset($_POST['supplierEmail'])){
		$supplierEmail = $_POST['supplierEmail'];
	}
	
	if(isset($_POST['supplierPhoneNumber'])){
		$supplierPhoneNumber = $_POST['supplierPhoneNumber'];
	}
	
	if(isset($_POST['address'])){
		$address = $_POST['address'];
	}
	

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
			$q = "SELECT * FROM t4_suppliers WHERE supplierName='$supplierName' AND supplierEmail='$supplierEmail' AND 
			supplierPhoneNumber='$supplierPhoneNumber' AND address='$address'";
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
	if(isset($supplierName) & isset($supplierEmail) & isset($supplierPhoneNumber) & isset($address)){
		$q = "INSERT INTO t4_suppliers (supplierName, supplierEmail, supplierPhoneNumber, address) 
		VALUES ('$supplierName', '$supplierEmail', '$supplierPhoneNumber', '$address')";
		$r = mysqli_query ( $dbc , $q );
		
		if ($r) {
			echo "Everything got added in good";
		}
		else { 
			echo "<br style='color:red';>" . mysqli_error( $dbc );
		}
	}
	
	echo "<form action = '" . $_SERVER['SCRIPT_NAME'] ."' method = 'POST'>";
	echo "<br> Enter name of the company <input type = 'text' name = 'supplierName'>";
	echo "<br> Enter email of the company <input type = 'text' name = 'supplierEmail'>";
	echo "<br> Enter the phone address of the company <input type='tel' name='supplierPhoneNumber' pattern='[0-9]{3}-[0-9]{3}-[0-9]{4}'>";
	echo "<small><br>Format: 123-456-7890</small>";
	echo "<br> Enter the address of the company <input type = 'text' name = 'address'>";
	echo "<br> <input type = 'submit' style='color:white; background-color:coral' value = 'Submit'>"; // Button to submit and refresh the page
	echo "</form>";

	echo "<br> <a href= 'AF_ShowSuppliersTable.php'> Go Back </a>";

?>

<hr>
	<!-- Logo that we are using for this website -->
    <img src="https://static.vecteezy.com/system/resources/previews/001/194/632/original/snowboarding-png.png" width="320" height="320"></a>
    </main>

    <!-- Footer -->
    <?php
        define("FILE_AUTHOR","Antonio Lopez");
        INCLUDE ("../T4/AF_Footer.php");
    ?>

</body>

</html>