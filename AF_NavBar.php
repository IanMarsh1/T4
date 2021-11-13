<?php

/*
				  #IN-LINE CSS#
		th{
			background-color:#036933;
		}
		
		a:link {
            color: white;
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
        a:link {
            color: #dfe7d3;
            background-color: transparent;
            text-decoration: none;
            font-size: 18px;
        }

        a:visited {
            color: #dfe7d3;
            background-color: transparent;
            text-decoration: none;
            font-size: 18px;
        }

*/

echo '<table border = 1; 

style= "width:100%;
background-color: #036933;
color: black;
border-collapse: collapse;
border: 25px;
font-family: serif;
font-weight: normal;
margin-right: auto;
margin-left: auto;"
>';
	
echo	'<col style="width:10%">';
echo 	'<col style="width:10%">';
echo	'<col style="width:10%">';
echo	'<col style="width:14%">';
echo	'<col style="width:14%">';
echo	'<col style="width:20%">';
	
			//		<!-- Info on the website -->
echo		'<tr>';
echo        '<th style = "background-color:#036933";><a href="AF_ShowItemsTable.php" style = "color: #dfe7d3;background-color: transparent;text-decoration: none;font-size: 18px;">Items</a></th>';
echo        '<th style = "background-color:#036933";><a href="AF_ShowSuppliersTable.php" style = "color: #dfe7d3;background-color: transparent;text-decoration: none;font-size: 18px;">Supp</a></th>';
echo        '<th style = "background-color:#036933";><a href="AF_ShowUserTable.php" style = "color: #dfe7d3;background-color: transparent;text-decoration: none;font-size: 18px;">User</a></th>';
echo        '<th style = "background-color:#036933";><a href="AF_Construction.php" style = "color: #dfe7d3;background-color: transparent;text-decoration: none;font-size: 18px;">Employee Login</a></th>';
echo        '<th style = "background-color:#036933";><a href="AF_AdminPage.php" style = "color: #dfe7d3;background-color: transparent;text-decoration: none;font-size: 18px;">Admin Page</a></th>';
echo        '<th style = "background-color:#036933";><div class="topnav" text-align: center;><input type="text" placeholder="Search.."></div></th>';
echo	'</tr>';
		
echo '</table>';
	
?>