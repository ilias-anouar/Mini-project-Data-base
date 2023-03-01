<?php
require "connect.php";

$id = $_GET['ID'];

if (!empty($_GET["title"])) {
    $title = $_GET["title"];
}
if (!empty($_GET["Address"])) {
    $Address = $_GET["Address"];
}
if (!empty($_GET["Space"])) {
    $Space = $_GET["Space"];
}
if (!empty($_GET["date"])) {
    $date = $_GET["date"];
}
if (!empty($_GET["price"])) {
    $price = $_GET["price"];
}
if (!empty($_GET["type"])) {
    $type = $_GET["type"];
}
if (!empty($_GET["Description"])) {
    $Description = $_GET["Description"];
}
if (!empty($_GET["image"])) {
    $image = $_GET["image"];
}

$sql = "UPDATE `advertisement` SET `title` = '$title', `image` = '$image', `description`='$Description',`Area`='$Space',`address`='$Address', `amount`='$price', `Date`='$date',`type`='$type'  WHERE `advertisement`.`ID` = $id" ;

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->connect_error;
}
$conn->close();
?>