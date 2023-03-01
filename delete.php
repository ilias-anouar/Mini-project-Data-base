<?php
include "connect.php";
if (isset($_POST['ID'])) {
    $id = $_POST['ID'];
    $Delete = "DELETE FROM advertisement WHERE `advertisement`.`ID` = $id";
    $stmt = $conn->query($Delete);
    header('Location: index.php');
}
?>