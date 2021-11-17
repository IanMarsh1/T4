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
    include ("../../ErrorHandler.php");
    Require ("../../Connect_db.php"); // Connects to our database (actual file found in parent folder)
    $error_message = "";

    #------- Initialize Variables ----------

    if(isset($_POST['itemName'])){
        $item_name = " " . $_POST['itemName'];
    }
    else {
        $item_name = "";
    }
    if(isset($_POST['itemPrice'])){
        $item_price = " " . $_POST['itemPrice'];
    }
    else {
        $item_price = "";
    }
    if(isset($_POST['modelNum'])){
        $model_num = " " . $_POST['modelNum'];
    }
    else {
        $model_num = "";
    }
    if(isset($_POST['quantityAvailable'])){
        $quantity_available = " " . $_POST['quantityAvailable'];
    }
    else {
        $quantity_available = "";
    }
     /* if(isset($_POST['itemWeight'])){     <--might use this might not
        $item_weight = " " . $_POST['itemWeight'];
    }
    else {
        $item_weight = "";
    }
    if(isset($_POST['itemDimensions'])){
        $item_dimensions = " " . $_POST['itemDimensions'];
    }
    else {
        $item_dimensions = "";
    }
    if(isset($_POST['description'])){
        $description = " " . $_POST['description'];
    }
    else {
        $description = "";
    }
    */
    if(isset($_POST['itemCategory'])){
        $item_category = " " . $_POST['itemCategory'];
    }
    else {
        $item_category = "";
    }

    #--------- Input Validation -----------

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (trim($item_name) == ""){
            $error_message = "Please enter a valid non blank name";
        }
        elseif (trim($item_name) == "") {
            $error_message = "Please enter a valid password";
        }
        elseif (ctype_alnum($user_name) == FALSE){
            $error_message = "Alphanumerics only!";
        }
        elseif (ctype_alnum($user_password) == FALSE){
            $error_message = "Alphanumerics only!";
        }
    
        elseif ($user_password != $user_password2){
            $error_message = "These passwords do not match!";
        }
        
        }
        
    #------- If passes run SQL ---------------
    

   /* $q = "INSERT INTO T4_Items (itemName, itemPrice, modelNum, quantityAvailable, itemCategory) 
    VALUES ('$item_name', '$item_price', '$model_num', '$quantity_available', '$item_category')";       // Calls to return the T4_Suppliers values from the table 
    $r = mysqli_query ( $dbc , $q );     // Checks to see if the command worked or not

    if ($r) {
        echo "Everything got added in good";
    }
    else { 
        echo "<br style='color:red';>" . mysqli_error( $dbc );
    }

    */


    echo "<h2 style= color: blue ;text-align: center; font-size: 26px;> Insert into Items! </h2>";
	
    
    #----------- Form ------------------

    echo "<form action ='". $_SERVER['SCRIPT_NAME'] ."' method = 'POST'>";

    echo $_POST['itemName'];
    echo $_POST['itemPrice'];
    echo $_POST['modelNum'];
    echo $_POST['quantityAvailable'];
    echo $_POST['itemCategory'];


    
    echo "<br><input type = 'text' name = 'itemName' value = ''> Name";
    echo "<br><input type = 'text' name = 'itemPrice' value = ''> Price";
    echo "<br><input type = 'text' name = 'modelNum' value = ''> Model Number";
    echo "<br><input type = 'text' name = 'quantityAvailable' value = ''> Quantity Available";
   // echo "<br><input type = 'text' name = 'itemWeight' value = ''> Item Weight";
   // echo "<br><input type = 'text' name = 'itemDiemnsions' value = ''> Item Dimensions";
   // echo "<br><input type = 'text' name = 'description' value = ''> Description";
    echo "<br><input type = 'text' name = 'itemCategory' value = ''> Category";


    

    echo "<br> <input type = 'submit' value = 'Submit Changes!' Style = 'color: white; background-color: coral;'>";

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