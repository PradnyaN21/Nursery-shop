<?php
session_start();


include("db.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Shardai nursery</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playfair+Display:wght@700;900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

    




    <!-- Products Start -->
    <div class="container-fluid product py-5">
        <div class="container py-5">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-primary">LOG-IN</p>
                <h1 class="display-6">LOG-IN & Enjoy..</h1>
            </div>
            <center>
            <form name="my-form" action="login.php" method="post" enctype="multipart/form-data">
            <div class="col-md-6">
                                <div class="form-floating">
                                    <h6 class="display-7">Phone Number:</h6>
                                    <div style="position: relative;">
                                    <input type="number" class="form-control" id="name" name="phonenumber" placeholder="Enter Phone Number">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6" style="margin-top:20px;">
    <div class="form-floating">
        <h6 class="display-7">Password:</h6>
        <div style="position: relative;">
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
            <button type="button" id="togglePassword" style="
                position: absolute;
                right: 10px;
                top: 50%;
                transform: translateY(-50%);
                background: none;
                border: none;
                cursor: pointer;
                font-size: 14px;
                color: #007bff;">
                Show
            </button>
        </div>
    </div>
</div>

<script>
    document.getElementById("togglePassword").addEventListener("click", function() {
        var passwordField = document.getElementById("password");
        if (passwordField.type === "password") {
            passwordField.type = "text";
            this.textContent = "Hide";
        } else {
            passwordField.type = "password";
            this.textContent = "Show";
        }
    });
</script>

                          
                            <div class="col-md-6" style="margin-top:20px;">
                                <div class="form-floating">
                                <h6 class="display-7">Don't have Account...! <a href="signup.php">Sign-Up</a> Or <a href="adminlog.php">admin</a></h6>
                                </div>
                            </div>

                            <div class="col-md-6" style="margin-top:20px;">
                                <div class="form-floating">
                                <h6 class="display-7" style="color:red;">Forgot Password... <a href="forgotpassword.php" style="color:blue;">Reset</a></h6>
                                </div>
                            </div>
                            <div class="col-12" style="margin-top:40px;">
                                <button class="btn btn-primary rounded-pill py-3 px-5" type="submit" name="insert">LOG-IN</button>
                            </div>
            </form>
                            </center>
        </div>
    </div>
    <!-- Products End -->






    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
<?php 

 if (isset($_POST['insert'])) { 
	$phonenumber = mysqli_real_escape_string($con, $_POST['phonenumber']);
	$password = mysqli_real_escape_string($con, $_POST['password']);

    $query = "select * from users where number = '$phonenumber' and password='$password'";
    echo $query;
	$run_query = mysqli_query($con, $query);
	$count_rows = mysqli_num_rows($run_query);
	if ($count_rows == 0) {
		echo "<script>alert('Please Enter Valid Details');</script>";
		echo "<script>window.open('login.php','_self')</script>";
	}
     
else{
    $_SESSION['phonenumber'] = $phonenumber;  // Set session
      
	echo "<script>window.open('index.php','_self')</script>";
    
}
  
 }
?>