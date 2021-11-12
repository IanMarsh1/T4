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

*/

echo '<table><table border = 1; style= "width:100%">';
	
echo	'<col style="width:10%">';
echo 	'<col style="width:10%">';
echo	'<col style="width:10%">';
echo	'<col style="width:14%">';
echo	'<col style="width:14%">';
echo	'<col style="width:20%">';
	
			//		<!-- Info on the website -->
echo		'<tr>';
echo         '<th><a href="AF_ShowItemsTable.php">Items</a></th>';
echo        '<th><a href="AF_ShowSuppliersTable.php">Supp</a></th>';
echo        '<th><a href="AF_ShowUserTable.php">User</a></th>';
echo        '<th><a href="AF_Construction.php">Employee Login</a></th>';
echo        '<th><a href="AF_AdminPage.php">Admin Page</a></th>';
echo        '<th><div class="topnav" text-align: center;><input type="text" placeholder="Search.."></div></th>';
echo	'</tr>';
		
echo '</table>';
	
?>