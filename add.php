<?php
require "connect.php";

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
}else{
    $date = 'now()';
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

$sql = "INSERT INTO advertisement  (`ID`, `title`, `image`, `description`, `Area`, `address`, `amount`, `Date`, `type`)
VALUES (null,'$title','$image','$Description','$Space','$Address','$price','$date','$type')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->connect_error;
}
$conn->close();
?>