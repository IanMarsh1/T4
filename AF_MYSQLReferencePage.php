<!DOCTYPE html>
<!--    ArcticFox Home Page
    09/21/2021 Original Program
    -->
<html lang="en">


<head>
    <title>ArcticFox SQL Reference Page</title>
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

        h1 {
            color: red;
        }
        tr:nth-child(even) {background-color: silver;} 
    </style><!-- https://www.w3schools.com/html/html_links_colors.asp-->
    <!-- I went online to find out how to change the way links look -->
</head>

<body style="background-color:#00a84c;">

    <header style="background-color:#dfe7d3;">
        <a href= "file:///C:\SD2\T4\Team4.html" ><h1 style="color: #053386;text-align: center; font-size: 38px;"> ArcticFox </h1></a>  <!-- Set the ArcticFox Header -->
    </header>

    <nav style="background-color:#036933;"> <!-- Nav bar with links to the other pages of the website -->
        <ul style="color:#dfe7d3;">
            <li><a href="">Snowboards for Sale</a></li>
            <li><a href="">Snowboards for Rent</a></li>
            <li><a href="">Snowboard Equipment</a></li>
            <li><a href="">Find a Location</a></li>
            <li><a href="">Employee Login</a></li>
            <li><a href="file:///C:/SD2/T4/AF_AdminPage.html">Admin Page</a></li>

            <li><div class="topnav" text-align: center;>
                <input type="text" placeholder="Search..">
              </div></li>
        </ul>
    </nav>
    
    <main> <!-- Info on the wibsite -->
        <h2 style="text-align: center;">DATABASE COMMANDS</h2>
        <hr style="color:#053386;">
        
        <!-- Start of DATABASE COMMANDS -->
        <table border=1>
            <tr> <!-- New Row -->
                <th> Commands </th> <!-- New bold column -->
                <th> Description </th>
            </tr>

            <tr>
                <td> CREATE DATABASE IF NOT EXISTS 'DatabaseName'; </td>
                <td> Create a new SQL database</td>
            </tr>

            <tr>
                <td> DROP DATABASE 'DatabaseName'; </td>
                <td> Drop an existing SQL database</td>
            </tr>

            
            <tr>
                <td> USE 'DatabaseName'; </td>
                <td> Use an existing SQL database</td>
            </tr>

            <tr>
                <td> EXPLAIN table_name; </td>
                <td> Explain data types and constraints</td>
            </tr>
            <tr>
                <td> SELECT * FROM table_name; </td>
                <td> Show the table </td>
            </tr>
            

        </table>

        <!-- ----------------------------------------------------------------------------------------- -->

        <h2 style="text-align: center;">TABLE COLUMN COMMANDS</h2>
        <hr style="color:#053386;">
        
        <!-- Start of TABLE COLUMN COMMANDS -->
        <table border=1>
            <tr> <!-- New Row -->
                <th> Commands </th> <!-- New bold column -->
                <th> Description </th>
            </tr>

            <tr>
                <td> CREATE TABLE IF NOT EXISTS table_name (column1 datatype, ....);  </td>
                <td> Create a new table in a database </td>
            </tr>

            <tr>
                <td> INSERT INTO table_name VALUES ....;</td>
                <td> Add a new row </td>
            </tr>

            <tr>
                <td> ALTER TABLE mycds ADD ...;</td>
                <td> Add a column </td>
            </tr>
            
            <tr>
                <td> DELETE FROM table_name WHERE ...; </td>
                <td> Delete row/s form table </td>
            </tr>

            <tr>
                <td> UPDATE table_name SET (What you want changed) WHERE ...; </td>
                <td> Allows you to change a row/s </td>
            </tr>
            

        </table>

        <!-- ----------------------------------------------------------------------------------------- -->

        <h2 style="text-align: center;">TABLE DATA COMMANDS</h2>
        <hr style="color:#053386;">
        
        <!-- Start of TABLE DATA COMMANDS -->
        <table border=1>
            <tr> <!-- New Row -->
                <th> Commands </th> <!-- New bold column -->
                <th> Description </th>
            </tr>
            <tr>
                <td> AUTO_INCREMENT </td>
                <td> Start at 1, and it will increment by 1 for each new record.</td>
            </tr>
            <tr>
                <td> NOT NULL </td>
                <td> Cannot have a NULL value</td>
            </tr>

            <tr>
                <td> UNIQUE </td>
                <td> All values in a column are different </td>
            </tr>

            <tr>
                <td> PRIMARY KEY </td>
                <td> Use the column as a PK <br></td>
            </tr>
            
            <tr>
                <td> DEFAULT </td>
                <td> Default value for a column </td>
            </tr>

            <tr>
                <td> MySQL Data Types </td>
                <td> 
                    <ul>
                        <li>CHAR(size)</li>
                        <li>VARCHAR(size)</li>
                        <li>TEXT(size)</li>
                        <li>BLOB(size)</li>
                        <li>ENUM(val1, ...)</li>
                        <li>INT(size)</li>
                        <li>DECIMAL(size, (# of digits after the .))</li>
                        <li>DOUBLE(size, (# of digits after the .))</li>
                        <li>TIME(hh:mm:ss)</li>
                        <li>TIMESTAMP</li>
                        <li>DATE</li>
                    </ul>
                </td>
            </tr>
            

        </table>
        <h2 style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;Links</h2>
        <hr style="color:#053386;">

        <ul style="background-color:#dfe7d3;">
            <li style="text-align: center;"><a href="https://www.w3schools.com/sql/default.asp">W3Schools SQL</a></li>
            <li style="text-align: center;"><a href="https://www.w3schools.com/sql/sql_examples.asp">SQL Examples</a></li>
            <li style="text-align: center;"><a href="https://www.w3schools.com/sql/sql_injection.asp">SQL Injection</a></li>
        </ul>
        <hr style="color:#053386;">
        <br>
        <img src="https://static.vecteezy.com/system/resources/previews/001/194/632/original/snowboarding-png.png" width="320" height="320"></a>
        <br> <!--img = cool-->

    </main>

    <footer style="background-color:#036933;"><!-- Footer with links to important locations --> 
        
        Need Help? Send us an Email! <a herf=<a href="mailto:Ian.Marsh1@marist.edu, Luke.Pecovic1@marist.edu, antonio.lopez2@marist.edu">ArcticFox Support Team</a>
        <br><a href="file:///C:/SD2/T4/AF_DisclaimerPage.html">Disclaimer Link</a>
        <br><a href="">Privacy Statement Link</a>
        <br><a href="">Rental/ Return Policy Link</a>
        <br><a href="file:///C:/SD2/T4/AF_ChangeLog.html">Change Log Link</a>
        <br><small> Current Version 1.0.0 </small>
        <br><small> This page © by ArcticFox, 2021 </small>
    </footer>

</body>

</html>