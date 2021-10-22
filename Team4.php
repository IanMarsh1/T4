<!DOCTYPE html>
<!--    ArcticFox Home Page
    09/21/2021 Original Program
    -->
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
    
    <main> <!-- Info on the wibsite -->
        <hr style="color:#053386;">
        <h2>Who are we?</h2>
        <p style="text-align: center;font-size: 20px;">ArcticFox is a retail company specializing in snowboarding equipment and clothing, which
        includes but is not limited to different brands of snowboards, jackets, pants, snow boots, and 
        goggles.</p>

        <hr style="color:#053386;">

        <h2>What services do we offer?</h2>
        <p style="text-align: center;font-size: 20px;">ArcticFox offer a rental service for those that want to go out for a day or two of 
            fun. Customers can either rent/purchase their desired product inside one of our locations or 
            through the website, and they can schedule when they would like to come to pick 
            up their snow gear there. If a customer ever has a problem with our products/ services, they can 
            contact our customer service line.</p>

        <hr style="color:#053386;">

        <h2>What can the Web Site do for you?</h2>
        <p style="text-align: center;font-size: 20px;">On ArcticFox.com, you will be able to rent or buy all your snowboarding needs. The site is a one-stop 
            shop to help complement our already successful in-store business. The site will also help our employees make 
            your experience better by offering real-time quantity numbers and much more.
        </p>
        <hr style="color:#053386;">
        <br>
        <img src="https://static.vecteezy.com/system/resources/previews/001/194/632/original/snowboarding-png.png" width="320" height="320"></a>
        <br> <!--img = cool-->
    </main>
    <?php
    INCLUDE ("../T4/AF_Footer.php");
    ?>
    
    

    

</body>

</html>


<!--<footer style="background-color:#036933;"> Footer with links to important locations 
    


        
        Need Help? Send us an Email! <a herf=<a href="mailto:Ian.Marsh1@marist.edu, Luke.Pecovic1@marist.edu, antonio.lopez2@marist.edu">ArcticFox Support Team</a>
        <br><a href="AF_DisclaimerPage.php">Disclaimer Link</a>
        <br><a href="AF_Construction.php">Privacy Statement Link</a>
        <br><a href="AF_Construction.php">Rental/ Return Policy Link</a>
        <br><a href="AF_ChangeLog.php">Change Log Link</a>
        <br><small> Current Version 1.0.0 </small>
        <br><small> This page © by ArcticFox, 2021 </small>
    </footer> -->
