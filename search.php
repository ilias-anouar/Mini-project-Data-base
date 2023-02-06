<?php
require "connect.php";
if (isset($_GET["search"])) {
    if ($_GET["type"]!= null) {
        $type = $_GET["type"];
    }
    if ($_GET["type"] != null) {
        $max = $_GET["Price-max"];
    }
    if ($_GET["type"] != null) {
        $min = $_GET["Price-min"];
    }

}

?>