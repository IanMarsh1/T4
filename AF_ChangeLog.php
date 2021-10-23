<!DOCTYPE html>
<!--    AF_ChangeLog.php  
    10/11/21  Original Program
    -->
<html lang="en">


<head>
    <title>ArcticFox Change Log</title>
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
            color: #dfe7d3;
            text-align: center;
            font-size: 24px;
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
        <h2 style="color:#dfe7d3;text-align: center;"> Change Log </h2>

        <hr style="color:#053386;"> 

        <h3 style="color:#dfe7d3;text-align: left;"><strong>Version 1.0.0 - 10/12/2021 -  Original web pages released</strong></h3>

        

        <ul style="font-size: 18px;">
            
            <li>Created Home Page</li>
            <li>Created Disclaimer Page</li>
            <li>Created Version/Change log</li>
            <li>Created an Admin Page</li>
            
        
        </ul>
        <br>
        <hr style="color:#053386;"> 

        <img src="https://static.vecteezy.com/system/resources/previews/001/194/632/original/snowboarding-png.png" width="320" height="320"></a>
        <br>

    </main>

    <?php
    define("FILE_AUTHOR","Antonio Lopez, Luke Pecovic, and Ian Marsh");
    INCLUDE ("../T4/AF_Footer.php");
    ?>

</body>

</html>
