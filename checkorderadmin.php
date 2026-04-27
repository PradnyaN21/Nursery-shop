<?php

 session_start();
 include("db.php");
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



    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <a href="https://icons8.com/icon/83325/roman-soldier"></a>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>



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

    <style>
    body {
        margin: 0;
        padding: 0px;
        font-family: sans-serif;
    }

    * {
        box-sizing: border-box;
    }

   

    .myfooter {
        background-color: #292b2c;

        color: goldenrod;
        margin-top: 15px;
    }

    .aligncenter {
        text-align: center;
    }

    a {
        color: goldenrod;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

 
    .mybtn {
        border-color: green;
        border-style: solid;
    }


    .right {
        display: flex;
    }

    .left {
        display: none;
    }

    .cart {
        /* margin-left:10px; */
        margin-right: -9px;
    }

    .profile {
        margin-right: 2px;

    }

    .login {
        margin-right: -2px;
        margin-top: 12px;
        display: none;
    }

    .searchbox {
        width: 60%;
    }

    .lists {
        display: inline-block;
    }

    .moblists {
        display: none;
    }

    .logins {
        text-align: center;
        margin-right: -30%;
        margin-left: 35%;
    }

    @media only screen and (min-device-width:320px) and (max-device-width:480px) {

   
  

        .right {
            display: none;
            background-color: #ff5500;
        }

        /* 
            .settings{
            margin-left:79%;
        } */
        .left {
            display: flex;
        }

        .moblogo {
            display: none;
        }

        .logins {
            text-align: center;
            margin-right: 35%;
            padding: 15px;
        }

        .searchbox {
            width: 95%;
            margin-right: 5%;
            margin-left: 0%;
        }

        .moblists {
            display: inline-block;
            text-align: center;
            width: 100%;
        }

        /* .pic{
        height:auto;
    } */

        /* .mobtext{
        display:none;
    }
    .destext{
        display:inline-block;
        width:90%;
        margin-left: 5%;
        margin-right: 5%;
    } */
    }

    
#tracking {
    background: #fff
}

.tracking-detail {
    padding: 3rem 0;
}

#tracking {
    margin-bottom: 1rem;
}

[class*='tracking-status-'] p {
    margin: 0;
    font-size: 1.1rem;
    color: #fff;
    text-transform: uppercase;
    text-align: center;
}

[class*='tracking-status-'] {
    padding: 1.6rem 0;
}

.tracking-list {
    border: 1px solid #e5e5e5;
}

.tracking-item {
    border-left: 4px solid #00ba0d;
    position: relative;
    padding: 2rem 1.5rem 0.5rem 2.5rem;
    font-size: 0.9rem;
    margin-left: 3rem;
    min-height: 5rem;
}

.tracking-item:last-child {
    padding-bottom: 4rem;
}

.tracking-item .tracking-date {
    margin-bottom: 0.5rem;
}

.tracking-item .tracking-date span {
    color: #888;
    font-size: 85%;
    padding-left: 0.4rem;
}

.tracking-item .tracking-content {
    padding: 0.5rem 0.8rem;
    background-color: #f4f4f4;
    border-radius: 0.5rem;
}

.tracking-item .tracking-content span {
    display: block;
    color: #767676;
    font-size: 13px;
}

.tracking-item .tracking-icon {
    position: absolute;
    left: -0.7rem;
    width: 1.1rem;
    height: 1.1rem;
    text-align: center;
    border-radius: 50%;
    font-size: 1.1rem;
    background-color: #fff;
    color: #fff;
}

.tracking-item-pending {
    border-left: 4px solid #d6d6d6;
    position: relative;
    padding: 2rem 1.5rem 0.5rem 2.5rem;
    font-size: 0.9rem;
    margin-left: 3rem;
    min-height: 5rem;
}

.tracking-item-pending:last-child {
    padding-bottom: 4rem;
}

.tracking-item-pending .tracking-date {
    margin-bottom: 0.5rem;
}

.tracking-item-pending .tracking-date span {
    color: #888;
    font-size: 85%;
    padding-left: 0.4rem;
}

