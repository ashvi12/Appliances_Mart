<?php
include('connect.php');

if(isset($_POST['action']))
{
    $query="select * from `products` where brand_id!=''";
    if(isset($_POST["category"]))
    {
        $category_filter=implode("','",$_POST["category"]);
        $query .= "AND category_id IN('".$category_filter."')";
    }
    if(isset($_POST["brand"]))
    {
        $brand_filter=implode("','",$_POST["brand"]);
        $query .= "AND brand_id IN('".$brand_filter."')";
    }

    $res=mysqli_query($con,$query);
    $number=mysqli_num_rows($res);
    $output = '';
    if($number>0)
    {
        while($row=mysqli_fetch_assoc($res))
        {
            $output .='<div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1 mb-3">
        <div class="h-100 card">
  <img class="card-img-top c_img" src="./admin/product_images/'.$row['p_img1'].'" alt="'.$row['prod_name'].'">
  <div class="card-body">
        <h5 class="card-title">'.$row['prod_name'].'</h5>
    <p class="card-text">'.$row['prod_desc'].'</p>
    <p class="card-text">'.$row['prod_price'].' Rs</p>
    <a href="index.php?cart='.$row['prod_id'].'" class="btn btn-success">Add to cart</a>
    <a href="product_details.php?product_id='.$row['prod_id'].'" class="btn btn-dark">View more</a>
    </div>
    </div>   </div>  

            ';
        }
    }
    else{
        $output='<h3>No Data Found</h3>';
    }
    echo $output;
}

?>