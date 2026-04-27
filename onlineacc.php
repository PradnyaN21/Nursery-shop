<?php
include("db.php");



 session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../portal_files/bootstrap.min.css">

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
    <!-- Spinner Start 
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>-->
    <!-- Spinner End -->

    
    <!-- Navbar Start -->
   
    <div class='container-fluid bg-white sticky-top'>
    <div class='container'>
    <nav class="navbar navbar-expand-lg bg-white navbar-light py-2 py-lg-0">
                <a href="adminhome.php" class="navbar-brand">
                    <img class="img-fluid" src="img/logos.jpg" alt="Logo">
                </a>
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                    <a href='adminhome.php' class='nav-item nav-link '>Home</a>
                         <?php
                                if (isset($_SESSION['adminnumber'])) {echo"
                        <a href='products.php' class='nav-item nav-link'>Products</a>
                  <a href='allmember.php' class='nav-item nav-link'>Customers</a>
                        <a href='allorders.php' class='nav-item nav-link'>Orders</a>
                         <div class='nav-item dropdown'>
                            <a href='#' class='nav-link dropdown-toggle active' data-bs-toggle='dropdown' >Account</a>
                          <div class='dropdown-menu bg-light rounded-0 m-0'>
                                
                               <a href='onlineacc.php' class='dropdown-item active'>Online Payment</a>
                                <a href='logout.php' class='dropdown-item'>Log-Out</a>
                               
                            </div>
                          </div>

                    </div>
                    
                    <div class='border-start ps-4 d-none d-lg-block'>
                        
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
<!-- Navbar End -->

<?php


if (isset($_SESSION['adminnumber'])) {
    $pro_price = "select * from adminpay";
    $run_pro_price = mysqli_query($con, $pro_price);
    while ($pp_price = mysqli_fetch_array($run_pro_price)) {
       
        $number= $pp_price['phnum'];
        $acc= $pp_price['accountno'];
        $ifc= $pp_price['ifc'];
        $photo=$pp_price['online'];
        $name=$pp_price['holder'];
    }
    
    
    
    
    
    
    echo"
<!-- Testimonial Start -->
<div class='container-fluid py-5'>
    <div class='container'>
        <div class='section-title text-center mx-auto wow fadeInUp' data-wow-delay='0.1s' style='max-width: 500px;'>
            <p class='fs-5 fw-medium fst-italic text-primary'>Shardai nursery</p>
            <h1 class='display-6'>Payment Deatils</h1>
        </div>
        <div class='row '>
            <div class='col wow fadeInUp' data-wow-delay='0.1s'>
                    <form name='my-form' action='onlineacc.php' method='post' enctype='multipart/form-data'>
                    <div class='row g-3'>
               
                        <div class='col-md-6'>
                            <div class='form-floating'>
                                <h6 class='mb-4'>Name Of Account Holder:</h6>
                                <input type='text' class='form-control' id='name' name='holder' value='$name'placeholder='Your Name'>
                              
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div class='form-floating'>
                                <h6 class='mb-4'>Online Payment Mobile Number:</h6>
                                <input type='number' class='form-control' id='email' name='mobile' placeholder='Your Email' value='$number'>
                                
                            </div>
                        </div>
                       
                        <div class='col-md-6'>
                            <div class='form-floating'>
                                <h6 class='mb-4'>Account Number Of Bank:</h6>
                                <input type='number' class='form-control' id='email' name='accno' placeholder='Your Email' value='$acc'>
                                
                            </div>
                        </div>
<br>
                     
                        <div class='col-6'>
                            <div class='form-floating'>
                                <h6 class='mb-4'>Bank IFC code:</h6>
                               <input type='text' class='form-control' id='email' name='ifc' placeholder='Your Email' value='$ifc'>
                                
                            </div>
                        </div>


                       

                         
                                 
                    
                        <center>
                        <div class='col-12'>
                            <div class='form-floating'>
                                <h6 class='mb-4'>Insert Photos Of Payment Scanner:</h6>
                          
                              

                                <input id='permanent_address' type='file' name='product_image' accept='image' onchange='newphoto()'>
                            
<input type='text' class='form-control' id='myText' name='newpho' placeholder='Your Email' value='no' hidden>
                                  <img src='Admin/payment/$photo' class='d-flex mx-auto btn-dark image'style='margin-top: 20px;' height='250px;' width='340px;'>
                               <br>
                            </div>
                        </div>
                     <br>
                     <br>
                     
                        <div class='col-12'>
                            <button class='btn btn-primary rounded-pill py-3 px-5' type='submit' name='insert'>Insert</button>
                        </div>
                    </center>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>";}?>


<script>
    function newphoto(){
    

        document.getElementById("myText").value = "yes";

    }
</script> 








    <!-- Testimonial End -->

    <!-- Footer Start -->
    <div class='container-fluid bg-dark footer mt-5 py-5 wow fadeIn' data-wow-delay='0.1s'>
        <div class='container py-5'>
            <div class='row g-5'>
      
                <div class='col-lg-3 col-md-6'>
                  
                  </div>
                <div class='col-lg-3 col-md-6'>
                    <h4 class='text-primary mb-4'>Our Office</h4>
                    <p class='mb-2'><i class='fa fa-map-marker-alt text-primary me-3'></i>Shahunagar, Urun Islampur,Maharastra</p>
                    <p class='mb-2'><i class='fa fa-phone-alt text-primary me-3'></i>+919175112994</p>
                    <p class='mb-2'><i class='fa fa-envelope text-primary me-3'></i>shardainursery@gmail.com</p>
                    <div class='d-flex pt-3'>
                </div>
                </div>
              
                
              
                <div class='col-lg-3 col-md-6'>
                <h4 class='text-primary mb-4'>STORE OPEN</h4>
                    <p class='mb-1'>Monday - Friday</p>
                    <h6 class='text-light'>09:00 am - 07:00 pm</h6>
                    <p class='mb-1'>Saturday</p>
                    <h6 class='text-light'>09:00 am - 12:00 pm</h6>
                    <p class='mb-1'>Sunday</p>
                    <h6 class='text-light'>Closed</h6>
                    </div>
                    <div class='col-lg-3 col-md-6'>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class='container-fluid copyright py-4'>
        <div class='container'>
            <div class='row'>
                <div class='col-md-6 text-center text-md-start mb-3 mb-md-0'>
                    &copy; <a class='fw-medium' href='#'>shardainursery.shop</a>, All Right Reserved.
                </div>
                <div class='col-md-6 text-center text-md-end'>
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from 'https://htmlcodex.com/credit-removal'. Thank you for your support. ***/-->
                    Designed By <a class='fw-medium' href=''>WE 5</a> 
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


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
if (isset($_POST['insert'])) {    // when button is clicked

    // getting the text data from fields
 
    $newpho = $_POST['newpho'];

    if($newpho==='yes'){
       
    $accholder = $_POST['holder'];
 
    $accmobile= $_POST['mobile'];
  
    $accnum = $_POST['accno'];

    $accifc= $_POST['ifc'];



    // getting image
    $product_image = $_FILES['product_image']['name'];
    $product_image_tmp = $_FILES['product_image']['tmp_name'];  // for server


    $removeimg="Admin/payment/".$photo;
    unlink($removeimg);
  
        move_uploaded_file($product_image_tmp, "Admin/payment/$product_image");
     
     
    
        $insert_product = "update adminpay set phnum='$accmobile',accountno='$accnum',ifc='$accifc',holder='$accholder',online='$product_image'";

        $insert_query = mysqli_query($con, $insert_product);
 if ($insert_query) {
            echo "<script>alert('Payment Deatils Edited')</script>";
 echo "<script>window.open('onlineacc.php','_self')</script>";
        } else {
            echo "<script>alert('Error Uploading Data Please Check your Connections ')</script>";
        }
    }else{
        
        
        $accholder = $_POST['holder'];
 
        $accmobile= $_POST['mobile'];
      
        $accnum = $_POST['accno'];
    
        $accifc= $_POST['ifc'];
    
    
    
         
         
        
            $insert_product = "update adminpay set phnum='$accmobile',accountno='$accnum',ifc='$accifc',holder='$accholder'";
    
            $insert_query = mysqli_query($con, $insert_product);
     if ($insert_query) {
                echo "<script>alert('Payment Deatils Edited')</script>";
     echo "<script>window.open('onlineacc.php','_self')</script>";
            } else {
                echo "<script>alert('Error Uploading Data Please Check your Connections ')</script>";
            }
    }


    }
  
?>