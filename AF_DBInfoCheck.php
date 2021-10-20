<!- 2021/10/18 IM Original Program->

<!DOCTYPE html>
<html lang="en">


<head>
    <title>DB Connection</title>
    <meta charset="UTF-8">
<head>

<body>

<!-- Buenos Dias bonure -->

<?php
    echo "<h1> Ian Marsh is Testing Connection</h1>";
    echo "<ol>";
    echo "<li> Calling 'connect_db.php' to connect to the database!</l1>";

    require ("..\connect_db.php");

    if (mysqli_ping( $dbc)){
        echo "<li>Connected!</li>";
        echo "<li> MySQL Server". mysqli_get_server_info( $dbc).
            "connected on " . mysqli_get_host_info( $dbc).
            "</li?";}
        echo "<ol>";	   
         
?>
</body>
</html>