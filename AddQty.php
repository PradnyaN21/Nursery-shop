<?php
include("db.php");
session_start();
    
     if(isset($_GET['id'])) {
          $product_id = $_GET['id'];
          $sel_price = "select * from cart where productid = '$product_id'";
          $run_price = mysqli_query($con,$sel_price);
          while ($p_price = mysqli_fetch_array($run_price)) {
              $qty = $p_price['quantity'];
             
          }
          $pro_price = "select * from plants where id='$product_id'";
          $run_pro_price = mysqli_query($con, $pro_price);
        while ($pp_price = mysqli_fetch_array($run_pro_price)) {
            $price = $pp_price['price'];
        }
          if ($qty > 0) {
              $qty +=1;
              $ph=$_SESSION['phonenumber'];
              $subtotal = $price * $qty;
              $sel_price = "update cart set quantity = '$qty',price = '$subtotal' where productid = '$product_id' and number='$ph'";
              $run_price = mysqli_query($con, $sel_price);
          }

          echo "<script>window.open('Cart.php','_self')</script>";
     }
