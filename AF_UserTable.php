<!DOCTYPE html>
<!-----------------------------------------------------------------------------------------------------------------
--  AF_UserTable.PHP (Original Program)
--  ArcticFox Home Page
--  LastUpDate: 11/1/21
--  This will show our User table 
------------------------------------------------------------------------------------------------------------------>
<html lang="en">


<head>
    <title>ArcticFox Home Page</title>
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
    </style><!-- https://www.w3schools.com/html/html_links_colors.asp-->
    <!-- I went online to find out how to change the way links look -->
</head>

<body style="background-color:#00a84c;">

    <header style="background-color:#dfe7d3;">
        <a href= "Team4.php" ><h1 style="color: #053386;text-align: center; font-size: 38px;"> ArcticFox </h1></a>  <!-- Set the ArcticFox Header -->
    </header>

    <nav style="background-color:#036933;"> <!-- Nav bar with links to the other pages of the website -->
        <ul style="color:#dfe7d3;">
            <li><a href="AF_Construction.php">Snowboards for Sale</a></li>
            <li><a href="AF_Construction.php">Snowboards for Rent</a></li>
            <li><a href="AF_Construction.php">Snowboard Equipment</a></li>
            <li><a href="AF_Construction.php">Find a Location</a></li>
            <li><a href="AF_Construction.php">Employee Login</a></li>
            <li><a href="AF_AdminPage.php">Admin Page</a></li>

            <li><div class="topnav" text-align: center;>
                <input type="text" placeholder="Search..">
              </div></li>
        </ul>
    </nav>
    
    
    <main> 
        
    <?php
    REQUIRE ("../Connect_db.php"); //You need a ../ becuase this file is in the parent folder

    $q = "SELECT * FROM T4_Users"; # We put command in $q   -  in the example we have t4_Users
    $r = mysqli_query ( $dbc , $q );       # this runs commands,

    echo "<Table border=2 style = 'background-color: #dfe7d3 '>";

    echo "<tr>"; //This is the table header
        echo "<th>User ID</th>";
        echo "<th>Username</th>";
        echo "<th>First Name</th>";
        echo "<th>Last Name</th>";

    if ($r) {
        while ($row = mysqli_fetch_array( $r, MYSQLI_NUM)){
            echo "<tr>"; //This is where you echo all the data
                echo "<td> " . $row[0] ."</td>";
                echo "<td> " . $row[1] ."</td>";
                echo "<td> " . $row[3] ."</td>";
                echo "<td> " . $row[4] ."</td>";
            echo "</tr>"; 
        }
    }
    else { 
        echo "<li>" . mysqli_error( $dbc ) . "</li>" ;
    }
    echo "</tr>";
    echo "</Table>";
    
    ?>
    <br>
    
    </main>

    <!--- This is the footer file --->
    <?php
    define("FILE_AUTHOR","Antonio Lopez, Luke Pecovic, and Ian Marsh");
    INCLUDE ("../T4/AF_Footer.php");
    ?>
    

    

</body>

</html>
