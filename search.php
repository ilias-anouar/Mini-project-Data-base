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

function component(){
$element= "
 <div class=\"m-4\">
   <div class=\"card \" style=\"width: 18rem;\">
 

       <div class=\"card-image\">
           <img class=\"card-img-top\" src=\"https://via.placeholder.com/150x100\"alt=\"Card image cap\">

       <div
            class=\"image-overlay d-flex flex-column gap-2 justify-content-center align-items-center\">
            <button>Edit</button>

            <button data-bs-toggle=\"modal\" data-bs-target=\"#deletemodal\">Delete</button>
            <button>Details</button>
        </div>
    </div>
    <div class=\"card-body\">
        <h5 class=\"card-title\">Card title</h5>

        <p class=\"card-text\">Some quick example text.</p>
    </div>
</div>
";
    echo $element;
}









?>