.tracking-item-pending .tracking-content {
    padding: 0.5rem 0.8rem;
    background-color: #f4f4f4;
    border-radius: 0.5rem;
}

.tracking-item-pending .tracking-content span {
    display: block;
    color: #767676;
    font-size: 13px;
}

.tracking-item-pending .tracking-icon {
    line-height: 2.6rem;
    position: absolute;
    left: -0.7rem;
    width: 1.1rem;
    height: 1.1rem;
    text-align: center;
    border-radius: 50%;
    font-size: 1.1rem;
    color: #d6d6d6;
}

.tracking-item-pending .tracking-content {
    font-weight: 600;
    font-size: 17px;
}

.tracking-item .tracking-icon.status-current {
    width: 1.9rem;
    height: 1.9rem;
    left: -1.1rem;
}

.tracking-item .tracking-icon.status-intransit {
    color: #00ba0d;
    font-size: 0.6rem;
}

.tracking-item .tracking-icon.status-current {
    color: #00ba0d;
    font-size: 0.6rem;
}

@media (min-width: 992px) {
    .tracking-item {
        margin-left: 10rem;
    }

    .tracking-item .tracking-date {
        position: absolute;
        left: -10rem;
        width: 7.5rem;
        text-align: right;
    }

    .tracking-item .tracking-date span {
        display: block;
    }

    .tracking-item .tracking-content {
        padding: 0;
        background-color: transparent;
    }

    .tracking-item-pending {
        margin-left: 10rem;
    }

    .tracking-item-pending .tracking-date {
        position: absolute;
        left: -10rem;
        width: 7.5rem;
        text-align: right;
    }

    .tracking-item-pending .tracking-date span {
        display: block;
    }

    .tracking-item-pending .tracking-content {
        padding: 0;
        background-color: transparent;
    }
}

.tracking-item .tracking-content {
    font-weight: 600;
    font-size: 17px;
}

.blinker {
    border: 7px solid #e9f8ea;
    animation: blink 1s;
    animation-iteration-count: infinite;
}

@keyframes blink {
    50% {
        border-color: #fff;
    }
}



button, input[type="submit"], input[type="reset"] {
	background: none;
	color: inherit;
	border: none;
	padding: 0;
	font: inherit;
	cursor: pointer;
	outline: inherit;
   color:tomato ;

}
</style>
</head>

<body>

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
                    <a href='adminhome.php' class='nav-item nav-link'>Home</a>
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
<div class="container mt-5">
            <div class="text">
                <h3 style="font-family:Georgia, 'Times New Roman', Times, serif"> your Items List</h3>
            </div>
            <hr style="margin-top:-0.5%">
            <table class="table">
                <thead>
                    <th>Serial No</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>qty</th>
                 
                    <th>Product Deatils</th>
                 
                    <!-- <th>Status</th> -->
                </thead>

