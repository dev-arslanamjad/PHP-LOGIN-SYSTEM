<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" type="image/jpg" href="sl_z_072523_61700_05.jpg">
    <link rel="shortcut icon" type="image/jpg" href="/sl_z_072523_61700_05.jpg" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: white;
        }

        .naveee {
            background-color: #141E46 !important;
        }

        .logoutbtn {
            position: absolute;
            right: 22px;
        }

        .logo {
            width: 5%;
            border-radius: 20%;
        }

        .logo img {
            border-radius: 20%;
        }
    </style>
</head>

<body>
    <div class="section naveee">
        <nav class="navbar navbar-expand-lg navbar-light p-2  container">
            <a class="navbar-brand text-light logo" href="dashboard.php"><img class="w-100" src="sl_z_072523_61700_05.jpg" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse naiii" id="navbarNavDropdown">
                <ul class="navbar-nav ">
                    <li class="nav-item active">
                        <a class="nav-link bg-success text-light rounded " href="profile.php"><b>Profile</b></a>
                    </li>

                    <li class="nav-item">
                        <a href="logout.php" class="btn btn-danger logoutbtn"><b>Logout</b></a>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container hero mt-4">
        <h1 class="text-dark">Welcome <span class="text-primary">
                <?php echo $_SESSION["thename"]; ?>
            </span></h1>
    </div>
    <div class="container">
        <!-- Hero 6 - Bootstrap Brain Component -->
        <section class="py-4 py-md-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="container-fluid bsb-hero-6 bsb-overlay p-3 rounded" style="--bsb-overlay-opacity: 0.5; --bsb-overlay-bg-color: var(--bs-light-rgb); background-image: url('223010585_470077960827263_7676708280246605941_n.jpg');">
                            <div class="row justify-content-md-center align-items-center">
                                <div class="col-12 col-md-11 col-xl-10">
                                    <h2 class="display-1 text-center text-md-start text-shadow-head fw-bold mb-4">Welcome to Presta</h2>
                                    <p class="lead text-center text-md-start text-shadow-body mb-5 d-flex justify-content-sm-center justify-content-md-start">
                                        <span class="col-12 col-sm-10 col-md-8 col-xxl-7">Where every squeak, every rattle, and every wobble finds its solution, ensuring your ride is always smooth and worry-free.</span>
                                    </p>
                                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center justify-content-md-start">
                                        <a href="#!" class="btn bsb-btn-2xl btn-outline-dark">Explore More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>