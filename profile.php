<?php
include('connect.php');
include('com_func.php');
@session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.min.js"></script>
<style>
body{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
}
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 100%;
    padding: 8%;
    font-weight: 500;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}
.searchbtn{
  
    border-radius: 1.5rem;
}
</style>    
</head>
<body>
<div class="container-fluid p-0">
<nav class="navbar navbar-expand-lg p-2 navbar-dark bg-dark">
  <H5 class="navbar-brand px-4"><span style="color:green">APPLIANCES</span> MART  <p style="font-size:10px;font-weight:none;">&nbsp&nbspWhat you can't get anywhere else</p></H5>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="AboutUs.php">AboutUs</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Products
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Trending Products</a>
          <a class="dropdown-item" href="products.php">All Products</a>
        </div>
      </li>
   
      <li class="nav-item">
        <a class="nav-link" href="contactUs.php">ContactUs</a>
      </li>

    
  </ul>
   <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left:27%;">
<li style="width:200%;" class="mt-2">
    <form class="d-flex me-2" action="search.php" method="get">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
      <button class="btn btn-outline-light" type="submit" name="search">Search</button>
    </form></li>
    <?php
        if(!isset($_SESSION['email']))
        {
          echo "<li class='nav-item dropdown'>
          <a class='nav-link' href='#' id='navbarDropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
          <i class='fas fa-user-circle' style='font-size:36px;margin-left:5px'></i>
        </a>
          <div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>
            <a class='dropdown-item' href='user_login.php'>Login/Register</a>
          </div>
        </li>";
        }
        else
        {
          echo "<li class='nav-item dropdown'>
          <a class='nav-link' href='#' id='navbarDropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
          <i class='fas fa-user-circle' style='font-size:36px;margin-left:5px'></i>
        </a>
          <div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>
            <a class='dropdown-item' href='profile.php'>My Profile</a>
            <a class='dropdown-item' href='user_logout.php'>Logout</a>
          </div>
        </li>";
        }
      ?> 
       <li class="nav-item">
        <a class="nav-link" href="cart.php"><i class="fa fa-shopping-cart" style="font-size:24px;margin-left:5px;margin-top:7px"><sup><?php Cart_NoItems();?></sup></i></a> 
      </li>
    <!-- <li class="nav-item mb-2">
        <a class="nav-link" href="#"><img src="./images/user1.png" class="user_img" height="5%" width="5%"></a>
      </li> -->
    </ul>
 
  </nav>
</div>
<div class="container emp-profile">
            <form method="post">
                <div class="row">
                <?php
 $email=$_SESSION['email'];
 $sel1="select * from `user` where email='$email'";
 $res1=mysqli_query($con,$sel1);
 $row_ct1=mysqli_fetch_assoc($res1);
 $user_id=$row_ct1['user_id'];
 $user_name=$row_ct1['user_name'];
 $email=$row_ct1['email'];
 $user_add=$row_ct1['user_add'];
 $user_cno=$row_ct1['user_cno'];
?>
                    <div class="col-md-12">
                        <div class="profile-head">
                                    <h5>
                                        <?php echo $user_name;?>
                                    </h5>
                                    <div class="col-auto" style="float:right">
                                    <button type="button" class="btn btn-dark"><a href="profile_edit.php?edit_profile" style="text-decoration:none;color:white">Edit Profile</a></button></div>
                                   
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">My Orders</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                   
                </div>
                <div class="row">
                   
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $user_name;?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $email;?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Contact No</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $user_cno;?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Address</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $user_add;?></p>
                                            </div>
                                        </div>
                            </div>
 
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                             <div class="row">
                   <div class="col-md-12">
                     <!-- <table class="table"> -->
                     <?php 
                     getOrderDetails();
                     if(isset($_GET['my_orders'])){
                      include('user_orders.php');
                     }
                    ?>
  <!-- <thead class="thead-dark">
    <tr>
      <th scope="col">Order No</th>
      <th scope="col">Amount</th>
      <th scope="col">Total Products</th>
      <th scope="col">Invoice No</th>
      <th scope="col">Order Date</th>
      <th scope="col">Complete/Incomplete</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table> -->


</div>
                        </div>         
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
        <?php

if(isset($_GET['user_id']))
{
    $user_id=$_GET['user_id'];
    echo $user_id;

$ip=getIPAddress();
$total=0;
$sel="select * from `cart` where ip_address='$ip'";
$res=mysqli_query($con,$sel);
$invoice=mt_rand();
$status='pending';
$ct=mysqli_num_rows($res);
while($row=mysqli_fetch_array($res))
{
    $prod_id=$row['product_id'];
    $sel_prod="select * from `products` where prod_id=$prod_id";
    $res_prod=mysqli_query($con,$sel_prod);
    while($row_prod=mysqli_fetch_array($res_prod)){
        $prod_price=array($row_prod['prod_price']);
        $prod_price_sum=array_sum($prod_price);
        $total+=$prod_price_sum;
    }
}

$sel_cart="select * from `cart`";
$res_cart=mysqli_query($con,$sel_cart);
$get_quant=mysqli_fetch_array($res_cart);
$quantity=$get_quant['quantity'];
$subtotal=$total*$quantity;
$insert="insert into `orders` (user_id,amount_due,invoice_no,total_products,order_date,order_status) values ($user_id,$subtotal,$invoice,$ct,NOW(),'$status')";
$res_ins=mysqli_query($con,$insert);
if($res_ins)
{
    echo "<script>alert('Orders are submitted successfully')</script>";
    echo "<script>window.open('profile.php','_self')</script>";
}

$insert_pendingOrders="insert into `orders_pending` (user_id,invoice_no,product_id,quantity,order_status) values ($user_id,$invoice,$prod_id,$quantity,'$status')";
$res_pendingOrders=mysqli_query($con,$insert_pendingOrders);

$empty_cart="delete from `cart` where ip_address='$ip'";
$res_del=mysqli_query($con,$empty_cart);
}
?>

</body>
</html>



