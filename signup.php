<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Register.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Register</title>
    <style>
        .body{
            height:auto;
            weight:auto;
        }
        .invalid-feedback{
            margin-top:-18px !important;
        }
       
        </style>
</head>

<body style="background-color:#FAEBD7;">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<?php 
    session_start();
    $db = mysqli_connect ('localhost','root','','triplet');
        
    if(isset($_POST['submit']) )//&& $_POST['randcheck']==$_SESSION['rand']
        {
       $FirstName=mysqli_real_escape_string($db,$_POST['Fname']);
       echo '<script>console.log("' . $FirstName . '")</script>';
       $LastName=mysqli_real_escape_string($db,$_POST['Lname']);
       echo '<script>console.log("' . $LastName . '")</script>';
       $Birth=mysqli_real_escape_string($db,$_POST['birth']);
       echo '<script>console.log("' . $Birth . '")</script>';
       $Address=mysqli_real_escape_string($db,$_POST['adds']);
       echo '<script>console.log("' . $Address . '")</script>';
       $Country=mysqli_real_escape_string($db,$_POST['cont']);
       echo '<script>console.log("' . $Country . '")</script>';
        $Email=mysqli_real_escape_string($db,$_POST['em']);
        echo '<script>console.log("' . $Email . '")</script>';
        $password1=mysqli_real_escape_string($db,$_POST['psw1']);
        // The encryption hash of the password that will be stored in the database
        $hash = password_hash($password1, PASSWORD_DEFAULT);
        $password2=mysqli_real_escape_string($db,$_POST['psw2']);
        $Phonenumber=mysqli_real_escape_string($db,$_POST['phoneno']);
        // ob_start();
        // $check = getimagesize($_FILES["cover"]["tmp_name"]);
        // if($check !== false){
        //     $image = $_FILES['cover']['tmp_name'];
        //     $imgContent = addslashes(file_get_contents($image));
        // }
        // header("Content-type :image/jpeg");
        // ob_end_flush(); 
        //  $db=mysqli_connect('localhost','root','','steps');
        $sql="INSERT INTO users (fname,lname,email,passwords, confpass, phone,country,address,birthdate) VALUES ('$FirstName','$LastName','$Email','$password1','$password2','$Phonenumber','$Country','$Address','$Birth')";
        // $js_code =$sql;
        //      echo $js_code;
        //      echo '<script>console.log("' . $js_code . '")</script>';
        $run = mysqli_query($db,$sql);
        if($run){
            mysqli_close($db);
            echo '<script>console.log("Data submitted successfully")</script>';
            //$_SESSION['username']=$username;
        //$_SESSION['success']=" welcome you are logged in";
        setcookie("username", $FirstName." ".$LastName, time()+3600);
        // ini_set('session.cookie_lifetime', 0);
        setcookie("email", $_POST['em'] , time()+3600);
        // ini_set('session.cookie_lifetime', 0);
        header('location:login.php');
        
        // header('location:myprofile.php');
          }
         
         else{
             $error = mysqli_error($db);
             echo '<script>console.log("' . $error . '")</script>';
             echo '<script>console.log("' . strpos($error, "Duplicate") . '")</script>';
             if(strpos($error, "Duplicate entry") == 0){
                echo '<script>console.log("Here")</script>';
                echo "
                <script type=\"text/javascript\">
                alert('Email Already Used');
                </script>";    
             }
             
          }
        
        }
        
?>   
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>

<!-- NavBar -->


    <!-- <form > -->
<br> <br>
    <div class="container" >
		<div class="d-flex justify-content-center h-100">
			<div class="card" style="width: 12cm; height: 32cm;">
            <div class="card-header">
                    <h3 style="text-align:center;">Sign Up</h3>
                </div>
				<div class="card-body">
					<form method="post" enctype="multipart/form-data" class="needs-validation" novalidate >
            
						<div class="input-group form-group">
							<div class="input-group-prepend">
						
                            <!-- <span class="input-group-text"style="margin-bottom: 1cm; margin-top: 1cm; margin-right: 0.5cm;"><i class="fas fa-user"></i></span> -->
							</div>
							<input for="validationCustom01" type="text" class="form-control" placeholder="First name" name= "Fname" style="margin-bottom: 1cm; margin-top: 1cm;" required>
                            <div class="invalid-feedback">Please enter Your first name</div>
                        </div>
                        <div class="input-group form-group">
							<div class="input-group-prepend">
								<!-- <span class="input-group-text"style="margin-bottom: 1cm; margin-top: 1cm; margin-right: 0.5cm;"><i class="fas fa-user"></i></span> -->
							</div>
							<input for="validationCustom01" type="text" class="form-control" placeholder="Last name" name= "Lname" style="margin-bottom: 1cm; margin-top: 1cm;" required>
                            <div class="invalid-feedback">Please enter your last name</div>
                        </div>
                        <div class="input-group form-group">
							<div class="input-group-prepend">
							</div>
							<input type="email" class="form-control" placeholder="Email" name= "em" id="em" style="margin-bottom: 1cm; margin-top: 1cm;" required>
                            <div class="invalid-feedback" id="emailmsg">Please enter a valid email</div>
                        </div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
							</div>
							<input type="password"  class="form-control" placeholder="Password" name= "psw1" id="psw1" oninput="checkps1(this)" style="margin-bottom: 1cm; margin-top: 0.5cm;" required>
                            <div class="invalid-feedback" id="psw1msg">Please enter your password</div>
                            <script language='javascript' type='text/javascript'>
    function checkps1(input) {
        if (input.value.length > 20 ) {
            input.setCustomValidity('Passwords must contain at least six characters, including uppercase, lowercase letters and numbers.');
            document.getElementById("psw1msg").innerHTML = "Passwords cannot be more than 20 characters, including uppercase, lowercase letters and numbers.";
        } 
        else if (input.value.length < 6){
            input.setCustomValidity('Passwords must contain at least six characters, including uppercase, lowercase letters and numbers.');
            document.getElementById("psw1msg").innerHTML = "Passwords must contain at least six characters, including uppercase, lowercase letters and numbers.";
        }
        else {
            // input is valid -- reset the error message
            input.setCustomValidity('');
        }
    }
