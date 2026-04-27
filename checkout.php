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
     <?php
      $phonenumber = $_SESSION['phonenumber'];
    $get_addr = "select address from users where number=$phonenumber";
        $run = mysqli_query($con, $get_addr);
        while ($row = mysqli_fetch_array($run)) {
            $buyer_addr = $row['address'];
        }?>
<form action="" method="post">
       
        <div class="container mt-2">
            <div class="text" style=" margin-top:60px;">
                <br>
                <h3 style="font-family:Georgia, 'Times New Roman', Times, serif">Check your address </h3>
            </div>
            <hr style="margin-top:-0.9%">
            <form>
                <div class=" float-none float-sm-none float-md-none float-lg-right float-xl-rightcheckout mr-0 p-2 mb-5   " style="border-radius:5%;">
                    
                </div>
                <div class="input-group mt-2 hey ">
                    <div class="input-group-prepend "  style="margin-top:-4.5%">
                        <span class="input-group-text" style="background-color:#B3CC2E;color:white">Delivery Address</span>
                    </div>
                    <textarea class="form-control" name="address" style="margin-top:-4.5%" aria-label="With textarea"><?php echo"$buyer_addr ";?></textarea>
                </div>
        </div>
        <div class="container mt-5">
            <div class="text">
                <h3 style="font-family:Georgia, 'Times New Roman', Times, serif">Check your Items </h3>
            </div>
            <hr style="margin-top:-0.5%">
            <table class="table">
                <thead>
                    <th>Serial No</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>qty</th>
                    <th>Total (in Rs)</th>
                 
                    <!-- <th>Status</th> -->
                </thead>

<?php $i=0;?>

                <tbody>
                               <tr>
                                <?php $i++;?>
                                 
                <?php

$allproducts = array();
$allqty = array();
$allsubtotal = array();
$allphones = array();
                       
                       $ph=$_SESSION['phonenumber'];
                       $pro_price = "select * from cart where number=$ph";
                       $run_pro_price = mysqli_query($con, $pro_price);
                       while ($pp_price = mysqli_fetch_array($run_pro_price)) {
                           $number = $pp_price['number'];
                           $id= $pp_price['productid'];
                           $qty= $pp_price['quantity'];
                           $price= $pp_price['price'];
                        
                    
                           array_push($allproducts, $id);
                           array_push($allqty, $qty);
                       
                        
                           array_push($allsubtotal, $price);
                       
                           
                           $querya = "select * from plants where id = $id";
                           $runa_query = mysqli_query($con, $querya);
                       
                           while ($rows = mysqli_fetch_array($runa_query)) {
                               $name = $rows['name'];
                               $pprice = $rows['price'];
                               $stock=$rows['stock'];
                            }
                        
                       
                             
                                               echo"
                                            <td data-label='S.No' style='font-size:20px;'>$i</td>

                                               <td data-label='Item Name ' style='font-size:20px;'>$name</td>
                                                    <td data-label='Unit Price' style='font-size:20px;'>$pprice Rs</b></td>
                                                 <td data-label='Unit Price' style='font-size:20px;'>$qty</td>
                                               
                       
                                             
                   
                                     
                       
                                                <td data-label='Unit Price' style='font-size:20px;'>$price Rs</b></td>
                                            
                                            
                             
                                       </tbody>"; ?>

             <?php



             $i++;}
             ?>
            </table>
        </div>
<?php   
        if (isset($_SESSION['phonenumber'])) {
            $phno=$_SESSION['phonenumber'];
            $query_name1 = "SELECT COUNT(*) AS row_count
            FROM nursery.cart
            WHERE number= $phno";
             $run_query_name1 = mysqli_query($con, $query_name1);
             while ($names = mysqli_fetch_array($run_query_name1)) {
                $rowCount =  $names['row_count'];
            
                
             }} $query_name2 = "SELECT SUM(price) AS total_rate FROM cart
    WHERE  number='$ph'";
     $run_query_name2 = mysqli_query($con, $query_name2);
     while ($names2 = mysqli_fetch_array($run_query_name2)) {

        if($rowCount==0){
            $subtotal=0;
            }else{
                $subtotal=  $names2['total_rate'];
            
            }
       }
       
       
       
       $querya = "select * from adminpay";
       $runa_query = mysqli_query($con, $querya);
   
       while ($rows = mysqli_fetch_array($runa_query)) {
           $accname = $rows['holder'];
           $onlnumber = $rows['phnum'];
           $acc= $rows['accountno'];
        
           $ifc = $rows['ifc'];
           $online = $rows['online'];
        
        
        
        
        }
       
       ?>
       <center>
