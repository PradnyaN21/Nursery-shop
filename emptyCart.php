<?php
 include("db.php");
 session_start();

global $con;
$sess_phone_number = $_SESSION['phonenumber'];

$get_items = "Delete from cart where number = '$sess_phone_number'";
$run_items =  mysqli_query($con, $get_items);

echo "<script>window.open('cart.php','_self')</script>"
?>