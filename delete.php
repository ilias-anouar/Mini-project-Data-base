<?php
require "connect.php";
echo "hi";
if (isset($_GET['id']) ){

    
    $ID = $_GET['id'];
    

    //store a request to the db to delete the card by its id
    $Delete = "DELETE FROM advertisement WHERE `advertisement`.`ID` = $ID" ;
    
    //execute the request above
    $Result = $conn->query($Delete)->execute();

    // if result had an error print it out 
    if (!$Result) {
        echo "Error: " . $Delete . "<br>" . $conn->connect_error;
    }
    
    // return to the main page wich is index.php
    header("location:index.php");
} 
?>