<?php
   include("db.php");
   session_start();

?>
<!DOCTYPE html>
<html lang="en">
<style>
        .card {
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-top: 10px;
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
    <meta charset="utf-8">
    <title>Shardai nursery</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plant Grid</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">


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
                    <a href='index.php' class='nav-item nav-link'>Home</a>
                         <?php
                        
                                if (isset($_SESSION['phonenumber'])) {
                                    
                                    $number=$_SESSION['phonenumber']; 
                                    echo"
                        <a href='store.php' class='nav-item nav-link active'>Store</a>
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


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-dark mb-4 animated slideInDown">Plant Store</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="store.php">Shop</a></li>
                    <li class="breadcrumb-item"><a href="store.php">Plants</a></li>
                    <li class="breadcrumb-item text-dark" aria-current="page">You Want</li>
                </ol>
            </nav>
        </div>
    </div>
    <center>
    <div style="width:60%;">
    <div class="position-relative w-100" >
    <form action="store.php" method="post">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" name="item" placeholder="Plant Name">
                      <button type="submit" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2" name="search">Search</button>
        </form>
<?php

                      if (isset($_POST['search'])) {

$item = $_POST['item'];

echo"<script> window.open('store.php?product=$item','_self')</script>";
}?>
                   </div>
                   </center>






    <?php
    
    
    if (isset($_GET['product'])) {
    global $con;

    $productis  = $_GET['product'];
    echo"    <div class='container-xxl py-5'>
    <div class='container'>
     
      
        <div class='row '>";
$pro_price = "select * from plants where name like '%$productis%'";
$run_pro_price = mysqli_query($con, $pro_price);
while ($pp_price = mysqli_fetch_array($run_pro_price)) {
    $id = $pp_price['id'];
    $name= $pp_price['name'];
    $desc= $pp_price['description'];
    $price= $pp_price['price'];
    $photo=$pp_price['img'];
    

    
$query_name1 = "SELECT COUNT(*) AS row_count
FROM nursery.review
WHERE id = '$id'";
$run_query_name1 = mysqli_query($con, $query_name1);
while ($names = mysqli_fetch_array($run_query_name1)) {
$rowCount =  $names['row_count'];


}

$query_name2 = "SELECT SUM(rating) AS total_rate FROM review
WHERE id = '$id'";
$run_query_name2 = mysqli_query($con, $query_name2);
while ($names2 = mysqli_fetch_array($run_query_name2)) {
$toCount2 =  $names2['total_rate'];


}
if($rowCount==0){
$r=0;
}else{
$r=$toCount2/$rowCount;

}

    echo"
    
                

    
<div class='col-lg-4 col-md-6 wow fadeInUp' data-wow-delay='0.1s' >
<div class='store-item position-relative text-center'>
<img class='img-fluid' src='Admin/product_images/$photo' style=' height:400px; width:400px;'>
<div class='p-4'>
<div class='text-center mb-3'>";
if($r==0){
    echo"Not Review Yet";
}
for($i=1;$i<=$r;$i++){
echo"
    <small class='fa fa-star text-primary'></small>";
}
    echo"
</div>
<h4 class='mb-3'>$id) $name </h4>


</div>
<div class='store-overlay'>
<a href='productinfo.php?id=$id' class='btn btn-primary rounded-pill py-2 px-4 m-2'>More Detail <i class='fa fa-arrow-right ms-2'></i></a>

</div>
</div>
</div>

";
}


echo"</div>
</div>
</div>";

}





  else if (isset($_GET['typ'])) {
    global $con;

    $product_type  = $_GET['typ'];

    echo"    <div class='container-xxl py-5'>
        <div class='container'>
         
          
            <div class='row '>";
    $pro_price = "select * from plants where type like '%,$product_type%'";
    $run_pro_price = mysqli_query($con, $pro_price);
    while ($pp_price = mysqli_fetch_array($run_pro_price)) {
        $id = $pp_price['id'];
        $name= $pp_price['name'];
        $desc= $pp_price['description'];
        $price= $pp_price['price'];
        $photo=$pp_price['img'];
        

        
$query_name1 = "SELECT COUNT(*) AS row_count
FROM nursery.review
WHERE id = '$id'";
$run_query_name1 = mysqli_query($con, $query_name1);
while ($names = mysqli_fetch_array($run_query_name1)) {
$rowCount =  $names['row_count'];


}

$query_name2 = "SELECT SUM(rating) AS total_rate FROM review
WHERE id = '$id'";
$run_query_name2 = mysqli_query($con, $query_name2);
while ($names2 = mysqli_fetch_array($run_query_name2)) {
$toCount2 =  $names2['total_rate'];


}
if($rowCount==0){
$r=0;
}else{
$r=$toCount2/$rowCount;

}

        echo"
        
                    

        
<div class='col-lg-4 col-md-6 wow fadeInUp' data-wow-delay='0.1s' >
<div class='store-item position-relative text-center'>
<img class='img-fluid' src='Admin/product_images/$photo' style=' height:400px; width:400px;'>
<div class='p-4'>
    <div class='text-center mb-3'>";
    if($r==0){
        echo"Not Review Yet";
    }
 for($i=1;$i<=$r;$i++){
    echo"
        <small class='fa fa-star text-primary'></small>";
 }
        echo"
    </div>
    <h4 class='mb-3'>$id) $name </h4>
   
   
</div>
<div class='store-overlay'>
    <a href='productinfo.php?id=$id' class='btn btn-primary rounded-pill py-2 px-4 m-2'>More Detail <i class='fa fa-arrow-right ms-2'></i></a>
    
</div>
</div>
</div>

";
   }


echo"</div>
</div>
</div>";

    }








