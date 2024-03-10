<?php
include('connect.php');

if(isset($_GET['delete_cart']))
{
    $del=$_GET['delete_cart'];
    $del_query="delete from `cart` where product_id=$del";
    $res=mysqli_query($con,$del_query);
    if($res)
    {
        echo "<script>alert('Product removed successfully')</script>";
        echo "<script>window.open('cart.php','_self')</script>";
    }
}
?>