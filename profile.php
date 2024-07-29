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
        .regform {
            width: 80%;
            border-radius: 20px;
            box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
            background-color: #141E46 !important;
        }

        .center {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
    </style>
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
            <a class="navbar-brand text-light logo" href="dashboard.php"><img class="w-100" src="sl_z_072523_61700_05.jpg" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse naiii text-center" id="navbarNavDropdown">
                <h3 class="text-light">Profile settings
                </h3>
            </div>
        </nav>
    </div>
    <div class="section">
        <div class="container center">
            <form class="regform bg-light text-white p-3 m-3" action="add.php" method="post">
            <h3 class="text-center">Your Information</h3>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" value="<?php echo $_SESSION["thename"]; ?>" name="name" aria-describedby=""  readonly>
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="text" class="form-control" id="name" value="<?php echo $_SESSION["theemail"]; ?>" name="name" aria-describedby=""  readonly>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <div class="d-flex">
                <input type="text" class="form-control w-75" id="name" value="<?php echo $_SESSION["thepassword"]; ?>" name="name" aria-describedby=""  readonly>
                <a href="edit.php" class="btn btn-danger">Change Password</a>
                </div>
                <br><a href="dashboard.php" class="btn btn-success">Cancel</a>
            </div>
            
            <br>
        </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>