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
            <h1 class="display-2 text-dark mb-4 animated slideInDown">Product Information</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                  
                    <li class="breadcrumb-item"><a href="store.php">Store</a></li>
                    <li class="breadcrumb-item text-dark" aria-current="page">Product Information</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->



    <?php
if (isset($_GET['id'])) {  
    global $con;
    $product_id  = $_GET['id'];

    $query_name1 = "SELECT COUNT(*) AS row_count
    FROM nursery.review
    WHERE id = '$product_id'";
     $run_query_name1 = mysqli_query($con, $query_name1);
     while ($names = mysqli_fetch_array($run_query_name1)) {
        $rowCount =  $names['row_count'];
    
        
     }
    
     $query_name2 = "SELECT SUM(rating) AS total_rate FROM review
    WHERE id = '$product_id'";
     $run_query_name2 = mysqli_query($con, $query_name2);
     while ($names2 = mysqli_fetch_array($run_query_name2)) {
        $toCount2 =  $names2['total_rate'];
        
        
     }
    if($rowCount==0){
    $rateinghai="Not";
    }else{
     $rateinghai=$toCount2/$rowCount;
    
    }




 if (isset($_SESSION['phonenumber'])) {
    $pro_price = "select * from plants where id=$product_id";
                $run_pro_price = mysqli_query($con, $pro_price);
                while ($pp_price = mysqli_fetch_array($run_pro_price)) {
                    $id = $pp_price['id'];
                    $name= $pp_price['name'];
                    $desc= $pp_price['description'];
                    $price= $pp_price['price'];
                    $photo=$pp_price['img'];
                    $type=$pp_price['type'];
                    $stock=$pp_price['stock'];
                    
                    echo"

    <div class='container'>
                    <div class='text-center'>
                        <br>
                        <h1 id='headings' class='font-weight-bold'>$id-$name</h1>
                    </div>
                    <br>


                    <div class='row'>
                        <div class='col-12 col-xl-4 col-lg-4 col-md-4 col-sm-12   imageblock border border-dark'> <img src='Admin/product_images/$photo' class='d-flex mx-auto btn-dark image'style='margin-top: 20px;' height='290px;' width='340px;'><br>
                            <b>
                                <div class='text-center'>
                                    <h2></h2>

                                    <br>
                                </div>
                            </b></div>

                        <div class='col-12 col-xl-4 col-lg-4 col-md-4 col-sm-12 block border border-dark'>
                            <div class='text-center mt-2 ''>
                            <br>
                                <br>
                                <div class='row'>
                                    <div class='col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 price'>
                                        <h5><b>Price : </b>$price rs/pic</h5>

                                    </div>
                                    <div class='col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 stock'>
                                        <h5><b>Stock : </b>$stock pics</h5>
                                    </div>
                               <br>
                                <div class='col-12 col-xl-12 col-lg-6 col-md-6 col-sm-12 stock'>
                            
                                <h5><b>Product Rating : </b>  $rateinghai/5</h5>
                            </div>
                                </div>
                                <br>
                                <form actions='' method='post'>
                                    <div class='text-center'>
                                       
                                    </div>
                                    <div class='row'>
                                   
                                        <div class='col-12 col-xl-12 col-lg-6 col-md-6 col-sm-12'> 
                                      
                                            <button name='cart' type='submit'  class='btn btn-primary border-secondary addtocart' style='color:black;margin-left:35px; margin-buttom:50px; background-color:#B3CC2E;'><b>Add to cart</b><i class='fa' style='font-size:17px; '>&#61562;</i></button>
                                        
                                            </div>
                                       
                                        <div class='col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12'></div>
                                    </div>
                                </form>
                             <br>
                               <div class='row text-center ml-4 mt-3'>
                                  
                                    <h4 style='padding-left:9px;'>Product Used As:</h4>
                                   <h5> $type</h5>
                                </div>

                            </div>
                        </div>
                        <div class='col-12 col-xl-4 col-lg-4 col-md-4 col-sm-12 text-white' style='background-color:#292b2c;'>
                            <div class='text-center farmerdetails mt-4 ' style='color:green'><b>
                                  
                            </div>
                            <div class='details mt-1 text-center'>
                                 <h4 style='color:green' class='text-center '>Have Some Query ?<br></h4>
                                <a href='https://wa.me/919175112994?text= $name' class='btn btn-primary border-secondary  chat' style='color:black;padding:2px; background-color:#B3CC2E;'><b>CHAT HERE ON WHATSAPP</b> </a>

                                <!-- <b> Address</b> : Lorem ipsum dolor, sit Eum, ad eaque earum voluptates nemo vero possimus, dolor aspernatur ea aut quisquam quas consequuntur distinctio! -->
                            </div>
                        </div>
                    </div>

                    <br><br>
                    <div class='  description mt-0'><b>
                            <h2 class='text-center font-weight-bold'>Description</h2>
                        </b></div>
                    <br>
                    <div class='texty' style='margin-top:0%; font-size:20px;'> $desc.</div>
                  

                    
                </div>
            
          
                <br>
          
                ";
            }
        }
    }else{echo"Login First!!!!!!!";}

 
        $queryaa = "select * from review where id=$product_id";
        $runa_query1 = mysqli_query($con, $queryaa);

        while ($rows = mysqli_fetch_array($runa_query1)) {
            $namec = $rows['name'];
            $rate = $rows['rating'];
            $comment = $rows['comment'];
            $date=$rows['date'];
        echo"
         
        
           
        <section>
        <div class='container'>
            <div class='row'>
                <div class='col-sm-5 col-md-6 col-12 pb-4'>
                <div class='  description mt-0'><b>
              
            </b></div>
                    <div class='comment mt-4 text-justify float-left' overflow: scroll;>
                       
                        <h4>$namec ( $rate/5)</h4>
                        <span>-$date</span>
                        <br>
                        <p>$comment</p>

                    </div>
                  
                </div>
               
            </div>
        </div>
 
        ";}  if (isset($_SESSION['phonenumber'])) {
        echo" 
   <div class='col-lg-4 col-md-5 col-sm-4 offset-md-1 offset-sm-1 col-12 mt-4'>
        <form name='my-form' method='post'>
                <div class='form-group'>
                    <h4>Leave a Review</h4>
                    <label for='message'>Message</label>
                    <textarea name='comment'  cols='30' rows='5' class='form-control' ></textarea>

                </div>
                 <div class='form-group'>
                    <h4>Rate</h4>
                    <label for='message'>Give Points out of 5</label>
                    <input type='number' name='rate' class='form-control' style='height: 50px; width: 70px;'>
                    
                </div>
                
                <div class='form-group'>
                 <br>   <button type='submit' id='post' name='post' class='btn btn-primary border-secondary  chat'>Post Comment <i class='fa fa-thumbs-up' aria-hidden='true'></i></button>
                </div>
            </form>
        </div>
        </section>
        <div>
        
        
        
        </div>

                
";}else{echo"Login First!!!!!!!";}


if (isset($_POST['cart'])) {

        $qty = 1;
    
    global $con;
    if (isset($_SESSION['phonenumber'])) {
        $sess_phone_number = $_SESSION['phonenumber'];

        $check_pro = "select * from cart where number = $sess_phone_number and productid='$product_id' ";

        $run_check = mysqli_query($con, $check_pro);

        if (mysqli_num_rows($run_check) > 0) {
            echo "<script>alert('Already in cart');</script>";
        } else {
            $subtotal = $price * $qty;
            $insert_pro = "insert into cart (productid,number,quantity,price) values ('$product_id','$sess_phone_number','$qty','$subtotal')";
            $run_insert_pro = mysqli_query($con, $insert_pro);
            echo "<script>alert('Added in cart'); </script>";
        }
    } else {
        echo "<script>window.alert('Please Login First!');</script>";
    }
}

if (isset($_POST['post'])) {
    $date=date("Y/m/d");
    $comment = mysqli_real_escape_string($con, $_POST['comment']);
    $rate = mysqli_real_escape_string($con, $_POST['rate']);
    $sessphonenumber = $_SESSION['phonenumber'];
$sql="select * from users where number = '$sessphonenumber'";
$run_query = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($run_query))
{
    $nameb = $row['name'];
        
    } 
    if($rate<6){
        $insert_pro = "insert into review (id,name,rating,comment,date,number) values ('$product_id','$nameb','$rate','$comment','$date','$sessphonenumber')";
        $run_insert_pro = mysqli_query($con, $insert_pro);
        
        echo "<script>
        
        alert('Comment Added');
        window.open('productinfo.php?id= $product_id','_self')
    
        </script>";
    }
    else{

        echo "<script>
     
        alert('rating points canot be above 5');
      
        </script>";
    }

  



}







?>


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