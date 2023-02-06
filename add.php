<?php 
require "connect.php";
$sql = "INSERT INTO advertisement  (`ID`, `title`, `image`, `description`, `Area`, `address`, `amount`, `Date`, `type`)
VALUES (NUll, 'Doe', 'image', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis error soluta recusandae eligendi natus libero expedita totam neque, impedit illo! Omnis aut pariatur possimus ab id iusto. Delectus, obcaecati expedita','700','address addressaddressaddressaddress','12000000',now(),'selling' )";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>