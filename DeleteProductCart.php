<?php
 include("db.php");
 session_start();
$sess_phone_number = $_SESSION['phonenumber'];
if (isset($_GET['id'])) {
     $product_id = $_GET['id'];
     $delete_product = "delete from cart where  productid = '$product_id' and number = '$sess_phone_number'";
     $run_delete = mysqli_query($con, $delete_product);

     echo "<script>window.open('cart.php','_self')</script>";
}
