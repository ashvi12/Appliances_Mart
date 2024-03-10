<?php
include('../connect.php');

if(isset($_GET['delete_brand']))
{
    $del=$_GET['delete_brand'];
    $del_query="delete from `brands` where brand_id=$del";
    $res=mysqli_query($con,$del_query);
    if($res)
    {
        echo "<script>alert('Brand Deleted successfully')</script>";
        echo "<script>window.open('brands.php','_self')</script>";
    }
    $del_pr="delete from `products` where brand_id=$del";
    $res1=mysqli_query($con,$del_pr);
}
?>