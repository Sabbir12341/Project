<?php
    $HOSTNAME = 'localhost'; //$hostname smal letter e lekhle error naki?
    $USERNAME= 'root';
    $PASSWORD= '';
    $DATABASE= 'signup';


    //connneting to database
    $con= mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);



if (!$con) {
    die("Connection failed: " . mysqli_connect_error()); // Use mysqli_connect_error() to get the connection error
} 

?>