</script>
                        </div>
                        <div class="input-group form-group">
							<div class="input-group-prepend">
							</div>
							<input type="password" class="form-control" placeholder="Confirm password" name= "psw2" id="psw2" style="margin-bottom: 1cm; margin-top: 1cm;" oninput="check(this)" required>
                            <div class="invalid-feedback" id="psw2msg">Please confirm your password</div>
                            <script language='javascript' type='text/javascript'>
    function check(input) {
        if (input.value != document.getElementById('psw1').value) {
            input.setCustomValidity('Password Must be Matching.');
            document.getElementById("psw2msg").innerHTML = "Passwords do not match";
        } else {
            // input is valid -- reset the error message
            input.setCustomValidity('');
        }
    }
</script>
                        </div>
                        <div class="input-group form-group">
							<div class="input-group-prepend">
							</div>
							<input for="validationCustom01" type="datetime" class="form-control" placeholder="Birthdate" name= "birth" style="margin-bottom: 1cm; margin-top: 1cm;" required>
                            <div class="invalid-feedback">Please enter your birthdate</div>
                        </div>
                        <div class="input-group form-group">
							<div class="input-group-prepend">
							</div>
							<input for="validationCustom01" type="text" class="form-control" pattern="^(012|011|010|015)[0-9]{8}$" placeholder="Phone number" name= "phoneno" style="margin-bottom: 1cm; margin-top: 1cm;" required>
                            <div class="invalid-feedback">Please ensure entering a valid mobile number</div>
                        </div>
                        <div class="input-group form-group">
							<div class="input-group-prepend">
								<!-- <span class="input-group-text"style="margin-bottom: 1cm; margin-top: 1cm; margin-right: 0.5cm;"><i class="fas fa-user"></i></span> -->
							</div>
							<input for="validationCustom01" type="text" class="form-control" placeholder="Address" name= "adds" style="margin-bottom: 1cm; margin-top: 1cm;" required>
                            <div class="invalid-feedback">Please enter your address</div>
                        </div>
                        <div class="input-group form-group">
							<div class="input-group-prepend">
								<!-- <span class="input-group-text"style="margin-bottom: 1cm; margin-top: 1cm; margin-right: 0.5cm;"><i class="fas fa-user"></i></span> -->
							</div>
							<input for="validationCustom01" type="text" class="form-control" placeholder="Country" name= "cont" style="margin-bottom: 1cm; margin-top: 1cm;" required>
                            <div class="invalid-feedback">Please enter yout country</div>
                        </div>
                        <!-- <div class="input-group form-group"> -->
                        <!-- <label for="formFile" class="form-label"><b>Cover photo:</b></label> -->
                <!-- <input for="validationCustom01" class="form-control" type="file" id="formFile" name="cover"> -->
                <!-- <div class="invalid-feedback">Please enter a cover photo</div> -->
							<!-- <div class="input-group-prepend">
							</div> -->
							<!-- <input for="validationCustom01" type="text" class="form-control" placeholder="Image" name= "field" style="margin-bottom: 1cm; margin-top: 1cm;" > -->
                            <!-- <div class="invalid-feedback">Please enter a Field</div> -->
                        <!-- </div> -->
						<div class="col-12">
							<!-- <div class="form-check">
							  <input class="form-check-input" type="checkbox" id="gridCheck">
							  <label class="form-check-label" for="gridCheck">
								I agree all
                                    statements in <a href="#" class="term-service">Terms of service</a></label>
							  </label>

							</div>						 -->
						<div class="form-group">
							<!--<button type="submit" value="Login" class="btn float-right login_btn" style="color: blue;">LogIn</button>-->
							<button class="btn btn-primary" type="submit" value="submit" name="submit" style="margin-left: 4.5cm; margin-bottom: 1cm; margin-top: 0.5cm;">Register</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
    </form>

<script type="">
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
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
        form.classList.add('was-validated')
      }, false)
    })
})()

</script>

<script>
if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>

</html>
