<!DOCTYPE HTML>

<html lang="en">

<head>
    <title>My First Form</title>
    <meta charset="utf-8">
</head>

<body>
    <header>
        <h1> Class 10a - My First HTML/PHP Form </h1>
    </header>
    <hr>

    <main>

    <?php
    
    REQUIRE ("../Connect_db.php");//May need to change

    $q = "SELECT * FROM prints"; # We put command in $q 
    $r = mysqli_query ( $dbc , $q );       # this runs commands,

    echo "<Table border='2'>";

        

    if ($r) {
        while ($row = mysqli_fetch_array( $r, MYSQLI_NUM)){
            echo "<tr>"; 
                echo "<td> " . $row[0] ."</td>";
                echo "<td> " . $row[1] ."</td>";
                echo "<td> " . $row[2] ."</td>";
                echo "<td> " . $row[3] ."</td>";
            echo "</tr>"; 
        }
    }
    else { 
        echo "<li>" . mysqli_error( $dbc ) . "</li>" ;
    }
    echo "</tr>";
    echo "</Table>";
    echo "<br>";

    include "../T4/AF_Footer.php";

    ?>

    </main>
</body>