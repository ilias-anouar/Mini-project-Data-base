<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    </meta>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </meta>

    <!-- bootstrap cdn -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </link>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

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

    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
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
    <!-- slide -->

    <div data-bs-spy="scroll" data-bs-target="#navbar" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary rounded-2" tabindex="0">
        <header id="Home">
            <div id="demo" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <!-- _ _ _ active btn -->

                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>

                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>

                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                </div>

                <div class="carousel-inner">
                    <!-- first slide -->

                    <div class="carousel-item active">
                        <img src="IMG/sl0.jpg" alt="Los Angeles" class="d-block w-100">

                        <div class="carousel-caption">
                            <h1 class="display-1 fw-bolder  m-lg-5">WELCOME HOME</h1>

                            <p class="display-5 fw-semibold  m-lg-5">RECENTLY SOLD</p>

                            <div class="d-flex container justify-content-between">
                                <div class="d-flex">
                                    <div>
                                        <p>
                                            <!-- search btn -->
                                            <button class="btn search" type="button" data-bs-toggle="collapse" data-bs-target="#search-bar" aria-expanded="false" aria-controls="search-bar">Search</button>
                                        </p>
                                    </div>

                                    <div>
                                        <!-- content of search btn -->
                                        <div class="collapse collapse-horizontal p-3 bg-color" id="search-bar">
                                            <form action="search.php" action="search.php" method="get">
                                                <div class="d-flex gap-2">
                                                    <div>
                                                        <select class="form-select" aria-label=".form-select" name="type" id="type">
                                                            <option value="#">Type</option>
                                                            <option value="Selling">Selling</option>
                                                            <option value="Renting">Renting</option>
                                                        </select>
                                                    </div>
                                                    <!-- min max price  -->
                                                    <div class="input-group gap-3">
                                                        <input type="number" name="Price-max" class="form-control" placeholder="Max price" aria-label="Max" aria-describedby="basic-addon1"></input>

                                                        <input type="number" name="Price-min" class="form-control" placeholder="Min price" aria-label="Min" aria-describedby="basic-addon1"></input>
                                                    </div>
                                                    <button name="search" class="save" type="submit">search</button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>

                                <!-- add btn with the target modal to add advert -->

                                <button class="btn add" data-bs-toggle="modal" data-bs-target="#modal-add">Add</button>
                            </div>
                        </div>
                    </div>

                    <!-- seconde slide -->

                    <div class="carousel-item">
                        <img src="IMG/sl1.jpg" alt="Chicago" class="d-block w-100">

                        <div class="carousel-caption">
                            <h1 class="display-1 fw-bolder m-lg-5">WELCOME HOME</h1>

                            <p class="display-5 fw-semibold m-lg-5">RECENTLY SOLD</p>

                            <div class="d-flex container justify-content-between">
                                <div class="d-flex">
                                    <div>
                                        <p>
                                            <!-- btn search -->

                                            <button class="btn search" type="button" data-bs-toggle="collapse" data-bs-target="#search-bar" aria-expanded="false" aria-controls="search-bar">Search</button>
                                        </p>
                                    </div>

                                    <div>
                                        <div class="collapse collapse-horizontal p-3 bg-color" id="search-bar">
                                            <div class="d-flex">
                                                <div>
                                                    <select class="form-select" aria-label=".form-select" name="type" id="type">
                                                        <option value="#">Type</option>

                                                        <option value="Selling">Selling</option>

                                                        <option value="Renting">Renting</option>
                                                    </select>
                                                </div>

                                                <!-- input min max amount -->

                                                <div class="input-group gap-4">
                                                    <input type="number" name="Price-max" class="form-control" placeholder="Max" aria-label="Max" aria-describedby="basic-addon1"></input>

                                                    <input type="number" name="Price-min" class="form-control" placeholder="Min" aria-label="Min" aria-describedby="basic-addon1"></input>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- add btn with target modal -->

                                <button class="btn add" data-bs-toggle="modal" data-bs-target="#modal-add">Add</button>
                            </div>
                        </div>
                    </div>

                    <!-- third slide -->

                    <div class="carousel-item">
                        <img src="IMG/sl2.jpg" alt="New York" class="d-block w-100">

                        <div class="carousel-caption">
                            <h1 class="display-1 fw-bolder m-lg-5">WELCOME HOME</h1>

                            <p class="display-5 fw-semibold m-lg-5">RECENTLY SOLD</p>

                            <div class="d-flex container justify-content-between">
                            <div class="d-flex">
                                    <div>
                                        <p>
                                            <!-- search btn -->
                                            <button class="btn search" type="button" data-bs-toggle="collapse" data-bs-target="#search-bar" aria-expanded="false" aria-controls="search-bar">Search</button>
                                        </p>
                                    </div>

                                    <div>
                                        <!-- content of search btn -->
                                        <div class="collapse collapse-horizontal p-3 bg-color" id="search-bar">
                                            <form action="search.php" action="search.php" method="get">
                                                <div class="d-flex gap-2">
                                                    <div>
                                                        <select class="form-select" aria-label=".form-select" name="type" id="type">
                                                            <option value="#">Type</option>
                                                            <option value="Selling">Selling</option>
                                                            <option value="Renting">Renting</option>
                                                        </select>
                                                    </div>
                                                    <!-- min max price  -->
                                                    <div class="input-group gap-3">
                                                        <input type="number" name="Price-max" class="form-control" placeholder="Max price" aria-label="Max" aria-describedby="basic-addon1"></input>

                                                        <input type="number" name="Price-min" class="form-control" placeholder="Min price" aria-label="Min" aria-describedby="basic-addon1"></input>
                                                    </div>
                                                    <button name="search" class="save" type="submit">search</button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>

                                <!-- btn add  with target modal to add advert -->

                                <button class="btn add" data-bs-toggle="modal" data-bs-target="#modal-add">Add</button>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>

            <!-- button of navigation  + the logo -->

            <nav class="navbar nav-pills navbar-expand-lg" id="navbar">
                <div class="d-block text-center ms-5">
                    <img src="IMG/logo-01.png" width="50px" height="50px" alt="logo-01">

                    <br>

                    <p class="logo">HOME</p>
                </div>

                <div class="container-fluid">
                    <div class="container-fluid mb-3">
                        <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#Home">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#Rate">Rate</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#Adverts">Adverts</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#Contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <!-- features -->

        <main class="pb-5">
            <section class="text-center pt-5 mb-5" id="Rate">
                <h2 class="mb-5"><span class="logo fs-1">HOME</span>'S TOP OFFICE</h2>

                <div class="d-flex justify-content-around">
                    <div>
                        <h2 class="card-title display-4 fw-bold">#1</h2>

                        <h3 class="card-subtitle text-muted">OFFICE</h3>

                        <p class="card-text">
                            <span class="logo">HOME</span>

                            Rank for

                            <br>
                            Boston Luxury Market Share
                        </p>
                    </div>

                    <div>
                        <h2 class="card-title display-4 fw-bold">$8</h2>

                        <h3 class="card-subtitle text-muted">BILLION</h3>

                        <p class="card-text">
                            Amount of Real Estate Sold by

                            <br>

                            <span class="logo">HOME</span>
                        </p>
                    </div>

                    <div>
                        <h2 class="card-title display-3 fw-bolder">#16</h2>

                        <h3 class="card-subtitle text-muted">YEARS</h3>

                        <p class="card-text">
                            <span class="logo">HOME</span>

                            is Celebrating Sixteen Years
                            of

                            <br>
                            Excellence as Premier
                            Luxury Agency
                        </p>
                    </div>
                </div>
            </section>

            <!-- adverts cards -->
            <section class="text-center" id="Adverts">
                <h2 class="mb-5">OUR NEW ADVERT</h2>

                <div class="d-flex">
                    <div class="d-flex justify-content-around gap-2 flex-wrap">
                        <?php
                        require "connect.php";
                        $sql = "SELECT * FROM advertisement limit 8";
                        $result = $conn->query($sql);

                        while ($row = $result->fetch_assoc()) {
                            // component($row['title'], $row['image'], $row['Area'], $row['address'], $row['amount'], $row['type'], $row['ID']);
                        ?>
                            <div class="m-4">
                                <div class="card " style="width: 18rem;">
                                    <div class="card-image">
                                        <img class="card-img-top" src="IMG/<?php echo $row['image'] ?>" width: 150px; height: 100px; alt="Card image cap">
                                        <div class="image-overlay d-flex flex-column gap-2 justify-content-center
                                                                                                        align-items-center">
                                            <button class="save" data-bs-toggle="modal" data-bs-target="#modal-update<?php echo $row['ID'] ?>">Edit</button>
                                            <button class="save" data-bs-toggle="modal" data-bs-target="#detailsModal<?php echo $row['ID'] ?>">Details</button>
                                            <button class="save delete" data-bs-toggle="modal" data-bs-target="#deletemodal<?php echo $row['ID'] ?>" id="delete">Delete</button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <?php echo $row['title'] ?>
                                        </h5>

                                        <p class="card-text">
                                            <?php echo $row['Area'] ?><br>
                                            <?php echo $row['amount'] ?>
                                            <?php echo $row['type'] ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- modal delete -->

                            <div class="modal fade" id="deletemodal<?php echo $row['ID'] ?>" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="true" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content delete text-center">
                                        <div class="modal-body">
                                            <div class="d-flex justify-content-around p-3">
                                                <form action="delete.php" method="post">
                                                    <input name="ID" type="hidden" value="<?php echo $row['ID'] ?>">
                                                    <p class="fs-5">
                                                        Are you sure you want to delete
                                                        <?php echo $row['title'] ?>?
                                                    </p>
                                                    <button name="delete" id="modal" type="submit" class="btn-delete">Delete</button>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn-cancel" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- modal details -->

                            <div class="modal fade" id="detailsModal<?php echo $row['ID'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="card mb-3">
                                                <div class="row g-0">
                                                    <div class="col-md-4">
                                                        <img src="IMG/<?php echo $row['image'] ?>" alt="..." class="img-fluid rounded-start w-100 h-100">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-body">
                                                            <h5 class="card-title">
                                                                <?php echo $row['title'] ?>
                                                            </h5>
                                                            <!-- address -->
                                                            <p class="card-text">
                                                                <?php echo $row['address'] ?>
                                                            </p>
                                                            <!-- price -->
                                                            <p class="card-text">
                                                                <small class="text-muted">
                                                                    <?php echo $row['amount'] ?> $
                                                                </small>
                                                            </p>

                                                            <!-- superficie -->
                                                            <p class="card-text">
                                                                <small class="text-muted">
                                                                    <?php echo $row['Area'] ?> m²
                                                                </small>
                                                            </p>

                                                            <!-- type -->
                                                            <p class="card-text">
                                                                <small class="text-muted">
                                                                    <?php echo $row['type'] ?>
                                                                </small>
                                                            </p>
                                                            <!-- description -->
                                                            <p class="card-text">
                                                                <?php echo $row['description'] ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- modal update -->

                            <div class="modal fade" id="modal-update<?php echo $row['ID'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <button type="button" class="btn-close m-3" data-bs-dismiss="modal" aria-label="Close"></button>

                                        <div class="modal-body">
                                            <form action="update.php" class="text-center" method="get">
                                                <h2 class="fw-bold">Update advert</h2>
                                                <input name="ID" type="hidden" value="<?php echo $row['ID'] ?>">
                                                <div class="d-flex justify-content-evenly">
                                                    <div>
                                                        <div class="form-floating mb-3">
                                                            <input name="title" type="text" class="form-control shadow-none" id="floatingInput" placeholder="Title" value="<?php echo $row['title'] ?>"></input>

                                                            <label for="floatingInput">Title</label>
                                                        </div>

                                                        <div class="form-floating  mb-3">
                                                            <input name="Address" type="text" class="form-control shadow-none" id="floatingPassword" placeholder="Address" value="<?php echo $row['address'] ?> "></input>

                                                            <label for="floatingPassword">Address</label>
                                                        </div>

                                                        <div class="form-floating mb-3">
                                                            <input name="Space" type="number" class="form-control shadow-none" id="floatingPassword" placeholder="Space" value="<?php echo $row['Area'] ?>"></input>

                                                            <label for="floatingPassword">Space</label>
                                                        </div>

                                                        <div class="form-floating mb-3">
                                                            <input name="date" type="date" class="form-control shadow-none" id="floatingPassword" placeholder="Date" value="<?php echo $row['Date'] ?>" readonly></input>

                                                            <label for="floatingPassword">Date</label>
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <div class="form-floating mb-3">
                                                            <input name="price" type="number" class="form-control shadow-none" id="floatingPassword" placeholder="Price" value="<?php echo $row['amount'] ?>"></input>

                                                            <label for="floatingPassword">Price</label>
                                                        </div>

                                                        <div class="form-floating mb-3">
                                                            <select name="type" class="form-control shadow-none" aria-label=".form-select" id="type">

                                                                <option value="#"></option>
                                                                <?php
                                                                $type = array("Selling", "Renting");
                                                                for ($i = 0; $i < count($type); $i++) {
                                                                    if ($type[$i] == $row['type']) {
                                                                        echo "<option value='$type[$i]' selected>$type[$i]</option>";
                                                                    } else {
                                                                        echo "<option value='$type[$i]'>$type[$i]</option>";
                                                                    }
                                                                }
                                                                ?>
                                                            </select>

                                                            <label for="Type">Type</label>
                                                        </div>

                                                        <div class="form-floating mb-3">
                                                            <input name="Description" class="form-control shadow-none" placeholder="Description" id="floatingTextarea2" style="height: 60px" value="<?php echo $row['description'] ?>"></input>

                                                            <label for="floatingTextarea2">Description</label>
                                                        </div>

                                                        <div class="form-floating mb-3">
                                                            <input name="image" type="file" class="form-control shadow-none" id="floatingPassword" placeholder="Image"></input>
                                                            <label for="floatingPassword">Image</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="d-flex justify-content-center align-items-center mb-3 mt-3">
                                                    <button name="update" type="submit" class="save">ADD</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </section>
        </main>
        <!-- modal ADD -->

        <div class="modal fade" id="modal-add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <button type="button" class="btn-close m-3" data-bs-dismiss="modal" aria-label="Close"></button>

                    <div class="modal-body">
                        <form class="text-center" method="get">
                            <h2 class="fw-bold">Add advert</h2>

                            <div class="d-flex justify-content-evenly">
                                <div>
                                    <div class="form-floating mb-3">
                                        <input name="title" type="text" class="form-control shadow-none" id="floatingInput" placeholder="Title"></input>

                                        <label for="floatingInput">Title</label>
                                    </div>

                                    <div class="form-floating  mb-3">
                                        <input name="Address" type="text" class="form-control shadow-none" id="floatingPassword" placeholder="Address"></input>

                                        <label for="floatingPassword">Address</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input name="Space" type="number" class="form-control shadow-none" id="floatingPassword" placeholder="Space"></input>

                                        <label for="floatingPassword">Space</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input name="date" type="date" class="form-control shadow-none" id="floatingPassword" placeholder="Date"></input>

                                        <label for="floatingPassword">Date</label>
                                    </div>
                                </div>

                                <div>
                                    <div class="form-floating mb-3">
                                        <input name="price" type="number" class="form-control shadow-none" id="floatingPassword" placeholder="Price"></input>

                                        <label for="floatingPassword">Price</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <select name="type" class="form-control shadow-none" aria-label=".form-select" id="type">
                                            <option value="#"></option>

                                            <option value="Selling">Selling</option>

                                            <option value="Renting">Renting</option>
                                        </select>

                                        <label for="Type">Type</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <textarea name="Description" class="form-control shadow-none" placeholder="Description" id="floatingTextarea2" style="height: 60px"></textarea>

                                        <label for="floatingTextarea2">Description</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input name="image" type="file" class="form-control shadow-none" id="floatingPassword" placeholder="Image"></input>

                                        <label for="floatingPassword">Image</label>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-center align-items-center mb-3 mt-3">
                                <button name="add" type="submit" class="save">ADD</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer -->

        <footer class="text-center pt-5 pb-5" id="Contact">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <div>
                    <img src="IMG/logo-01.png" width="120px" height="120px" alt="logo-01">

                    <br>

                    <p class="logo">HOME</p>
                </div>

                <div>
                    <p>
                        ©2023 Home Company | Privacy Policy
                    </p>

                    <p>info@home.com | 617-203-6174</p>
                </div>

                <img src="IMG/fotter.png" width="400" alt="footer">
            </div>
        </footer>
    </div>
    <?php
    if (isset($_GET["add"])) {
        require "add.php";
    }
    // if (isset($_GET["delete"])) {
    //     require("delete.php");
    // }
    ?>
    <!-- <script>
        function Delete(ID) {
            document.getElementById("delete").href = "delete.php?id=" + ID;
            document.getElementById("delete").setAttribute("href", "delete.php?id=" + ID);
            document.getElementById('product_info').style.display = 'block';
        }
    </script> -->
</body>

</html>