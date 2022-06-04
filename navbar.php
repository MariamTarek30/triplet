<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Register</title>
</head>
<style>
    body{
        font-size: 20px
    }
        .btn {
            background-color: #302961 !important;
            border: 1px solid #302961;

        }
        .btn:hover{
            border: 1px solid #ef6603;
        }
        .btn-primary{
      margin-left: 0.5cm;
     }


</style>

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>

        <?php
?>
   <!--Nav bar-->
   <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="images/logo.jpeg" alt="TripleT" width="70" height="60" style="border-radius:70px;">
            </a>
        </div>
        <div class="container-fluid ">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Babysitting</a></li>
              <li><a class="dropdown-item" href="#">Elder people</a></li>
              <li><a class="dropdown-item" href="#"> Alzheimer</a></li>
              <li><a class="dropdown-item" href="#">Disabilities</a></li>
              <li><a class="dropdown-item" href="#">Addiction</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a></li>
                    
          <?php
        
        if(isset($_COOKIE["username"])){
            echo '<script>console.log("Username found")</script>';
            echo  '<span class="navbar-text">Welcome '.$_COOKIE["username"].'</span>';
            ?>
             <li class="nav-item">
             <!-- <input type="submit" class="button" name="insert" value="insert" /> -->
                        <a type="submit" id="sbutton" name="insert" class="btn btn-primary" href="clear.php" onclick="" role="button"><i
                                class="bi bi-person-plus-fill"></i><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                <path fill-rule="evenodd"
                                    d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
                            </svg>Logout</a>
                    </li>
                    <?php
        }
        else{
            echo '<script>console.log("Username not found")</script>';?>
            <!--Buttons in Navbar-->
            <li class="nav-item">
                        <a class="btn btn-primary" href="login.php" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z" />
                            </svg>Login</a>
                    </li>
                    &nbsp&nbsp
                    <li class="nav-item">
                        <a class="btn btn-primary" href="signup.php" role="button"></i><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                <path fill-rule="evenodd"
                                    d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
                            </svg>Signup</a>
                    </li>
                   
            <?php
        }
        ?>
                    
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<script>
    $('#sbutton').click(function() {
  $.ajax({
    type: "POST",
    url: "clear.php",
    data: { }
  }).done(function( msg ) {
    location.reload(true);
    // alert( "Data Saved: " + msg );
  });
});
    </script>
</body>

</html>
