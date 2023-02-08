<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    </meta>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </meta>

    <!-- bootstrap cdn -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </link>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>

    <!-- text font -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    </link>

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin">
    </link>

    <!-- logo font -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    </link>

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin">
    </link>

    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    </link>

    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    </link>

    <!-- icons -->

    <link rel="icon" type="image/x-icon" href="IMG/favicon.ico">
    </link>

    <!-- link css -->

    <link rel="stylesheet" href="style.css">
    </link>

    <!-- link script -->

    <script src="script.js" defer></script>

    <title>Home</title>
</head>

<body>
    <section class="text-center" id="Adverts">
        <h2 class="mb-5">Search result</h2>

        <div class="d-flex">
            <img src="IMG/side_image.png" alt="side-image">
            <div class="d-flex justify-content-around gap-2 flex-wrap">

                <?php
                include_once('./component.php');
                require "connect.php";
                if ($_GET["type"] != null) {
                    $type = $_GET["type"];
                }
                if ($_GET["type"] != null) {
                    $max = $_GET["Price-max"];
                }
                if ($_GET["type"] != null) {
                    $min = $_GET["Price-min"];
                }

                $sql = "SELECT * FROM `advertisement` WHERE `amount` >= $min AND `amount` <= $max AND `type` = '$type'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        component($row['title'], $row['image'], $row['Area'], $row['address'], $row['amount'], $row['type']);
                    }
                } else {
                    echo "0 results";
                }
                $conn->close();
                ?>
            </div>
            <img src="IMG/side_image.png" alt="side-image">
        </div>
    </section>
    <!-- modal details -->

    <div class="modal fade" id="detailsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable ">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="..." class="img-fluid rounded-start" alt="...">
                            </div>

                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">BOSTON ,MA</h5>
                                    <!-- adresse -->
                                    <p class="card-text">
                                        401 BACON STREAT .
                                    </p>
                                    <!-- price -->
                                    <p class="card-text">
                                        <small class="text-muted">$4,950,000</small>
                                    </p>

                                    <!-- superficie -->
                                    <p class="card-text">
                                        <small class="text-muted">700 m²</small>
                                    </p>

                                    <!-- type -->
                                    <p class="card-text">
                                        <small class="text-muted">$4,950,000</small>
                                    </p>
                                    <!-- description -->
                                    <p class="card-text">
                                        Bedrooms 4 | Bath1 | Half Baths 4,140
                                        Bedrooms 4 | Bath1 | Half Baths 4,140
                                        Bedrooms 4 | Bath1 | Half Baths 4,140
                                        Bedrooms 4 | Bath1 | Half Baths 4,140
                                        Bedrooms 4 | Bath1 | Half Baths 4,140
                                        Bedrooms 4 | Bath1 | Half Baths 4,140
                                        Bedrooms 4 | Bath1 | Half Baths 4,140
                                        Bedrooms 4 | Bath1 | Half Baths 4,140
                                        Bedrooms 4 | Bath1 | Half Baths 4,140
                                        Bedrooms 4 | Bath1 | Half Baths 4,140
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- modal delete -->

    <div class="modal fade" id="deletemodal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content delete text-center">
                <div class="modal-body">
                    <p class="fs-5">
                        Are you sure you want to delete this announcement
                    </p>

                    <div class="d-flex justify-content-around p-3">
                        <button id="modal" class="btn-delete" type="button" data-bs-dismiss="modal">Delete</button>

                        <button class="btn-cancel" type="button" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    if (isset($_GET["add"])) {
        require "add.php";
    }

    ?>
    <script>
        const DELETE = document.querySelector('.delete')
        let modal = document.getElementById('modal')
        modal.addEventListener("click", function () {
            let item = DELETE.closest('div').parentNode.parentNode.parentNode
            item.remove();
        });
    </script>
</body>

</html>