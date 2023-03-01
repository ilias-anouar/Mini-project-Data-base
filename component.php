<?php
function component($title, $image, $Space, $Address, $price,$type,$id)
{
    $element = "
<div class=\"m-4\">
    <div class=\"card \" style=\"width: 18rem;\">
        <div class=\"card-image\">
            <img class=\"card-img-top\" src=\"IMG/$image\"   width: 150px; height: 100px; alt=\"Card image cap\">
            <div class=\"image-overlay d-flex flex-column gap-2 justify-content-center align-items-center\">
                <button class=\"save\">Edit</button>
                <button class=\"save\" data-bs-toggle=\"modal\" data-bs-target=\"#detailsModal\" >Details</button>
                <button class=\"save delete\" data-bs-toggle=\"modal\" data-bs-target=\"#deletemodal\" id=\"delete\">Delete</button>
            </div>
        </div>
        <div class=\"card-body\">
            <h5 class=\"card-title\">$title</h5>

            <p class=\"card-text\">$Space<br>$price $type<br>$Address<br></p>
        </div>
    </div>
</div>
";
    echo $element;
}
?>