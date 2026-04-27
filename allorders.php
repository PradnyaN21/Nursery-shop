<?php

 session_start();
 include("db.php");
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
    <style>

    .table {
        width: 100%;
        border-collapse: collapse;
    
    }

    .table td,
    .table th {
        padding: 12px 15px;
        border: 0px solid #ddd;
        text-align: center;
        font-size: 16px;
    }

    .table th {
        background-color:#88B44E;
        color: white;
    }

    .table tbody tr:nth-child(even) {
        background-color: #f5f5f5;
        border-collapse: collapse;
    }

   

    @media only screen and (min-device-width:320px) and (max-device-width:480px) {

        .table thead {
            display: none;
        }

        .table,
        .table tbody,
        .table tr,
        .table td {
            display: block;
            width: 100%;
        }

        .table tr {
            margin-bottom: 15px;
        }

        .table td {
            text-align: right;
            padding-left: 50%;
            text-align: right;
            position: relative;
        }

        .table td::before {
            content: attr(data-label);
            position: absolute;
            left: 0;
            width: 50%;
            padding-left: 15px;
            font-size: 15px;
            font-weight: bold;
            text-align: left;
        }

    }
</style>
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
                        <a href='products.php' class='nav-item nav-link'>Products</a>
                  <a href='allmember.php' class='nav-item nav-link'>Customers</a>
                        <a href='allorders.php' class='nav-item nav-link active'>Orders</a>
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

    <br>

    <br>
    <!-- Navbar End -->
    <div class="order-buttons">
    <a href="allorders.php?id=0"><button class="order-btn new-orders">New Orders</button></a>
    <a href="allorders.php?id=1"><button class="order-btn confirm-orders">Confirm Orders</button></a>
    <a href="allorders.php?id=2"><button class="order-btn packed-orders">Packed Orders</button></a>
    <a href="allorders.php?id=3"><button class="order-btn shipped-orders">Shipped Orders</button></a>
    <a href="allorders.php?id=4"><button class="order-btn delivered-orders">Delivered Orders</button></a>
    <a href="allorders.php?id=5"><button class="order-btn canceled-orders">Canceled Orders</button></a>
</div>

<style>
    .order-buttons {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        justify-content: center;
        margin-top: 50px;
        padding: 10px;
    }

    .order-btn {
        border: none;
        padding: 12px 20px;
        font-size: 16px;
        color: white;
        border-radius: 8px;
        cursor: pointer;
        transition: 0.3s;
        width: 180px; /* Ensures consistent button width */
        text-align: center;
    }

    .new-orders { background: linear-gradient(to right, #ff7e5f, #feb47b); }
    .confirm-orders { background: linear-gradient(to right, #6a11cb, #2575fc); }
    .packed-orders { background: linear-gradient(to right, #00c6ff, #0072ff); }
    .shipped-orders { background: linear-gradient(to right, rgb(13, 73, 151), rgb(139, 26, 71)); }
    .delivered-orders { background: linear-gradient(to right, #43cea2, #185a9d); }
    .canceled-orders { background: linear-gradient(to right, #ff416c, #ff4b2b); }

    /* Hover Effects */
    .order-btn:hover {
        transform: scale(1.05);
        opacity: 0.9;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        .order-buttons {
            flex-direction: column;
            align-items: center;
        }

        .order-btn {
            width: 100%;
            max-width: 300px; /* Keeps buttons at a reasonable width on larger screens */
        }
    }
</style>

<br>

<?php
if(isset($_GET['id'])) {
                    global $con;
                    $sid = $_GET['id'];
               
                        echo"    <div class='container wow fadeIn'>
                        <div class='text-left'>
                            <h3 class='mt-2'>All Orders </h3>
                            <hr style='margin-top:-0.5%'>
                        </div>
                        <br>
                    
                        <table class='table'>
                            <thead>
                         
                             
                                <th>Order ID</th>
                                <th>Delivery Address</th>
                                <th>Payment mode</th>
                                <th>Transactions ID</th>
                                <th>Amount(Total)</th>
                                <th>Status</th>
                                        <th>Track Order</th>
                            </thead>
                    
                            <tbody>
                             
                        
                    ";
                        global $con;
                                if (isset($_SESSION['adminnumber'])) {
                                   
                                    $sel_price = "select * from orderlist where sid= $sid";
                                    $run_price = mysqli_query($con, $sel_price);
                                    $i = 0;
                    
                                    while ($p_price = mysqli_fetch_array($run_price)) {
                                         
                                        $total = $p_price['total'];
                                        $address = $p_price['address'];
                                        $delivery = $p_price['transno'];
                                        $payment = $p_price['payment'];
                                        $order_id= $p_price['order_id'];
                                        $status = $p_price['status'];
                    
                                    
                    
                                        
                                  echo"
                                                <tr>
                                                    
                                                  
                                                    <td data-label='Order ID'> $order_id </td>
                                                    <td data-label='Address'> $address </td>
                                                  
                                                    <td data-label='Payment mode'> $payment  </td>
                                                    <td data-label='Transaction ID'> $delivery </td>
                                                    <td data-label='Amount(Total)'> $total </td>
                                                    <td  data-label='Status'>  $status  </td> 
                                                                  <td  data-label='Track Order'> <a href='checkorderadmin.php?id=$order_id' class='btn btn-primary' style='color:white;'><b>Track Order</b></a> </td> 
                                                                 
                                                </tr>
                                                ";
                                         
                    
                                    }
                                    echo"
                                    </tbody>
                                    
                                    
                                    </table>
                                <br><br>
                               
                            </div>";
                               
                                        $i++;
                                    }
                                else {
                                    echo '<h1 align = center>Please Login First!</h1><br><br><hr>';
                                }
                    
                    
}
else{
    echo"    <div class='container wow fadeIn'>
    <div class='text-left'>
        <h3 class='mt-2'>All Orders </h3>
        <hr style='margin-top:-0.5%'>
    </div>
    <br>

    <table class='table'>
        <thead>
     
         
            <th>Order ID</th>
            <th>Delivery Address</th>
            <th>Payment mode</th>
            <th>Transactions ID</th>
            <th>Amount(Total)</th>
            <th>Status</th>
                    <th>Track Order</th>
        </thead>

        <tbody>
         
    
";
    global $con;
            if (isset($_SESSION['adminnumber'])) {
               
                $sel_price = 'select * from orderlist';
                $run_price = mysqli_query($con, $sel_price);
                $i = 0;

                while ($p_price = mysqli_fetch_array($run_price)) {
                     
                    $total = $p_price['total'];
                    $address = $p_price['address'];
                    $delivery = $p_price['transno'];
                    $payment = $p_price['payment'];
                    $order_id= $p_price['order_id'];
                    $status = $p_price['status'];

                

                    
              echo"
                            <tr>
                                
                              
                                <td data-label='Order ID'> $order_id </td>
                                <td data-label='Address'> $address </td>
                              
                                <td data-label='Payment mode'> $payment  </td>
                                <td data-label='Transaction ID'> $delivery </td>
                                <td data-label='Amount(Total)'> $total </td>
                                <td  data-label='Status'>  $status  </td> 
                                              <td  data-label='Track Order'> <a href='checkorderadmin.php?id=$order_id' class='btn btn-primary' style='color:white;'><b>Track Order</b></a> </td> 
                                             
                            </tr>
                            ";
                     

                }
                echo"
                </tbody>
                
                
                </table>
            <br><br>
           
        </div>";
           
                    $i++;
                }
            else {
                echo '<h1 align = center>Please Login First!</h1><br><br><hr>';
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

