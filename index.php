<?php

 session_start();

?>

<!DOCTYPE html>
<html lang='en'>

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
                <a href="index.php" class="navbar-brand">
                    <img class="img-fluid" src="img/logos.jpg" alt="Logo">
                </a>
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                    <a href='index.php' class='nav-item nav-link active'>Home</a>
                         <?php
                        
                                if (isset($_SESSION['phonenumber'])) {
                                    
                                    $number=$_SESSION['phonenumber']; 
                                    echo"
                        <a href='store.php' class='nav-item nav-link'>Store</a>
                        <div class='nav-item dropdown'>
                            <a href='#' class='nav-link dropdown-toggle' data-bs-toggle='dropdown'>Account</a>
                            <div class='dropdown-menu bg-light rounded-0 m-0'>
                                <a href='myprofile.php?ph=$number' class='dropdown-item'>My Profile</a>
                                <a href='orders.php' class='dropdown-item'>My Order</a>
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
    <!-- Navbar End -->


                           
                              
    <!-- Carousel Start -->
    <div class='container-fluid px-0 mb-5'>
        <div id='header-carousel' class='carousel slide carousel-fade' data-bs-ride='carousel'>
            <div class='carousel-inner'>
                <div class='carousel-item active'>
                    <img class='w-100' src='img/carousel-1.jpg' alt='Image'>
                    <div class='carousel-caption'>
                        <div class='container'>
                            <div class='row justify-content-center'>
                                <div class='col-lg-7 text-center'>
                                    <p class='fs-4 text-white animated zoomIn'>Welcome to <strong class='text-dark'>Shardai nursery</strong></p>
                                    <h1 class='display-1 text-dark mb-4 animated zoomIn'>EACH one <br>TEACH one <br>HOW TO PLANT one</h1>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='carousel-item'>
                    <img class='w-100' src='img/carousel-2.jpg' alt='Image'>
                    <div class='carousel-caption'>
                        <div class='container'>
                            <div class='row justify-content-center'>
                                <div class='col-lg-7 text-center'>
                                    <p class='fs-4 text-white animated zoomIn'>Welcome to <strong class='text-dark'>Shardai nursery</strong></p>
                                    <h1 class='display-1 text-dark mb-4 animated zoomIn'>Tress<br>Are<p class=' text-white animated zoomIn'> Green </p> Gold</h1>
                                   
                                </div>  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class='carousel-control-prev' type='button' data-bs-target='#header-carousel'
                data-bs-slide='prev'>
                <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                <span class='visually-hidden'>Previous</span>
            </button>
            <button class='carousel-control-next' type='button' data-bs-target='#header-carousel'
                data-bs-slide='next'>
                <span class='carousel-control-next-icon' aria-hidden='true'></span>
                <span class='visually-hidden'>Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class='container-xxl py-5'>
        <div class='container'>
            <div class='row g-5'>
                <div class='col-lg-6'>
                    <div class='row g-3'>
                        <div class='col-6 text-end'>
                            <img class='img-fluid bg-white w-100 mb-3 wow fadeIn' data-wow-delay='0.1s' src='img/about6.jpg' alt=''>
                            <img class='img-fluid bg-white w-50 wow fadeIn' data-wow-delay='0.2s' src='img/about2.jpg' alt=''>
                        </div>
                        <div class='col-6'>
                            <img class='img-fluid bg-white w-50 mb-3 wow fadeIn' data-wow-delay='0.3s' src='img/about1.jpg' alt=''>
                            <img class='img-fluid bg-white w-100 wow fadeIn' data-wow-delay='0.4s' src='img/about3.jpg' alt=''>
                        </div>
                    </div>
                </div>
                <div class='col-lg-6 wow fadeIn' data-wow-delay='0.5s'>
                    <div class='section-title'>
                        <p class='fs-5 fw-medium fst-italic text-primary'>About Us</p>
                        <h1 class='display-6'>'The Best Plant Seller Awrad 2022' Winner...</h1>
                    </div>
                    <div class='row g-3 mb-4'>
                        <div class='col-sm-4'>
                            <img class='img-fluid bg-white w-100' src='img/about5.jpg' alt=''>
                        </div>
                        <div class='col-sm-8'>
                            <h5>Plant Cultivation and Sale</h5>
                            <p class='mb-0'>Plant nurseries primarily focus on cultivating a variety of plants, from seedlings to mature specimens.</p>
                        </div>
                    </div>
                    <div class='border-top mb-4'></div>
                    <div class='row g-3'>
                        <div class='col-sm-8'>
                            <h5>Providing Gardening Resources</h5>
                            <p class='mb-0'>n addition to selling plants, many plant nurseries also offer a range of gardening resources and supplies.</p>
                        </div>
                        <div class='col-sm-4'>
                            <img class='img-fluid bg-white w-100' src='img/about4.jpg' alt=''>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Products Start -->
    <div class='container-fluid product py-5 my-5'>
        <div class='container py-5'>
            <div class='section-title text-center mx-auto wow fadeInUp' data-wow-delay='0.1s' style='max-width: 500px;'>
                <p class='fs-5 fw-medium fst-italic text-primary'>Impotants of plants</p>
                <h1 class='display-6'>Plants has a complex positive effect on the body</h1>
            </div>
            <div class='owl-carousel product-carousel wow fadeInUp' data-wow-delay='0.5s'>
                <a herf='' class='d-block product-item rounded'>
                    <img src='img/product1.jpg' alt=''>
                    <div class='bg-white shadow-sm text-center p-4 position-relative mt-n5 mx-4'>
                        <h4 class='text-primary'>Flowering plants</h4>
                        <span class='text-body'>These vibrant blooms bring joy and color to our lives.</span>
                    </div>
                </a>
                <a herf='' class='d-block product-item rounded'>
                    <img src='img/product2.jpg' alt=''>
                    <div class='bg-white shadow-sm text-center p-4 position-relative mt-n5 mx-4'>
                        <h4 class='text-primary'>Trees</h4>
                        <span class='text-body'>Trees provide shade, clean air, and habitat for countless species. </span>
                    </div>
                </a>
                <a herf='' class='d-block product-item rounded'>
                    <img src='img/product3.jpg' alt=''>
                    <div class='bg-white shadow-sm text-center p-4 position-relative mt-n5 mx-4'>
                        <h4 class='text-primary'>Succulents</h4>
                        <span class='text-body'>These drought-tolerant plants are easy to care for and can add a touch of greenery to any space.</span>
                    </div>
                </a>
                <a herf='' class='d-block product-item rounded'>
                    <img src='img/product4.jpg' alt=''>
                    <div class='bg-white shadow-sm text-center p-4 position-relative mt-n5 mx-4'>
                        <h4 class='text-primary'>Herbs</h4>
                        <span class='text-body'>Herbs are versatile plants that can be used for cooking, medicine, and aromatherapy.</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- Products End -->


    <!-- Article Start -->
    <div class='container-xxl py-5'>
        <div class='container'>
            <div class='row g-5'>
                <div class='col-lg-5 wow fadeIn' data-wow-delay='0.1s'>
                    <img class='img-fluid' src='img/articlee.jpg' alt=''>
                </div>
                <div class='col-lg-6 wow fadeIn' data-wow-delay='0.5s'>
                    <div class='section-title'>
                        <p class='fs-5 fw-medium fst-italic text-primary'>Featured Acticle</p>
                        <h1 class='display-6'>A Nutritional Powerhouse</h1>
                    </div>
                    <p class='mb-4'>Moringa leaves are packed with essential nutrients, making them a nutritional powerhouse. They are rich in vitamins A, B, and C, as well as minerals like calcium, iron, and potassium. Additionally, moringa is a great source of protein and fiber.</p>
                    <p class='mb-4'>Moringa oleifera is a remarkable plant with a wide range of potential health benefits. Its high nutritional content and versatility make it a valuable addition to a healthy diet. If you're looking for a natural way to boost your nutrient intake and support your overall well-being, consider incorporating moringa into your daily routine..</p>
                 
                </div>
            </div>
        </div>
    </div>
    <!-- Article End -->


    <!-- Video Start -->
    <div class='container-fluid video my-5'>
        <div class='container'>
            <div class='row g-0'>
                <div class='col-lg-6 py-5 wow fadeIn' data-wow-delay='0.1s'>
                    <div class='py-5'>
                        <h1 class='display-6 mb-4'>How to Plant Trees</span></h1>
                        <h5 class='fw-normal lh-base fst-italic text-white mb-5'>This video tell how to plant tress in accurate for the good health of tree..</h5>
                        <div class='row g-4 mb-5'>
                            <div class='col-sm-6'>
                                <div class='d-flex align-items-center'>
                                    <div class='flex-shrink-0 btn-lg-square bg-white text-primary rounded-circle me-3'>
                                        <i class='fa fa-check'></i>
                                    </div>
                                    <span class='text-dark'>Oak tree</span>
                                </div>
                            </div>
                            <div class='col-sm-6'>
                                <div class='d-flex align-items-center'>
                                    <div class='flex-shrink-0 btn-lg-square bg-white text-primary rounded-circle me-3'>
                                        <i class='fa fa-check'></i>
                                    </div>
                                    <span class='text-dark'>Pine tree</span>
                                </div>
                            </div>
                            <div class='col-sm-6'>
                                <div class='d-flex align-items-center'>
                                    <div class='flex-shrink-0 btn-lg-square bg-white text-primary rounded-circle me-3'>
                                        <i class='fa fa-check'></i>
                                    </div>
                                    <span class='text-dark'>Apple tree</span>
                                </div>
                            </div>
                            <div class='col-sm-6'>
                                <div class='d-flex align-items-center'>
                                    <div class='flex-shrink-0 btn-lg-square bg-white text-primary rounded-circle me-3'>
                                        <i class='fa fa-check'></i>
                                    </div>
                                    <span class='text-dark'>Birch tree</span>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class='col-lg-6 wow fadeIn' data-wow-delay='0.5s'>
                    <div class='h-100 d-flex align-items-center justify-content-center' style='min-height: 300px;'>
                        <button type='button' class='btn-play' data-bs-toggle='modal'
                            data-src='https://www.youtube.com/embed/6LT3nE2KQWc' data-bs-target='#videoModal'>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video End -->


    <!-- Video Modal Start -->
    <div class='modal modal-video fade' id='videoModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
        <div class='modal-dialog'>
            <div class='modal-content rounded-0'>
                <div class='modal-header'>
                    <h3 class='modal-title' id='exampleModalLabel'>Youtube Video</h3>
                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                </div>
                <div class='modal-body'>
                    <!-- 16:9 aspect ratio -->
                    <div class='ratio ratio-16x9'>
                        <iframe class='embed-responsive-item' src=' id='video' allowfullscreen allowscriptaccess='always'
                            allow='autoplay'></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->






    <!-- Contact Start -->
    <div class='container-xxl contact py-5'>
        <div class='container'>
            <div class='section-title text-center mx-auto wow fadeInUp' data-wow-delay='0.1s' style='max-width: 500px;'>
                <p class='fs-5 fw-medium fst-italic text-primary'>Contact Us</p>
                <h1 class='display-6'>Contact us right now</h1>
            </div>
            <div class='row justify-content-center wow fadeInUp' data-wow-delay='0.1s'>
                <div class='col-lg-8'>
                    <p class='text-center mb-5'></p>   <div class='row g-5'>
                        <div class='col-md-4 text-center wow fadeInUp' data-wow-delay='0.3s'>
                            <div class='btn-square mx-auto mb-3'>
                                <i class='fa fa-envelope fa-2x text-white'></i>
                            </div>
                            <p class='mb-2'>shardainursery@gmail.com</p>
                            <p class='mb-0'>supportshardainursery@gmail.com</p>
                        </div>
                        <div class='col-md-4 text-center wow fadeInUp' data-wow-delay='0.4s'>
                            <div class='btn-square mx-auto mb-3'>
                                <i class='fa fa-phone fa-2x text-white'></i>
                            </div>
                            <p class='mb-2'>+91 7066276097</p>
                        
                        </div>
                        <div class='col-md-4 text-center wow fadeInUp' data-wow-delay='0.5s'>
                            <div class='btn-square mx-auto mb-3'>
                                <i class='fa fa-map-marker-alt fa-2x text-white'></i>
                            </div>
                            <p class='mb-2'>Shahunagar</p>
                            <p class='mb-0'>Urun Islampur,Maharastra</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Start -->


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
                    Designed By <a class='fw-medium' href=''>Pradnya Nangare/a> 
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

