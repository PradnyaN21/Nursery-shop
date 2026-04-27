<?php
include("db.php");
session_start()?>

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
    <div class="container-fluid bg-white sticky-top">
        <div class="container">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-2 py-lg-0">
                <a href="index.php" class="navbar-brand">
                    <img class="img-fluid" src="img/logos.jpg" alt="Logo">
                </a>
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                    <a href='index.php' class='nav-item nav-link '>Home</a>
                         <?php
                        
                                if (isset($_SESSION['phonenumber'])) {
                                    
                                    $number=$_SESSION['phonenumber']; 
                                    echo"
                        <a href='store.php' class='nav-item nav-link'>Store</a>
                        <div class='nav-item dropdown'>
                            <a href='#' class='nav-link dropdown-toggle active' data-bs-toggle='dropdown'>Account</a>
                            <div class='dropdown-menu bg-light rounded-0 m-0'>
                                <a href='myprofile.php?ph=$number' class='dropdown-item active'>My Profile</a>
                                <a href='orders.php' class='dropdown-item '>My Order</a>
                                <a href='logout.php' class='dropdown-item'>Log-Out</a>
                               
                            </div>
                        </div>
                        <a href='https://wa.me/919175112994'  class='nav-item nav-link'>Help</a>
                             <center> <a href='cart.php'  class='btn btn-sm p-0' style='margin-top:25px;'><i class='fa fa-shopping-cart' aria-hidden='true'></i>
                        </a></center>
                    </div>
                    
                   
                        ";}
                        else{
                            echo"  <a href='login.php' class='nav-item nav-link'>Login Frist</a>";
                        }
                       ?>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <?php
    

    if (isset($_GET['ph'])) {  
        global $con;
        $number = $_GET['ph'];
    
        if (isset($_SESSION['phonenumber'])) {
            $pro_price = "select * from users where number=$number";
                        $run_pro_price = mysqli_query($con, $pro_price);
                        while ($pp_price = mysqli_fetch_array($run_pro_price)) {
                           
                            $name= $pp_price['name'];
                            $add= $pp_price['address'];
                            $state= $pp_price['state'];
                            $dis=$pp_price['dis'];
                            $pass=$pp_price['password'];
                            $scode=$pp_price['scode'];

                        }

                    }else{echo"Login First!!!!!!!!!!!!!";}
    
    
    }


?>




    <!-- Products Start -->
    <div class='container-fluid product py-5'>
    <div class='container py-5'>
        <div class='section-title text-center mx-auto wow fadeInUp' data-wow-delay='0.1s' style='max-width: 500px;'>
        
            <h1 class='display-6'>My Profile</h1>
        </div>
        <center>
        <form name='my-form' action='signup.php' method='post' enctype='multipart/form-data'>
        <div class='col-md-6' >
                            <div class='form-floating'>
                            <h6 class='display-7'>Name:</h6>
                                <input type='text' readonly class='form-control' id='email' name='uname' value='<?php echo"$name"?>' placeholder='Enter PassWord Number' >
                                
                            </div>
                        </div>
    
                        <div class='col-md-6' style='margin-top:20px;'>
                        <div class='form-floating'>
                        <h6 class='display-7'>State:</h6>
                        <input type='text' readonly class='form-control' id='email' name='state' value="<?php echo"$state"?>" placeholder='Enter PassWord Number' >
                                 
                                </div>
                        </div>
                                <div class='col-md-6' style='margin-top:20px;'>
                                <div class='form-floating'>
                                <h6 class='display-7'>District:</h6>
                                <input type='text' readonly class='form-control' id='email' name='district'  value="<?php echo"$dis"?>" placeholder='Enter PassWord Number' >
                                
                                </div>
                                </div>
                        <div class='col-md-6' style='margin-top:20px;'>
                            <div class='form-floating'>
                            <h6 class='display-7'>Address:</h6>
                                <input type='text' readonly class='form-control' id='email' name='address' value="<?php echo"$add"?>" placeholder='Enter PassWord Number' >
                                
                            </div>
                        </div>
                        <div class='col-md-6' style='margin-top:20px;'>
                            <div class='form-floating'>
                            <h6 class='display-7'>Password:</h6>
                                <input type='text' readonly class='form-control' id='email' name='pass' value="<?php echo"$pass"?>" placeholder='Enter PassWord Number' >
                                
                            </div>
                        </div>

                        <div class='col-md-6' style='margin-top:20px;'>
                            <div class='form-floating'>
                            <h6 class='display-7'>Security Code(for forget password):</h6>
                                <input type='number' readonly class='form-control' id='email' name='scode' pattern='[0-9]{4}' value="<?php echo"$scode"?>" maxlength='4' placeholder='Enter PassWord Number'>
                                
                            </div>
                        </div>
                        <div class='col-md-6' style='margin-top:20px;'>
                            <div class='form-floating'>
                            <h6 class='display-7'>You Need To Edit Profile>></h6>
                            </div>
                        </div>
                        <div class='col-12' style='margin-top:20px;'>
                            <a href='editprofile.php?ph=<?php $no=$_SESSION['phonenumber']; echo"$no";?>' class='btn btn-primary rounded-pill py-3 px-5' type='submit' name='insertuser'>Edit Profile</a>
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