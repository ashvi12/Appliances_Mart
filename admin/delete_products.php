<?php
include('../connect.php');


    if(isset($_GET['delete_products'])){
        $del_id=$_GET['delete_products'];
        $del_query="delete from `products` where prod_id=$del_id";
        $res=mysqli_query($con,$del_query);
        if($res){
            echo "<script>alert('Product deleted successfully')</script>";
                echo "<script>window.open('view_products.php','_self')</script>";
        }
    }
?>