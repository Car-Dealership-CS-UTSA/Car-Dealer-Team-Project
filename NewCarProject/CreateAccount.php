<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
    <style>
         h1 {
    text-align: center;
  }
             
  .passwordcheck{
     color: white;
     background-color: #333;
     padding: 5px 10px;
     text-align: center;
     text-decoration: none;
     display: inline-block;
     cursor: pointer;
   }
    </style>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <!-- Start of navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0d1b2a;">
        <div class="container-fluid" id="navbar">
            <!-- clickable home icon (start) -->
            <a class="navbar-brand" href="index.php"> <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                    fill="white" class="bi bi-car-front-fill" viewBox="0 0 16 16">
                    <path
                        d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679c.033.161.049.325.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.807.807 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2ZM6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2H6ZM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17 1.247 0 3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z" />
                </svg></a>
            <!-- clickable home icon (end) -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <?php
                    if(!isset($_SESSION['valid']) || !$_SESSION['valid']){
                        ?>
                    <li class="nav-item">
                        <a class="nav-link" href="CreateAccount.php">SIGN UP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="LogIn.php">LOG IN</a>
                    </li>
                    <?php
                    }
                    else{
                        ?>
                         <li class="nav-item">
                        <a class="nav-link" href="LogOut.php">LOG OUT</a>
                    </li>
                        <?php
                    }
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="catalog.php">CATALOG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">CONTACT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="nearby.php">SEARCH NEARBY</a>
                    </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ShoppingCart.php">CHECKOUT</a>
                </li>
                <?php
                    if(isset($_SESSION['valid']) && $_SESSION['valid'] && $_SESSION['username'] =='admin' && $_SESSION['password'] =='admin'){
                        ?>
                    <li class="nav-item">
                        <a class="nav-link" href="Admin.php">ADMIN</a>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- end navbar -->
    <h1>Create An Account</h1>
    <h6 align='center'> All questions with a * are required</h6>
    
    <form method="post" action="CreateAccountResponse.php">

      <div align='center'>
        Username <input class='username' type='text' name='username' placeholder='Username' required>*<br>
        Password <input class='password' type='password' name='psw' placeholder='Password' required>*<br>
        Retype Password <input class='password' type='password' name='repsw' placeholder='Retype Password' required>*
        <input type='button' onclick='check(this.form)' class='passwordcheck' value='Check Password'><br>
        Email <input class='email' type='text' placeholder='johndoe476@gmail.com' required><br>
        Phone Number <input class='number' type='text' placeholder='815-555-5035'><br>
        <input type='submit' name='submit' value='Create Account'>
      </div>
    </form>
    <script>
        function check(form){
    if(form.psw.value == form.repsw.value && form.repsw.value == form.psw.value){
      alert('Passwords Match')
    } else {
       alert('Passwords do not match')
    }
  }
    </script>
</body>

</html>