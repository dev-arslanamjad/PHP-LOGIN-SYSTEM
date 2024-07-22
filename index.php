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
            top: 15px;
        }

        .logo {
            width: 4%;
        }

        .logo img {
            border-radius: 20%;
        }

        .loginbtn {
            position: absolute;
            right: 140px;
            top: 15px;
        }
    </style>
</head>

<body>
    <div class="section naveee">
        <nav class="navbar navbar-expand-lg navbar-light p-2  container">
            <a class="navbar-brand text-light logo" href="#"><img class="w-100" src="sl_z_072523_61700_05.jpg" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse naiii" id="navbarNavDropdown">
                <ul class="navbar-nav ">
                    <li class="nav-item active">
                        <a class="nav-link text-light" href="#"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#"></a>
                    </li>
                    <li class="nav-item">
                        <a href="loginpage.php" class="btn btn-primary loginbtn">Login</a>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="regform.php" class="btn btn-primary logoutbtn">Sign up</a>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container hero">

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>