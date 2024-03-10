<?php
include('../connect.php');

if(isset($_GET['delete_category']))
{
    $del=$_GET['delete_category'];
    $del_query="delete from `categories` where category_id=$del";
    $res=mysqli_query($con,$del_query);
    if($res)
    {
        echo "<script>alert('Category Deleted successfully')</script>";
        echo "<script>window.open('categories.php','_self')</script>";
    }
    $del_pr="delete from `products` where category_id=$del";
    $res1=mysqli_query($con,$del_pr);
    
}
?>