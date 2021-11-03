<!DOCTYPE html>
<!-----------------------------------------------------------------------------------------------------------------
--  AF_AdminPage.php (Original Program)
--  ArcticFox Admin Page
--  LastUpDate: 10/22/21
--  This will be used by admins and give them the links they need
------------------------------------------------------------------------------------------------------------------>
<html lang="en">


<head>
    <title>ArcticFox Admin Page</title>
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
    </style><!-- https://www.w3schools.com/html/html_links_colors.asp-->
    <!-- I went online to find out how to change the way links look -->
</head>

<body style="background-color:#00a84c;">

    <header style="background-color:#dfe7d3;">
        <a href= "Team4.php" ><h1 style="color: #053386;text-align: center; font-size: 38px;"> ArcticFox </h1></a>  <!-- Set the ArcticFox Header  -->
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

    <main> <!-- Info on the wibsite -->
        <h3>ADMIN PAGE</h3>
        <hr style="color:#053386;">
        <ul style="color:#dfe7d3;">
            <li><a href="AF_HTMLReferencePage.php">HTML/CSS Reference</a></li>
            <li><a href="AF_MYSQLReferencePage.php">MySQL Reference</a></li>
            <li><a href="AF_ExplainUserTable.php">Explain User Table </a></li>
            <li><a href="AF_ExplainItemsTable.php">Explain Items Table</a></li>
            <li><a href="AF_ExplainSuppliersTable.php">Explain Suppliers Table </a></li>
            <li><a href="AF_Doc.pdf">Requirements and Design Document </a></li>
        </ul>
        <hr style="color:#053386;">
        <br>
        <img src="https://static.vecteezy.com/system/resources/previews/001/194/632/original/snowboarding-png.png" width="320" height="320"></a>
        <br> <!--img = cool-->
    </main>

    <?php
    define("FILE_AUTHOR","Antonio Lopez, Luke Pecovic, and Ian Marsh");
    INCLUDE ("../T4/AF_Footer.php");
    ?>

</body>

</html>
