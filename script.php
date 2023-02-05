<?php
require("connect.php");
include("connect.php");
if (isset($_GET["add"])) {
    $object = array();
    foreach ($_GET as $key => $value) {
        if (isset($value)) {
            $object["$key"] = $value;
        }
    }
    echo "<pre>";
    print_r($object);
    echo "</pre>";
}
?>