<?php $i=0;?>

                <tbody>
                               <tr>
                                <?php $i++;?>
                                 
                <?php
                  if (isset($_GET['id'])) {
                    global $con;
                    $proid = $_GET['id'];

$allproducts = array();
$allqty = array();
$allsubtotal = array();
$allphones = array();
                       
                    
                       $pro_price = "select * from orders where phonenumber=$proid";
                       $run_pro_price = mysqli_query($con, $pro_price);
                       while ($pp_price = mysqli_fetch_array($run_pro_price)) {
                           $number = $pp_price['buyer_phonenumber'];
                           $id= $pp_price['product_id'];
                           $qty= $pp_price['qty'];
                           $price= $pp_price['total'];
                        
                    
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
                                               
                       
                                             
                   
                                     
                       
                                            
                                            
                              <td  data-label='Track Order'> <a href='productdeatils.php?id=$id' class='btn btn-primary' style='color:white;'><b>View Deatils</b></a> </td> 
                                                 
                                       </tbody>"; ?>

             <?php



             $i++;}}
             ?>
            </table>
        </div>
    <div class='container'>  
        <div class='card-body text-center border' style='margin-top: 0px'>
     
				<div class='form-group row' >
					<div class='col-md-6'>
                        <div class='row'>
                            <div class='col-md-12' style='margin-top:35px;'>
                           
                                <span style='padding:15px;'>
    <?php
         if (isset($_GET['id'])) {
            global $con;
            $product_id11  = $_GET['id'];
            $query = "select * from orders where phonenumber = $product_id11";
            $run_query = mysqli_query($con, $query);
            echo "<br>";
            while ($rows = mysqli_fetch_array($run_query)) {


                $order_id= $rows['order_id'];

                $product_id = $rows['product_id'];
                $qty =$rows['qty'];
                $total = $rows['total'];
                $address =$rows['address'];
                $order = $rows['phonenumber'];
                $payment = $rows['payment'];
                $transno = $rows['tarnsno'];
            
                $number=$rows['buyer_phonenumber'];
                $status = $rows['apdp'];
           
                $no =  $rows['no'];
                $accdate=$rows['accedate'];
                $packegdate=$rows['packegdate'];
                $shipmedat=$rows['shipmedate'];
                $arridate=$rows['aaridate'];
               $devcon=$rows['delivadate'];

                                	




                                   $pro_price = "select * from plants where id='$product_id'";
                                   $run_pro_price = mysqli_query($con, $pro_price);
                                   while ($pp_price = mysqli_fetch_array($run_pro_price)) {
                                        $product_title = $pp_price['name'];
                                        $productimg = $pp_price['img'];
                                        $stock=$pp_price['stock'];
                  
                                        $query_name = "select * from users where number = $number";
                                        $run_query_name = mysqli_query($con, $query_name);
                                        while ($names = mysqli_fetch_array($run_query_name)) {
                                             $bname = $names['name'];}
                                            }}
                                       
    
                             
                                echo"
                                <span style='padding:15px;'>
                                <h4 id='full_name' class=''><b>Order by :  $bname</b></h4>
                            </span>

                                <span style='padding:15px;'>
                                    <h4 id='full_name' style='margin-left:-9%;'><b>  Total : $total rs</b></h4>
                                </span>

                                <span style='padding:15px;'>
                                <h4 id='full_name' class=''><b>Delivary at : $address</b></h4>
                            </span>
                                         
                            <span style='padding:15px;'>
      
                <h4 id='full_name' class=''><b>Payment: $payment , Transaction number :   $transno</b></h4>
                        </span>


                                <span style='padding:15px;'>
                                   <lable> <h4 id='sta' class=''><b > Status of Order : $status</b></h4></lable>
                                </span>
                            </div>
                          <center>    
        <button type='button' class='btn btn-primary' style='color:white;background:red;'  id='Deletionlin'  data-toggle='modal' data-target='#exampleModal'>Cancle Order</button>
  <br>
			<form name='my-form' method='post'>
      
        <div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLabel'>Cancel Order</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
     Did you want to cancel the order ??
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-success' data-dismiss='modal'>No</button>
        <button type='submit' class='btn btn-danger' name='cancel'>Yes</button>
      </div>
      </div>
      </div>
    </div>   </center></div>
					</div>
                    <div class='col-md-6 'style='background-color:#292b2c;'>
                        <div class='row'>
                              
                                <div class='col-md-12 '>
                                <span>
                                    <h4 style='color:goldenrod;' class='text-center'>Track Order<br></h4>
                                    </span></div>
                           
      <div class='col-md-12 col-lg-12'>
      <div id='tracking-pre'></div>
      <div id='tracking'>
        <div class='tracking-list'>

       <div  id='accpted1'>
          <div class='tracking-item' >
            <div class='tracking-icon status-intransit'>
              <svg class='svg-inline--fa fa-circle fa-w-16' aria-hidden='true' data-prefix='fas' data-icon='circle' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'   data-fa-i2svg=''>
                <path fill='currentColor' d='M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z'></path>
              </svg>
            </div>
            <div class='tracking-date'><img src='https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg' class='img-responsive' alt='order-placed' /></div>
            <div class='tracking-content'>Order Placed <span>  $arridate <br>  <input type='submit' style=' display: inline-block;
            background-color: #20c997;
       
            height: 35px;
            width: 160px;
            color: #ffffff;
            text-align: center;
            border: 4px double #cccccc; /* add this line */
            border-radius: 10px; /* add this line */
            font-size: 20px; /* add this line */
          ' name='confirm' value='Accpect Order' >         </span></div>
          </div>
</div>
       <div  id='accpted'>
          <div class='tracking-item-pending' >
            <div class='tracking-icon status-intransit' id='accpted2'>
              <svg class='svg-inline--fa fa-circle fa-w-16' aria-hidden='true' data-prefix='fas' data-icon='circle' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'   data-fa-i2svg=''>
                <path fill='currentColor' d='M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z'></path>
              </svg>
            </div>
            <div class='tracking-date'><img src='https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg' class='img-responsive' alt='order-placed' /></div>
            <div class='tracking-content'>Order Confirmed   <span> <br>  
            </span></div>
          </div>
</div>
<div id='accpted3'>
          <div class='tracking-item-pending'>
            <div class='tracking-icon status-intransit'>
              <svg class='svg-inline--fa fa-circle fa-w-16' aria-hidden='true' data-prefix='fas' data-icon='circle' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'   data-fa-i2svg=''>
                <path fill='currentColor' d='M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z'></path>
              </svg>
            </div>
            <div class='tracking-date'><img src='https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg' class='img-responsive' alt='order-placed' /></div>
            <div class='tracking-content'>Packed the product<span> <br>
            </span></div>
            </div>

</div>
<div id='accpted4'>
          <div class='tracking-item-pending'>
            <div class='tracking-icon status-intransit'>
              <svg class='svg-inline--fa fa-circle fa-w-16' aria-hidden='true' data-prefix='fas' data-icon='circle' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'   data-fa-i2svg=''>
                <path fill='currentColor' d='M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z'></path>
              </svg>
            </div>
            <div class='tracking-date'><img src='https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg' class='img-responsive' alt='order-placed' /></div>
            <div class='tracking-content'>Arrived in the warehouse<span> <br>   </span></div>
          </div>
</div>
 
<div id='accpted5'>
          <div class='tracking-item-pending'>
            <div class='tracking-icon status-current blinker'>
              <svg class='svg-inline--fa fa-circle fa-w-16' aria-hidden='true' data-prefix='fas' data-icon='circle' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'   data-fa-i2svg=''>
                <path fill='currentColor' d='M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z'></path>
              </svg>
            </div>
            <div class='tracking-date'><img src='https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg' class='img-responsive' alt='order-placed' /></div>
            <div class='tracking-content'>Order Reached At delivary place<span><br>  </span></div>
          </div>

</div>


        </div>
      </div>
    </div>

                            </div>
                        </div>
				    </div>
                </div>                        
            </form>
		</div> 
    </div>
    ";

   
   

   

    if($no==0){
           
        echo"
        <script>alert('Order Arrived');</script>";
        
              }
              else if($no==1){
                
    echo"
    <script>document.getElementById('accpted1').innerHTML=`
   
     <div class='tracking-item' >
    
            <div class='tracking-icon status-intransit'>
              <svg class='svg-inline--fa fa-circle fa-w-16' aria-hidden='true' data-prefix='fas' data-icon='circle' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'   data-fa-i2svg=''>
                <path fill='currentColor' d='M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z'></path>
              </svg>
            </div>
            <div class='tracking-date'><img src='https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg' class='img-responsive' alt='order-placed' /></div>
            <div class='tracking-content'>Order Placed <span> $arridate  <br>  </span></div>
          </div>`;
          document.getElementById('accpted').innerHTML=`  <div class='tracking-item' >
            <div class='tracking-icon status-intransit' id='accpted2'>
              <svg class='svg-inline--fa fa-circle fa-w-16' aria-hidden='true' data-prefix='fas' data-icon='circle' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'   data-fa-i2svg=''>
                <path fill='currentColor' d='M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z'></path>
              </svg>
            </div>
            <div class='tracking-date'><img src='https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg' class='img-responsive' alt='order-placed' /></div>
            <div class='tracking-content'>Order Confirmed   <span> $accdate  <br>
            <form method='POST'>
  <input type='submit' name='confirm2' style='display: inline-block;
    background-color: #20c997;
    height: 35px;
    width: 160px;
    color: #ffffff;
    text-align: center;
    border: 4px double #cccccc;
    border-radius: 10px;
    font-size: 20px;
  ' value='Pack Order'>
</form>
               </span></div>
          </div> 
          `;
           </script>";
    
        
              }
              else if ($no==2){
                echo"
                <script> document.getElementById('accpted1').innerHTML=` <div class='tracking-item' >
                <div class='tracking-icon status-intransit'>
                  <svg class='svg-inline--fa fa-circle fa-w-16' aria-hidden='true' data-prefix='fas' data-icon='circle' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'   data-fa-i2svg=''>
                    <path fill='currentColor' d='M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z'></path>
                  </svg>
                </div>
                <div class='tracking-date'><img src='https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg' class='img-responsive' alt='order-placed' /></div>
                <div class='tracking-content'>Order Placed <span> $arridate  <br>  </span></div>
              </div>`; 
    
    
              document.getElementById('accpted').innerHTML=`  <div class='tracking-item' >
                <div class='tracking-icon status-intransit' id='accpted2'>
                  <svg class='svg-inline--fa fa-circle fa-w-16' aria-hidden='true' data-prefix='fas' data-icon='circle' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'   data-fa-i2svg=''>
                    <path fill='currentColor' d='M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z'></path>
                  </svg>
                </div>
                <div class='tracking-date'><img src='https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg' class='img-responsive' alt='order-placed' /></div>
                <div class='tracking-content'>Order Confirmed   <span> $accdate <br> </span></div> </div>`;
    
    
              document.getElementById('accpted3').innerHTML=`  <div class='tracking-item' >
              <div class='tracking-icon status-intransit' id='accpted2'>
                <svg class='svg-inline--fa fa-circle fa-w-16' aria-hidden='true' data-prefix='fas' data-icon='circle' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'   data-fa-i2svg=''>
                  <path fill='currentColor' d='M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z'></path>
                </svg>
              </div>
              <div class='tracking-date'><img src='https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg' class='img-responsive' alt='order-placed' /></div>
              <div class='tracking-content'>Packed the product<span>$packegdate <br> 
               <form method='POST'>
  <input type='submit'  style='display: inline-block;
    background-color: #20c997;
    height: 35px;
    width: 160px;
    color: #ffffff;
    text-align: center;
    border: 4px double #cccccc;
    border-radius: 10px;
    font-size: 20px;
  ' name='confirm3' value='Ship Order'>
</form>         </span></div>
            </div>`;</script>";
              }
              
              else if ($no==3){
                echo"
                <script> document.getElementById('accpted1').innerHTML=` <div class='tracking-item' >
                <div class='tracking-icon status-intransit'>
                  <svg class='svg-inline--fa fa-circle fa-w-16' aria-hidden='true' data-prefix='fas' data-icon='circle' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'   data-fa-i2svg=''>
                    <path fill='currentColor' d='M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z'></path>
                  </svg>
                </div>
                <div class='tracking-date'><img src='https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg' class='img-responsive' alt='order-placed' /></div>
                <div class='tracking-content'>Order Placed <span> $arridate  <br>  </span></div>
              </div>`; 
    
              document.getElementById('accpted').innerHTML=`  <div class='tracking-item' >
                <div class='tracking-icon status-intransit' id='accpted2'>
                  <svg class='svg-inline--fa fa-circle fa-w-16' aria-hidden='true' data-prefix='fas' data-icon='circle' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'   data-fa-i2svg=''>
                    <path fill='currentColor' d='M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z'></path>
                  </svg>
                </div>
                <div class='tracking-date'><img src='https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg' class='img-responsive' alt='order-placed' /></div>
                <div class='tracking-content'>Order Confirmed   <span> $accdate   <br>  </span></div>
              </div>`;
    
               document.getElementById('accpted3').innerHTML=`  <div class='tracking-item' >
                <div class='tracking-icon status-intransit' id='accpted2'>
                  <svg class='svg-inline--fa fa-circle fa-w-16' aria-hidden='true' data-prefix='fas' data-icon='circle' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'   data-fa-i2svg=''>
                    <path fill='currentColor' d='M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z'></path>
                  </svg>
                </div>
                <div class='tracking-date'><img src='https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg' class='img-responsive' alt='order-placed' /></div>
                <div class='tracking-content'>Packed the product<span>$packegdate <br>  </span></div>
              </div>`;
    
              document.getElementById('accpted4').innerHTML=`  <div class='tracking-item' >
              <div class='tracking-icon status-intransit' id='accpted2'>
                <svg class='svg-inline--fa fa-circle fa-w-16' aria-hidden='true' data-prefix='fas' data-icon='circle' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'   data-fa-i2svg=''>
                  <path fill='currentColor' d='M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z'></path>
                </svg>
              </div>
              <div class='tracking-date'><img src='https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg' class='img-responsive' alt='order-placed' /></div>
              <div class='tracking-content'>Out for the delivary and Delivary arrived near at  $address<span>  $shipmedat <br>  </span></div>
            </div>`;
            
            
            
            document.getElementById('accpted5').innerHTML=`  <div class='tracking-item-pending'>
            <div class='tracking-icon status-current blinker'>
              <svg class='svg-inline--fa fa-circle fa-w-16' aria-hidden='true' data-prefix='fas' data-icon='circle' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'   data-fa-i2svg=''>
                <path fill='currentColor' d='M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z'></path>
              </svg>
            </div>
            <div class='tracking-date'><img src='https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg' class='img-responsive' alt='order-placed' /></div>
            <div class='tracking-content'>Order Reached At delivary place  $address<span> Within 10 days  </span></div>
          </div>`;
          
            
            
            </script>";
              }
    
    
              else if ($no==4){
                echo"
                <script>
                document.getElementById('accpted1').innerHTML=` <div class='tracking-item' >
                <div class='tracking-icon status-intransit'>
                  <svg class='svg-inline--fa fa-circle fa-w-16' aria-hidden='true' data-prefix='fas' data-icon='circle' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'   data-fa-i2svg=''>
                    <path fill='currentColor' d='M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z'></path>
                  </svg>
                </div>
                <div class='tracking-date'><img src='https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg' class='img-responsive' alt='order-placed' /></div>
                <div class='tracking-content'>Order Placed <span> $arridate  <br>  </span></div>
              </div>`; 
    
    
              document.getElementById('accpted').innerHTML=`  <div class='tracking-item' >
                <div class='tracking-icon status-intransit' id='accpted2'>
                  <svg class='svg-inline--fa fa-circle fa-w-16' aria-hidden='true' data-prefix='fas' data-icon='circle' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'   data-fa-i2svg=''>
                    <path fill='currentColor' d='M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z'></path>
                  </svg>
                </div>
                <div class='tracking-date'><img src='https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg' class='img-responsive' alt='order-placed' /></div>
                <div class='tracking-content'>Order Confirmed   <span>$accdate  <br>  </span></div>
              </div>`;
    
               document.getElementById('accpted3').innerHTML=`  <div class='tracking-item' >
                <div class='tracking-icon status-intransit' id='accpted2'>
                  <svg class='svg-inline--fa fa-circle fa-w-16' aria-hidden='true' data-prefix='fas' data-icon='circle' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'   data-fa-i2svg=''>
                    <path fill='currentColor' d='M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z'></path>
                  </svg>
                </div>
                <div class='tracking-date'><img src='https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg' class='img-responsive' alt='order-placed' /></div>
                <div class='tracking-content'>Packed the product<span>$packegdate <br>  </span></div>
              </div>`;
    
              document.getElementById('accpted4').innerHTML=`  <div class='tracking-item' >
              <div class='tracking-icon status-intransit' id='accpted2'>
                <svg class='svg-inline--fa fa-circle fa-w-16' aria-hidden='true' data-prefix='fas' data-icon='circle' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'   data-fa-i2svg=''>
                  <path fill='currentColor' d='M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z'></path>
                </svg>
              </div>
              <div class='tracking-date'><img src='https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg' class='img-responsive' alt='order-placed' /></div>
              <div class='tracking-content'>Out for the delivary and Delivary arrived near at  $address<span>  $shipmedat <br>  </span></div>
            </div>`;
    
            
            document.getElementById('Deletionlin').style.display = 'none';
            
                document.getElementById('accpted5').innerHTML=`
                <div class='tracking-item'>
                <div class='tracking-icon status-current blinker'>
                  <svg class='svg-inline--fa fa-circle fa-w-16' aria-hidden='true' data-prefix='fas' data-icon='circle' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'   data-fa-i2svg=''>
                    <path fill='currentColor' d='M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z'></path>
                  </svg>
                </div>
                <div class='tracking-date'><img src='https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg' class='img-responsive' alt='order-placed' /></div>
                <div class='tracking-content'>Order Reached At delivary place  $address<span><br>    $devcon </span></div>
                </div>`;
                </script>";
            }
    
              else if($no==5){
    
                echo"<script> document.getElementById('tracking').innerHTML=`$status`;
                
              document.getElementById('Deletionlin').style.display = 'none';
                </script>";
              
    
              }
              
    }
    


    
    if (isset($_POST['confirm'])) {
    
        $product_id11  = $_GET['id'];
        date_default_timezone_set('Asia/Kolkata');
        $currentDateTime = date(" j F, Y , h:ia");
        $query11= "update orders 
                  set no = 1, apdp = 'Order Confirmed', accedate= '  $currentDateTime'
                  where phonenumber=$product_id11";
        $run = mysqli_query($con, $query11);

        $query12= "update orderlist 
        set sid = 1, status = 'Order Confirmed'
        where order_id=$product_id11";
       $run2= mysqli_query($con, $query12);
       echo "<script>window.open('checkorderadmin.php?id= $product_id11','_self')</script>";
     
    }
    
    if (isset($_POST['confirm2'])) {
        $product_id11  = $_GET['id'];
        date_default_timezone_set('Asia/Kolkata');
        $currentDateTime1 = date(" j F, Y , h:ia");
        $query11= "update orders 
                  set no = 2, apdp = 'Order Packed',packegdate='$currentDateTime1'
                  where phonenumber=$product_id11";
        $run = mysqli_query($con, $query11);
        $query12= "update orderlist 
        set sid = 2, status = 'Order Packed'
        where order_id=$product_id11";
       $run2= mysqli_query($con, $query12);
        echo "<script>window.open('checkorderadmin.php?id= $product_id11','_self')</script>";
    }
    
    if (isset($_POST['confirm3'])) {
    
        $product_id11  = $_GET['id'];
        date_default_timezone_set('Asia/Kolkata');
        $currentDateTime2 = date(" j F, Y , h:ia");
        $query11= "update orders 
                  set no = 3, apdp = 'Order Shipped',shipmedate='   $currentDateTime2'
                  where phonenumber=$product_id11";
        $run = mysqli_query($con, $query11);

        $query12= "update orderlist 
        set status = 'Order Shipped',sid = 3 
        where order_id=$product_id11";
    $run2 = mysqli_query($con, $query12);
        echo "<script>window.open('checkorderadmin.php?id= $product_id11','_self')</script>";
       
    
    }
    
    
    if (isset($_POST['cancel'])) {
        $product_id11  = $_GET['id'];
       
        $query11= "update orders 
                  set no = 5, apdp = 'Order Canceled by Farmer'
                  where phonenumber=$product_id11";
        $run = mysqli_query($con, $query11);
   
        $query12= "update orderlist 
        set status = 'Order Canceled by Owner',sid = 5 
        where order_id=$product_id11";
    $run2 = mysqli_query($con, $query12);
    
        $newset=$stock+$qty;
        $delete="update plants set stock=$newset where id=$product_id ";
        $run2 = mysqli_query($con, $delete);
        echo "<script>window.open('checkorderadmin.php?id= $product_id11','_self')</script>";
     
    }
    
    ?>
    
    

</body>

</html>