<h4 class="text-primary mb-4"> SUBTOTAL=<b style="color:black"><?php echo"$subtotal"?> Rs</b></h4></center>
        <div class="container mt-5">
            <div class="text">
                <h3 style="font-family:Georgia, 'Times New Roman', Times, serif">Select Your Payment Mode</h3>
            </div>
            <hr style="margin-top:-0.5%">

            <div class="payment">
                <h4>Payment Options :-
                    <input type="radio" aria-label="Radio button for following text input" name="payment" value="online" id="online" onchange="showPaymentDetails()" required>
                    <img src="img/paytm1.jpg" alt="paytm" class="paytm">
                    <input type="radio" aria-label="Radio button for following text input" name="payment" value="cod"  onchange="noshow()" required style="margin-left:40px;">
                    <img src="img/cash.jpg" alt="paytm" class="cod" style="height:37px">
                </h4>
            </div>
            <?php echo"
        <div  id='display' style='display:none;'> Acoount Holder: <input type='text' readonly value='$accname'> <br><br>Paytm No: <input type='text' readonly value='$onlnumber'> <br>OR<br>Account no: <input type='text' readonly value='$acc'><br><br> IFC code: <input type='text' readonly value='$ifc'><br> 
          Online QR: <img src='Admin/payment/$online'  height='200px;' width='300px;' style='margin-top:20px;'><br> </div>
          " ?> 
          <div style='margin-top:20px;'>           
        If you pay after delivery just write <b>COD</b> Otherwise Enter Transaction no here:<br><input type="text" name="transno">
        </div>  



        <br>
    <div style="margin-left:75%">
        <div class="float-none float-sm-none float-md-none float-lg-right float-xl-right placeorder">
           
                <a href="#"><button type="submit" name="submit" class="btn btn-lg  border border-dark " style="font-size:22px;color:black;background-color:#B3CC2E;">
                        Place Order
                        <i class="fas fa-thumbs-up"></i>
                    </button>
                </a>
            </div>


            <br> 
    <div class="float-none float-sm-none float-md-none float-lg-right float-xl-right goback ">
        <a href="cart.php"><button type="button" class="btn btn-lg  border border-dark  " style="font-size:22px;color:black;background-color:#B3CC2E;margin-left:-8%;">
                <i class="fas fa-arrow-left"></i> Go Back To Cart </button></a>
    </div>
    </div>


    </div>
    </form>

   
          
    <script>
        function showPaymentDetails() {
          
            
            var div = document.getElementById("display");
        
                div.style.display = "block"; // Unhide the div
              
        }
        function noshow(){
            var div = document.getElementById("display");
        
        div.style.display = "none";
        }
    </script>


        



   
    <br>
    <br>

</body>
</html>
<?php





if (isset($_POST['submit'])) {

    $address = $_POST['address'];
 
    $payment = $_POST['payment'];
    $transno= $_POST['transno'];
   
    $ph=$_SESSION['phonenumber'];


    $pro_price = "select * from orders";
$run_pro_price = mysqli_query($con, $pro_price);
while ($pp_price = mysqli_fetch_array($run_pro_price)) {
    $orderno = $pp_price['phonenumber'];}

$neword=$orderno+1;


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
            $pprice = $rows['price'];
            $stock=$rows['stock'];
           
         }
     
        }


   if($stock>=$qty){

    date_default_timezone_set('Asia/Kolkata');
    $currentDateTime = date(" j F, Y , h:ia");
    $count = 0;
    while ($count < $i-1) {

      
        $sess_phone_number=$_SESSION['phonenumber'];
        $query1 = "insert into orders (product_id,qty,address,delivery,phonenumber,total,payment,buyer_phonenumber,tarnsno,apdp,no,aaridate) values ('$allproducts[$count]','$allqty[$count]','$address','$allsubtotal[$count]','$neword','$subtotal','$payment','$sess_phone_number','$transno','waiting',0,' $currentDateTime')";
        $run = mysqli_query($con, $query1);
      
        $count = $count + 1;
        $query11 = "insert into orderlist(order_id,address,payment,transno,total,status,buyer_phonenumber,sid) values ('$neword','$address','$payment','$transno','$subtotal','waiting','$sess_phone_number',0)";
        $run = mysqli_query($con, $query11);
    
        $clear = "delete from cart where number = '$sess_phone_number'";
        $run = mysqli_query($con, $clear);
        $newset=$stock-$qty;
        $delete="update plants set stock=$newset where id='$id'";
        $run2 = mysqli_query($con, $delete);
        if ($run) {
          
    }

 echo "<script> alert('Order Placed Successfully');window.open('orders.php','_self')</script>";
    }
}
else{
    echo "
    <script> alert('Order is Not Placed '); window.open('cart.php','_self')</script>
  ";
}
}
?>