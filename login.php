<!DOCTYPE html>
<html>

<head>
    <title>Sign in</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Homepage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


    <style>
        html,
        body {
            min-height: 100%;

        }

        body,
        div,
        form,
        input,
        select,
        p {
            padding: 0;
            margin: 0;
            outline: none;
            font-family: Roboto, Arial, sans-serif;
            font-size: 14px;
            color: rgb(68, 17, 78);
            line-height: 22px;
        }

        .card {
            margin: auto;
            padding: auto;
            height: 21.5cm;
            width: 200cm;
            padding-bottom: 10em;

        }

        .btn {
            text-align: center;
            background-color: #513155;
            margin-left: 10cm !important;
            padding: auto;
        }

        .input-group {
            margin-left: 7cm !important;
        }
    </style>
</head>

<body style="background-color:#FAEBD7;"> 

<?php
session_start();
$db=mysqli_connect('localhost','root','','triplet');

if(isset($_POST['submit'])){
    $query = 'SELECT * FROM `users` WHERE email= "'. $_POST['email'].'" AND passwords= "'. $_POST['password'].'"';
    $run = mysqli_query($db,$query);
    
    if(mysqli_num_rows ($run) > 0){
        $row = mysqli_fetch_row($run);
        $_SESSION['username'] = $row[1]." ".$row[2];
        setcookie("username", $row[1]." ".$row[2] , time()+3600);
        ini_set('session.cookie_lifetime', 0);
        setcookie("email", $_POST['email'] , time()+3600);
        ini_set('session.cookie_lifetime', 0);
        header('location:index.php');
    }
    else{
        $query = 'SELECT * FROM `admins` WHERE email= "'. $_POST['email'].'" AND password="'. $_POST['password'].'"';
        $run = mysqli_query($db,$query);
        
        if(mysqli_num_rows ($run) > 0){
            $_SESSION['username']= $_POST['email']; 
            setcookie("username", $_POST['email'], time()+3600);
            ini_set('session.cookie_lifetime', 0);
            setcookie("email", $_POST['email'] , time()+3600);
        ini_set('session.cookie_lifetime', 0);
            header('location: user_states.php');
        }
        else{

        }
    }
}
?>

    <header>
        <!--Background image-->
        <style>
            header {
               
            }
        </style>
        <br> <br>
        <br> <br>

        <div class="card" style="width: 50rem; height: 15cm;">
            <div class="card-body">
                <div class="card-header">
                    <h3 style="text-align:center;">Sign In</h3>
                </div>
                <br>

                <div>
                    <form method="post" class="needs-validation" novalidate>
                    <?php
   $rand=rand();
   $_SESSION['rand']=$rand;
  ?>
 <input type="hidden" value="<?php echo $rand; ?>" name="randcheck" />
                        <div class="input-group form-group" style="width: 20em; height:0ex;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor"
                                class="bi bi-person-square" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path
                                    d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z" />
                            </svg>
                            <input type="email" for="validationCustom01" class="form-control" placeholder="email" name="email" style="height:2em;" required>
                            <div class="invalid-feedback">Please enter a valid email</div><br>
                        </div>
                        <br> <br>
                        <div class="input-group form-group" for="validationCustom01" style="width: 20em; height:2ex; margin-top:0.5cm ;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30.5" height="40.5" fill="currentColor"
                                class="bi bi-file-lock-fill" viewBox="0 0 16 16">
                                <path
                                    d="M7 6a1 1 0 0 1 2 0v1H7V6zM6 8.3c0-.042.02-.107.105-.175A.637.637 0 0 1 6.5 8h3a.64.64 0 0 1 .395.125c.085.068.105.133.105.175v2.4c0 .042-.02.107-.105.175A.637.637 0 0 1 9.5 11h-3a.637.637 0 0 1-.395-.125C6.02 10.807 6 10.742 6 10.7V8.3z" />
                                <path
                                    d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-2 6v1.076c.54.166 1 .597 1 1.224v2.4c0 .816-.781 1.3-1.5 1.3h-3c-.719 0-1.5-.484-1.5-1.3V8.3c0-.627.46-1.058 1-1.224V6a2 2 0 1 1 4 0z" />
                            </svg>
                            <input type="password" for="validationCustom01" class="form-control" placeholder="password" name="password"
                                style="height:1.8em; margin-top:1ch; margin-right:1ch;" required>
                                <div class="invalid-feedback">Please enter your password</div>
                        </div>
                        <br> <br>
                </div>
                <br>
                <div class="form-group" style=" margin-right:30px;">
                    <input type="submit" value="submit" name="submit" class="btn float-right login_btn" style="color: aliceblue;">
                </div>
                </form>
            </div>
            <div class="card-footer" style="color: rgb(0, 0, 0);">
                <div class="d-flex justify-content-center links">
                    Don't have an account?<a href="signup.php">Sign Up</a>
                </div>
            </div>

        </div>

        </div>
        </div>
        <script type="">
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function(){
   'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
      form.classList.add('was-validated') ,(false)
      })
})
})

</script>

</body>

</html>