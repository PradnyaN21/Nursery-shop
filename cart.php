
<?php
   include("db.php");
   session_start();

?>
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
                    <a href='index.php' class='nav-item nav-link '>Home</a>
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
                             <center> <a href='cart.php'  class='btn btn-sm p-0 active' style='margin-top:25px;color:#B3CC2E;'><i class='fa fa-shopping-cart ' aria-hidden='true'></i>
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
            <h1 class="display-2 text-dark mb-4 animated slideInDown">MY CART</h1>
            
        </div>
    </div>













    <div class="container">

        <?php



        if (isset($_SESSION['phonenumber'])) {
            $phno=$_SESSION['phonenumber'];
            $query_name1 = "SELECT COUNT(*) AS row_count
            FROM nursery.cart
            WHERE number= $phno";
             $run_query_name1 = mysqli_query($con, $query_name1);
             while ($names = mysqli_fetch_array($run_query_name1)) {
                $rowCount =  $names['row_count'];
            
                
             }
            
            
            echo   "<div class='text-left'>
                        <h3>Your Items :- $rowCount Items</h3>
                        <hr>";
        }
        ?>

<table class='table'>
    <thead>
        <th>S.No</th>
        <th>Item Name</th>
        <th>Unit Price </th>
        <th style='width:20%;'><center>Quantity</center></th>
        <th>Total</th>
        <th>Delete</th>
       
    </thead>
<?php $i=0;?>

    <tbody>
                               <tr>
                                <?php $i++;?>


                <!-- <td class='tdy' data-label='quantity'><a style='color:black;margin-right:12px;' href='MinusQty.php?id=<?php echo 'yes'; ?>'><label class='add ladd'><i style='padding: 4px;' class=' icon left  fas fa-minus'>
                            </label></a></i>
                        <input type='number' oninput='this.value = Math.abs(this.value)' min='1' value='' name='qty' style='width:40px; '><a style='color:black;margin-left:4px;' href='AddQty.php?id=<?php echo 'yes'; ?>'><label class='add radd'>
                                <i style='padding: 4px;' class='icon right  fas fa-plus'></label></a></i></td>
                    </td> -->
                    <?php
                       
$ph=$_SESSION['phonenumber'];
$pro_price = "select * from cart where number=$ph";
$run_pro_price = mysqli_query($con, $pro_price);
while ($pp_price = mysqli_fetch_array($run_pro_price)) {
    $number = $pp_price['number'];
    $id= $pp_price['productid'];
    $qty= $pp_price['quantity'];
    $price= $pp_price['price'];
   


 


    
    $querya = "select * from plants where id = $id";
    $runa_query = mysqli_query($con, $querya);

    while ($rows = mysqli_fetch_array($runa_query)) {
        $name = $rows['name'];
        $pprice = $rows['price'];}
        
    echo"
  
            <td data-label='S.No' style='font-size:20px;'>$i</td>
                   
                        <td data-label='Item Name ' style='font-size:20px;'>$name</td>
                        <td data-label='Unit Price' style='font-size:20px;'>$pprice Rs</td>

                        <td data-label='Quantity p-0 ' style='padding-top:1.5%;padding-bottom:-2%'>
                       
                            <div class='d-flex justify-content-center ' style='width:90%;padding-left:10%;'>
                                <div class='input-group mb-3'>
                                    <div class='input-group-prepend'>
                                        <a href='AddQty.php?id=$id'>
                                            <button class='btn btn-outline-secondary' style=' background-color:#292b2c;' type='button' id='button-addon1'>
                                                <b style='color:goldenrod'><i class='fas fa-plus'></i></b>
                                            </button>
                                        </a>
                                    </div>
                                    <input type='' class='form-control' value='$qty' oninput='this.value = Math.abs(this.value)' min='1'  name='qty' placeholder=' aria-label='Example text with button addon' aria-describedby='button-addon1' readonly>
                                    <div class='input-group-append'>
                                        <a href='MinusQty.php?id=$id'>
                                            <button class='btn btn-outline-secondary' style=' background-color:#292b2c;' type='button' id='button-addon2'>
                                                <b style='color:goldenrod'><i class='fas fa-minus'></i></b>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </td>


              

                         <td data-label='Unit Price' style='font-size:20px;'>$price Rs</b></td>
                     
                        <td data-label='Delete' style='font-size:20px;'><a href='DeleteProductCart.php?id=$id' id='Deletionlink'><i class='far fa-times-circle'></i></a></td>
              
      
                </tbody>
         


"; $i++;     
}

?>

       
</table>
<?php    $query_name2 = "SELECT SUM(price) AS total_rate FROM cart
    WHERE  number='$ph'";
     $run_query_name2 = mysqli_query($con, $query_name2);
     while ($names2 = mysqli_fetch_array($run_query_name2)) {

        if($rowCount==0){
            $subtotal=0;
            }else{
                $subtotal=  $names2['total_rate'];
            
            }
       }?>
<h3 class="text-primary mb-4"> SUBTOTAL=<b style="color:black"><?php echo"$subtotal"?>Rs</b></h3>
        <a href='Checkout.php'>
                                <button type='button' class='btn btn-lg border border-dark d-flex mx-auto' style='font-size:22px;color:black;background-color:#B3CC2E;'>
                                    Checkout<i class='fas fa-arrow-right ml-2 mt-2 mb-1'></i>
                                </button>
                            </a>
    </div>

    </div>

<br>
    <div class="container">
        <div class="float-none float-sm-none float-md-none float-lg-left float-xl-left  emptycart">
            <a href="emptyCart.php">
                <button type="button" class="btn btn-lg btn-primary border border-dark " style="font-size:22px;color:black;background-color:#B3CC2E;">Empty Cart
                    <i class="fas fa-shopping-cart ml-1"></i></button>
            </a>
        </div>
        <!-- <div class="grandtotal  float-none float-sm-none float-md-none float-lg-right float-xl-right"></div><br> -->
        <br>
        <div class=" float-none float-sm-none float-md-none float-lg-right float-xl-rightcheckout mr-0 p-2 border border-dark  " style="border-radius:5%;">

           




          
        

        </div>


















  
        <br>
        <br>
        <div class=" float-none float-sm-none float-md-none float-lg-left float-xl-left continueshopping mt-5">
            <a href="store.php"><button type="button" class="btn btn-lg  border border-dark " style="font-size:22px;color:black;background-color:#B3CC2E;">Continue Shopping
                    <i class="fas fa-shopping-bag ml-1"></i></button></a>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>






    
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