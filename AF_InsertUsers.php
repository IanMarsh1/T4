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

    
    $error_message = "";
    echo $error_message;

    # ------ Initialize Variables --------

    //username
    if (isset($_POST["username"])){
        $username = $_POST["username"];
    } 
    else{
        $username = "";
    }
    
    //fname
    if (isset($_POST["fname"])){
        $fname = $_POST["fname"];
    } 
    else{
        $fname = "";
    }

    //lname
    if (isset($_POST["lname"])){
        $lname = $_POST["lname"];
    } 
    else{
        $lname = "";
        
    }

    //password
    if (isset($_POST['password'])){
        $password = $_POST['password'];
    } 
    else{
        $password = "";
    }

    //acctType
    if (isset($_POST['acctType'])){
        $acctType = $_POST['acctType'];
    } 
    else{
        $acctType = "";
    }

    //active
    if (isset($_POST['active'])){
        $active = $_POST['active'];
    } 
    else{
        $active = "";
    }

    //DOB
    if (isset($_POST['DOB'])){
        $DOB = $_POST['DOB'];
    } 
    else{
        $DOB = "";
    }


    
    # ------ Input Validation  --------
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        //username
        if (trim($username) == "") {
            $error_message="Enter your user name!";
        }
        elseif (ctype_alnum($username) == FALSE){
            $error_message="Your username must be alphnumeric only!";
        }

        //fname
        elseif (trim($fname) == "") {
            $error_message="Enter your first name!";
        }
        elseif (ctype_alpha($fname) == FALSE){
            $error_message="Your first name must be alphnumeric only!";
        }

        //lname
        elseif (trim($lname) == "") {
            $error_message="Enter your last name!";
        }
        elseif (ctype_alpha($lname) == FALSE){
            $error_message="Your last name must be alphnumeric only!";
        }

        //password
        elseif (trim($password) == "") {
            $error_message="Enter your password!";
        }
        elseif (ctype_graph($password) == FALSE){
            $error_message="Your password must be alphnumeric only!";
        }

        //password
        elseif (trim($password) == "") {
            $error_message="Enter your password!";
        }
        elseif (ctype_graph($password) == FALSE){
            $error_message="Your password must be alphnumeric only!";
        }
        
        //acctType
        elseif (trim($acctType) == "") {
            $error_message="Enter your acctType!";
        }

        //active
        elseif (trim($active) == "") {
            $error_message="Enter your active!";
        }
        
        //DOB
        elseif (trim($DOB) == "") {
            $error_message="Enter your DOB!";
        }

        
        if ($error_message == "") { 
            $q = "insert into T4_Users (username, fname, lname, password, lastPassChange, acctType, active, DOB) values ( '$username', '$fname' , '$lname' , '$password' , current_timestamp(), '$acctType', '$active', '$DOB' )";
            $r = mysqli_query ( $dbc , $q );    # this runs commands, 

            if ($r){
                echo "";
            }
            else {
                $error_message = "There was a problem please try again.";
            }
        }
    }

    
    echo $error_message;

    # ------ Display Form --------
    if(TRUE){
	    echo "<form action = '" . $_SERVER['SCRIPT_NAME'] ."' method = 'POST'>";
	    echo "<br> Enter Username <input type = 'text' value = '" . $username ."' name = 'username'>";
        echo "<br> Enter fname <input type = 'text' value = '" .$fname."' name = 'fname'>";
        echo "<br> Enter lname <input type = 'text' value = '" . $lname."' name = 'lname'>";	
        echo "<br> Enter password <input type = 'password' name = 'password'>";

        //
        echo "<br> Acct Type <select name='acctType'>";
            echo "  <option value='Shareholder'> Shareholder </option>"; 
            echo "  <option value='Employee'> Employee </option>";
            echo "  <option value='Admin'> Admin </option>";
        echo "</select>";

        //
        echo "<br> Account active <select name='active'>";
            echo "  <option value='Y'> Yes </option>";
            echo "  <option value='N'> No </option>";
        echo "</select>";
        echo "<br> Enter DOB <input type = 'date' name = 'DOB'>";
	
	    echo "<br> <input type = 'submit' style='color:white; background-color:blue' value = 'Submit'>"; 
	    echo "</form>";
    }

	echo "<br> <a href= 'AF_ShowSuppliersTable.php'> Go Back </a>";

?>