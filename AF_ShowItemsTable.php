<!DOCTYPE html>
<!-----------------------------------------------------------------------------------------------------------------
--  AF_IteamsTable.PHP (Original Program)
--  ArcticFox Items Table
--  LastUpDate: 11/1/21
--  This will show our items table 
------------------------------------------------------------------------------------------------------------------>
<html lang="en">


<head>
    <title>ArcticFox Items Table</title>
    <meta charset="UTF-8">

    <!-- CSS Code -->
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
            color:  white;
            background-color: transparent;
            text-decoration: none;
            font-size: 18px;
        }

        a:visited {
            color: white;
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

        table {
            background-color: rgb(223,231,211);
            color: black;
            border-collapse: collapse;
            border: 1px;
            font-family: Arial;
            font-weight: normal;
            margin-right: auto;
            margin-left: auto;
            
        }
        

        th {
            background-color: gray;
            font-size: 17px;
            font-weight: bold;
        }

        td {
            font-size: 15px;
            padding-left: 5px;
            padding-right: 5px;
        }
        
        tr:nth-child(even) {background-color: silver;} 

        h3 {
            color: black;
            text-align: center;
            font-size: 25px;
            background-color:#df5b52;
        }
    </style>
</head>

<body style="background-color:#00a84c;">

    <header style="background-color:#dfe7d3;">
        <a href="Team4.php">
            <h1 style="color: #053386;text-align: center; font-size: 38px;"> ArcticFox </h1> <!-- Set the ArcticFox Header -->
        </a> 
    </header>

    <nav>
    <?php
		include "AF_NavBar.php";
    ?>
    </nav>


    <main>

    <?php
    REQUIRE ("../Connect_db.php"); // Connects to our database (actual file found in parent folder)

    if(isset($_POST{'sort'})){
        $sort_type = " " . $_POST{'sort'};
    }
    else {
        $sort_type = "";
    }
    if(isset($_POST{'sort2'})){
        $sort2_type = " ORDER BY ".$_POST{'sort2'};
    }
    else {
        $sort2_type = "";
    }
    
    

    $q = "SELECT * FROM T4_Items" .  $sort2_type . $sort_type;       // Calls to return the T4_Suppliers values from the table 
    $r = mysqli_query ( $dbc , $q );     // Checks to see if the command worked or not

    echo "<Table border=2 style = 

            'color: black;
            border-collapse: collapse;
            border: 1px;
            font-family: Arial;
            font-weight: normal;
            margin-right: auto;
            margin-left: auto;
    
    
    '>";

    echo "<tr>"; // This is the table header, tells us the column names for the SQL table
    echo "<th>Item ID</th>";
    echo "<th>Name</th>";
    echo "<th>Price</th>";
    echo "<th>Model Number</th>";
    echo "<th>Quantity Available</th>";
    echo "<th>Category</th>";
        

	// Echos out table content if the SELECT * FROM command ran, otherwise it gives an error
    if ($r) {
        while ($row = mysqli_fetch_array( $r, MYSQLI_NUM)){
            echo "<tr>"; 
            echo "<td> " . $row[0] ."</td>";
            echo "<td> " . $row[1] ."</td>";
            echo "<td> " . $row[2] ."</td>";
            echo "<td> " . $row[3] ."</td>";
            echo "<td> " . $row[4] ."</td>";
            echo "<td> " . $row[8] ."</td>";
                
            echo "</tr>"; 
        }
    }
    else { 
        echo "<li>" . mysqli_error( $dbc ) . "</li>" ;   // Error message
    }
    echo "</tr>";
    echo "</Table>";

    echo "<form action ='". $_SERVER['SCRIPT_NAME'] ."' method = 'POST'>";

    echo "<input type = 'radio' name = 'sort2' value = 'itemID'> Item ID";
    echo "<input type = 'radio' name = 'sort2' value = 'itemName'> Name";
    echo "<input type = 'radio' name = 'sort2' value = 'itemPrice'> Price";
    echo "<input type = 'radio' name = 'sort2' value = 'modelNum'> Model Number";
    echo "<input type = 'radio' name = 'sort2' value = 'quantityAvailable'> Quantity Available";
    echo "<input type = 'radio' name = 'sort2' value = 'itemCategory'> Category";


    echo "<br><input type = 'radio' name = 'sort' value = 'ASC'> ASC";
    echo "<input type = 'radio' name = 'sort' value = 'DESC'> DESC";

    echo "<br> <input type = 'submit' value = 'Sort It!' Style = 'color: white; background-color: coral;'>";

    echo "</form>";
    
    ?>
    <br>

    <hr>
	<!-- Logo that we are using for this website -->
    <img src="https://static.vecteezy.com/system/resources/previews/001/194/632/original/snowboarding-png.png" width="320" height="320"></a>

    </main>

    <!--- This calls the footer file --->
    <?php
    define("FILE_AUTHOR","Luke Pecovic");
    INCLUDE ("../T4/AF_Footer.php");
    ?>




</body>

</html>