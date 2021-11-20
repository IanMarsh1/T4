<?php

	require "../Connect_db.php";
	include "../ErrorHandler.php";

	if (isset($_GET["id"])){
		$id = $_GET["id"];
		echo "<br>Successful sub";
	}else{
		echo "<br> No ID specified";
		die;
	}

	
	if (isset($_GET["active"])){
		$active = $_GET["active"];
		echo "<br>Successful sub";
	}else{
		echo "<br> No Active specified";
		die;
	}
	
	$q = "UPDATE t4_suppliers SET active = '" . $active . "' WHERE supplierID = $id";
	echo "<br> " . $q;
	
	$r = mysqli_query ( $dbc , $q );
	
	if ( $r ) {
		echo "<br> The active field for record $id changed to $active";
	}else{
		echo "<br>" . mysqli_error( $dbc ) . "</br>" ;
	}
	
	echo "<br> <a href= 'AF_ShowSuppliersTable.php'> Go Back </a>";

?>