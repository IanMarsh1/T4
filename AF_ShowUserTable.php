<!DOCTYPE html>
<!-----------------------------------------------------------------------------------------------------------------
--  AF_UserTable.PHP (Original Program)
--  ArcticFox Home Page
--  LastUpDate: 11/1/21
--  This will show our User table 
------------------------------------------------------------------------------------------------------------------>
<html lang="en">


<head>
    <title>ArcticFox User Table</title>
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
        table {
            background-color: rgb(11, 80, 11);
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

    <header style="background-color:#dfe7d3;">
        <a href= "Team4.php" ><h1 style="color: #053386;text-align: center; font-size: 38px;"> ArcticFox </h1></a>  <!-- Set the ArcticFox Header -->
    </header>

    <nav style="background-color:#036933;"> 
	<!-- Navigation bar, links to other locations on the website -->
        <ul style="color:#dfe7d3;">
            <li><a href="AF_Construction.php">Snowboards for Sale</a></li>
            <li><a href="AF_Construction.php">Snowboards for Rent</a></li>
            <li><a href="AF_Construction.php">Snowboard Equipment</a></li>
            <li><a href="AF_Construction.php">Find a Location</a></li>
            <li><a href="AF_Construction.php">Employee Login</a></li>
            <li><a href="AF_AdminPage.php">Admin Page</a></li>

			<!-- Search bar (work in progress, not functional yet) -->
            <li><div class="topnav" text-align: center;>
                <input type="text" placeholder="Search..">
              </div></li>
        </ul>
    </nav>
    
    
    <main> 
        
    <?php
    REQUIRE ("../Connect_db.php"); // Connects to our database (actual file found in parent folder)

    $q = "SELECT * FROM T4_Users"; 		   // Calls to return the T4_Suppliers values from the table 
    $r = mysqli_query ( $dbc , $q );       // Checks to see if the command worked or not

    echo "<Table border=2 style = 'background-color: #dfe7d3 '>";

		echo "<tr>"; // This is the table header, tells us the column names for the SQL table
        echo "<th>User ID</th>";
        echo "<th>Username</th>";
        echo "<th>First Name</th>";
        echo "<th>Last Name</th>";

	// Echos out table content if the SELECT * FROM command ran, otherwise it gives an error
    if ($r) {
        while ($row = mysqli_fetch_array( $r, MYSQLI_NUM)){
            echo "<tr>"; 
                echo "<td> " . $row[0] ."</td>";
                echo "<td> " . $row[1] ."</td>";
                echo "<td> " . $row[3] ."</td>";
                echo "<td> " . $row[4] ."</td>";
            echo "</tr>"; 
        }
    }
    else { 
        echo "<li>" . mysqli_error( $dbc ) . "</li>" ;   // Error message
    }
    echo "</tr>";
    echo "</Table>";
    
    ?>
    <br>

    <hr>
	<!-- Logo that we are using for this website -->
    <img src="https://static.vecteezy.com/system/resources/previews/001/194/632/original/snowboarding-png.png" width="320" height="320"></a>
    
    </main>

    <!--- This is the footer file --->
    <?php
    define("FILE_AUTHOR","Ian Marsh");
    INCLUDE ("../T4/AF_Footer.php");
    ?>
    

    

</body>

</html>
