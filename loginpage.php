<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="icon" type="image/jpg" href="sl_z_072523_61700_05.jpg">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    .regform {
      width: 35%;
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
    <nav class="navbar navbar-expand-lg navbar-light container">
      <a class="navbar-brand text-light logo" href="index.php"><img class="w-100" src="sl_z_072523_61700_05.jpg" alt=""></a>
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
        </ul>
      </div>
    </nav>
  </div>


  <div class="center mt-2 p-4">
    <form class="regform bg-light text-white p-4" action="login.php" method="post">
      <div class="form-group">
        <h3 class="text-center ">Login or Sign Up</h3>
        <div class="form-group mt-2">
          <label for="femail">Email address</label>
          <input type="email" class="form-control" id="email" name="email" aria-describedby="" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
          <label for="fpassword">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary" name="submit">Login</button>
        <span>Or</span>
        <a class="btn btn-success" href="regform.php">Create a new Account</a>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>