<?php

 session_start();
 include("db.php");

?>

<!DOCTYPE html>
<html lang='en'>
<style>
        .card {
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-top: 50px;
    margin-bottom: 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    height: 150px;
}

.card-img-top {
    width: 100%;
    height: 100px;
    object-fit: cover;
}

.card-title {
    font-weight: bold;
}

.card-body {
    background-color: lightgreen; /* Light gray background color */
}
    </style>
<head>
    <meta charset='utf-8'>
    <title>Shardai nursery</title>
    <meta content='width=device-width, initial-scale=1.0' name='viewport'>
    <meta content=' 'name='keywords'>
    <meta content='' name='description'>

    <!-- Favicon -->
    <link href='img/favicon.ico' rel='icon'>

    <!-- Google Web Fonts -->
    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link href='https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playfair+Display:wght@700;900&display=swap' rel='stylesheet'>

    <!-- Icon Font Stylesheet -->
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css' rel='stylesheet'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css' rel='stylesheet'>

    <!-- Libraries Stylesheet -->
    <link href='lib/animate/animate.min.css' rel='stylesheet'>
    <link href='lib/owlcarousel/assets/owl.carousel.min.css' rel='stylesheet'>

    <!-- Customized Bootstrap Stylesheet -->
    <link href='css/bootstrap.min.css' rel='stylesheet'>

    <!-- Template Stylesheet -->
    <link href='css/style.css' rel='stylesheet'>
</head>

<body>
    <!-- Spinner Start 
    <div id='spinner' class='show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center'>
        <div class='spinner-border text-primary' role='status' style='width: 3rem; height: 3rem;'></div>
    </div>-->
    <!-- Spinner End -->

    
    <!-- Navbar Start -->

    <div class="container-fluid bg-white sticky-top">
        <div class="container">
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
                        <a href='products.php' class='nav-item nav-link '>Products</a>
                  <a href='allmember.php' class='nav-item nav-link active'>Customers</a>
                        <a href='allorders.php' class='nav-item nav-link'>Orders</a>
                         <div class='nav-item dropdown'>
                            <a href='#' class='nav-link dropdown-toggle' data-bs-toggle='dropdown'>Account</a>
                          <div class='dropdown-menu bg-light rounded-0 m-0'>
                                
                               <a href='onlineacc.php' class='dropdown-item'>Online Payment</a>
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





    <!-- Video Start -->
    <div class='container-fluid video my-5'>
        <div class='container'>
            <div class='row g-0'>
            </div>
        </div></div>
            <div class='container'>
        <div class='row'>


           

<?php
    

    $query_namea = "select * from users";
    $run_query_namea = mysqli_query($con, $query_namea);
    while ($names = mysqli_fetch_array($run_query_namea)) {
        $name =$names['name'];
        $phone =$names['number'];
        $address =$names['address'];
               $dis=$names['dis'];
               $state=$names['state'];
             

             
               if (isset($_SESSION['adminnumber'])) {
               echo"   
               
          


            <div class='col-md-3 col-sm-6'>
                <div class='card text-center' style='background-color: #F0F0F0;'>
               
                    <div class='card-body'>
              
                  
                   
                        <h5 class='card-title'>$name</h5>
                         <h6 class='card-title'>$phone</h6>
                         <h6 class='card-title'>$address</h6>
                         <h6 class='card-title'>$dis,$state</h6>
                           <div class='text-right'> 
                            <a href='deleteadmin.php?cnum= $phone' id='Deletionlink' style=' display: inline-block;
              background-color: #20c997;
           
            height: 35px;
              width: 160px;
              color: #ffffff;
              text-align: center;
              border: 4px double #cccccc; /* add this line */
              border-radius: 10px; /* add this line */
              font-size: 20px; /* add this line */
            '>REMOVE</a>
                            </div>
                   </div>
                    </a>
                </div>
            </div>
          
                    <br><br><br>
               ";
              }else{echo"Not Admin";}}

?>
            </div>
        </div>
 
    <!-- Video End -->




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
    <a href='#' class='btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top'><i class='bi bi-arrow-up'></i></a>


    <!-- JavaScript Libraries -->
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js'></script>
    <script src='lib/wow/wow.min.js'></script>
    <script src='lib/easing/easing.min.js'></script>
    <script src='lib/waypoints/waypoints.min.js'></script>
    <script src='lib/owlcarousel/owl.carousel.min.js'></script>

    <!-- Template Javascript -->
    <script src='js/main.js'></script>
</body>

</html>

 


