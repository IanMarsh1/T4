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
    
    include ("../ErrorHandler.php");
    Require ("../Connect_db.php"); // Connects to our database (actual file found in parent folder)
    $error_message = "";
    echo $error_message;

    #------- Initialize Variables ----------

    if(isset($_POST['itemName'])){
        $item_name = $_POST['itemName'];
    }
    else {
        $item_name = "";
    }
    if(isset($_POST['itemPrice'])){
        $item_price = $_POST['itemPrice'];
    }
    else {
        $item_price = "";
    }
    if(isset($_POST['modelNum'])){
        $model_num = $_POST['modelNum'];
    }
    else {
        $model_num = "";
    }
    if(isset($_POST['quantityAvailable'])){
        $quantity_available = $_POST['quantityAvailable'];
    }
    else {
        $quantity_available = "";
    }
    if(isset($_POST['itemCategory'])){
        $item_category = $_POST['itemCategory'];
    }
    else {
        $item_category = "";
    }

    #--------- Input Validation -----------
    

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        //item name
        if (trim($item_name) == ""){
            $error_message = "Please enter a valid non blank name";
            
        }
        elseif (ctype_alnum($item_name) == FALSE){
            $error_message = "Item Name must be alphanumerics only!";
        }

        //item price
        elseif (is_numeric($item_price) == FALSE) {
            $error_message = "Please enter a valid price";
        }
        elseif (trim($item_price) == ""){
            $error_message = "Please enter a valid non blank name";
            
        }
        //model num
        elseif (is_numeric($model_num) == FALSE) {
            $error_message = "Please enter a valid model num";
        }
        //quantity available
        elseif (is_numeric($quantity_available) == FALSE) {
            $error_message = "Please enter a valid quantity";
        }
        //item category is a select
        
    
        
        
        }
        
    #------- If passes run SQL --------------- 
    #***** THIS NEEDS TO BE CHECKED TO SEE IF THERE IS ANY ERRORS 
    #***** RIGHT NOW YOU YOU RUN ON THE FIRST GO LOOK AT INSERT USERS

    #------ Check to see if item is already used -------
    
    if ($error_message == "" && $_SERVER['REQUEST_METHOD'] == "POST") { 
        $q = "Select itemName From t4_items Where itemName = '$item_name'";
        $r = mysqli_query ( $dbc , $q );    # this runs commands,
        if (mysqli_num_rows($r) > 0) { 
            $error_message = "Item Name is already used!";
        }
            
    }
    
if ($error_message == "" && $_SERVER['REQUEST_METHOD'] == "POST") { 
   $q = "INSERT INTO t4_items (itemName, itemPrice, modelNum, quantityAvailable, itemCategory) 
    VALUES ('$item_name', '$item_price', '$model_num', '$quantity_available', '$item_category')";       // Calls to return the T4_Suppliers values from the table 
    $r = mysqli_query ( $dbc , $q );     // Checks to see if the command worked or not

    if ($r) {
        echo "Item $item_name added into Items Table!";
    }
    else { 
        echo $error_message = "There was a problem, Please try again!";
        echo mysqli_error( $dbc ) ;
    }
}
echo $q;
    


    echo "<h2 style= color: blue ;text-align: center; font-size: 26px;> Insert into Items! </h2>";
    echo "<p style='color:red';>$error_message";
	
    
    #----------- Form ------------------

    echo "<form action ='". $_SERVER['SCRIPT_NAME'] ."' method = 'POST'>";




    
    echo "<br>Name <input type = 'text' name = 'itemName' value = '" . $item_name ."'> ";
    echo "<br>Price <input type = 'number' name = 'itemPrice' value = '" . $item_price ."'> ";
    echo "<br>Model Number <input type = 'number' name = 'modelNum' value = '" . $model_num ."'> ";
    echo "<br>Quantity Available <input type = 'number' name = 'quantityAvailable' value = '" . $quantity_available ."'> ";

    echo "<br> Category <select name='itemCategory'>  ";
        echo "  <option value='Equipment'> Equipment </option>"; 
        echo "  <option value='Clothing'> Clothing </option>";
        echo "  <option value='Unsorted'> Unsorted </option>";
    echo "</select>";


    

    echo "<br> <input type = 'submit' value = 'Submit Changes!' Style = 'color: white; background-color: coral;'>";

    echo "</form>";
    
    echo "<br> <a href= 'AF_ShowItemsTable.php' Style = 'text-decoration: underline;'> Go Back </a>";

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