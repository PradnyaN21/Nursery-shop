<?php
       include("db.php");
     
global $con;


if (isset($_GET['cnum'])) {
   $cnum = $_GET['cnum'];
   $delete_product = "delete from users where number = '$cnum'";
   $run_delete = mysqli_query($con, $delete_product);

  
   $delete_product1 = "delete from review where number = '$cnum'";
   $run_delete1 = mysqli_query($con, $delete_product1);

   $delete_product3 = "delete from orders where buyer_phonenumber ='$cnum'";
   $run_delete3 = mysqli_query($con, $delete_product3);


   $delete_product4 = "delete from orderlist where buyer_phonenumber ='$cnum'";
   $run_delete4 = mysqli_query($con, $delete_product4);


echo"<script>alert('User Removed');

</script>";

echo "<script>window.open('allmember.php','_self')</script>";
}


 ?>