else{
                                if (isset($_SESSION['phonenumber'])) {echo"

            <br>
   <center> <b><h2>SELECT TYPE</h2></b></center>
   <br>
                         <div class='container'>
        <div class='row'>


            <div class='col-md-3 col-sm-6'>
                <div class='card text-center' style='background-color: #F0F0F0;'>
                <a href='store.php?typ=Flower Plants'>
                    <div class='card-body'>
              
                    <img src='img/about1.jpg' class='card-img-top rounded' alt='Flower Plant'>
                   
                        <h5 class='card-title'>Flower Plants</h5>
                   </div>
                    </a>
                </div>
            </div>


            <div class='col-md-3 col-sm-6'>
                 <div class='card text-center' style='background-color: #F0F0F0;'>
                <a href='store.php?typ=Indoor Plants'>
                    <div class='card-body'>
                    <img src='img/indoor.jpg' class='card-img-top rounded' alt='Indoor Plant'>
                
                        <h5 class='card-title'>Indoor Plants</h5>
                   </div>
                    </a>
                </div>
            </div>
            <div class='col-md-3 col-sm-6'>
                 <div class='card text-center' style='background-color: #F0F0F0;'>
                <a href='store.php?typ=Croton Plants'>
                    <div class='card-body'>
                    <img src='img/croton.jpg' class='card-img-top rounded' alt='Croton Plant'>
                
                        <h5 class='card-title'>Croton Plants</h5>
                   </div>
                    </a>
                </div>
            </div>
            <div class='col-md-3 col-sm-6'>
                 <div class='card text-center' style='background-color: #F0F0F0;'>
                <a href='store.php?typ=Pot Plants Online'>
                    <div class='card-body'>
                    <img src='img/potplants.jpg' class='card-img-top rounded' alt='Pot Plant'>
                
                        <h5 class='card-title'>Pot Plants Online</h5>
                   </div>
                    </a>
                </div>
            </div>
            <div class='col-md-3 col-sm-6'>
                 <div class='card text-center' style='background-color: #F0F0F0;'>
                <a href='store.php?typ=Hanging Creeper Plants'>
                    <div class='card-body'>
                    <img src='img/hanging.jpg' class='card-img-top rounded' alt='Hanging Creeper'>
                
                        <h5 class='card-title'>Hanging Creeper Plants</h5>
                   </div>
                    </a>
                </div>
            </div>
            <div class='col-md-3 col-sm-6'>
                 <div class='card text-center' style='background-color: #F0F0F0;'>
                <a href='store.php?typ=Combo'>
                    <div class='card-body'>
                    <img src='img/cambo.jpg' class='card-img-top rounded' alt='Combo'>
                
                        <h5 class='card-title'>Combo</h5>
                   </div>
                    </a>
                </div>
            </div>
            <div class='col-md-3 col-sm-6'>
                 <div class='card text-center' style='background-color: #F0F0F0;'>
                <a href='store.php?typ=Fertilizer & Seeds'>
                    <div class='card-body'>
                    <img src='img/seed.jpg' class='card-img-top rounded' alt='Fertilizer & Seeds'>
                
                        <h5 class='card-title'>Fertilizer & Seeds</h5>
                   </div>
                    </a>
                </div>
            </div>
           
            <div class='col-md-3 col-sm-6'>
                 <div class='card text-center' style='background-color: #F0F0F0;'>
                <a href='store.php?typ=Fruit And Tree'>
                    <div class='card-body'>
                    <img src='img/fruits.jpg' class='card-img-top rounded' alt='Fruits Plants'>
                
                        <h5 class='card-title'>Fruit And Tree</h5>
                   </div>
                    </a>
                </div>
            </div>
            <div class='col-md-3 col-sm-6'>
                 <div class='card text-center' style='background-color: #F0F0F0;'>
                <a href='store.php?typ=Planters'>
                    <div class='card-body'>
                    <img src='img/planters.jpg' class='card-img-top rounded' alt='Planters'>
                
                        <h5 class='card-title'>Planters</h5>
                   </div>
                    </a>
                </div>
            </div>
           
        </div>
    </div>

<br>
   <center> <b><h2>STORE</h2></b></center>
                        ";}
                        else{
                            echo"  <a href='login.php' class='nav-item nav-link'>Login Frist</a>";
                        }

 if (isset($_SESSION['phonenumber'])) {

    echo"    <div class='container-xxl py-5'>
        <div class='container'>
         
          
            <div class='row '>";
    $pro_price = "select * from plants";
                $run_pro_price = mysqli_query($con, $pro_price);
                while ($pp_price = mysqli_fetch_array($run_pro_price)) {
                    $id = $pp_price['id'];
                    $name= $pp_price['name'];
                    $desc= $pp_price['description'];
                    $price= $pp_price['price'];
                    $photo=$pp_price['img'];
                    

                    
    $query_name1 = "SELECT COUNT(*) AS row_count
    FROM nursery.review
    WHERE id = '$id'";
     $run_query_name1 = mysqli_query($con, $query_name1);
     while ($names = mysqli_fetch_array($run_query_name1)) {
        $rowCount =  $names['row_count'];
    
        
     }
    
     $query_name2 = "SELECT SUM(rating) AS total_rate FROM review
    WHERE id = '$id'";
     $run_query_name2 = mysqli_query($con, $query_name2);
     while ($names2 = mysqli_fetch_array($run_query_name2)) {
        $toCount2 =  $names2['total_rate'];
        
        
     }
    if($rowCount==0){
    $r=0;
    }else{
     $r=$toCount2/$rowCount;
    
    }

                    echo"
                    
    <div class='col-lg-4 col-md-6 wow fadeInUp' data-wow-delay='0.1s' >
        <div class='store-item position-relative text-center'>
            <img class='img-fluid' src='Admin/product_images/$photo' style=' height:400px; width:400px;'>
            <div class='p-4'>
                <div class='text-center mb-3'>";
                if($r==0){
                    echo"Not Review Yet";
                }
             for($i=1;$i<=$r;$i++){
                echo"
                    <small class='fa fa-star text-primary'></small>";
             }
                    echo"
                </div>
                <h4 class='mb-3'>$id) $name</h4>
               
               
            </div>
            <div class='store-overlay'>
                <a href='productinfo.php?id=$id' class='btn btn-primary rounded-pill py-2 px-4 m-2'>More Detail <i class='fa fa-arrow-right ms-2'></i></a>
                
 </div>
</div>
</div>

";
               } }
               else{
                echo"Login First!!!!!!!!!!";
               }
            }?>
                </div>
   
    
  
        </div>
    </div>
    <!-- Store End -->
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
    <a href="#" class="btn btn-lg btn-primary btn-lg rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


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