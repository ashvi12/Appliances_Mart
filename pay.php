<?php
include('connect.php');
include('com_func.php');
@session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title> Create Mobile Payment Page Design </title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="style.css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<style>
    *{
    margin: 0;
    padding: 0;
}

body{
  font-family : sans-serif;
}
.app-container{
    height: 660px;
    width: 100%;
    background-color: #6c7ea0;
    top: 57%;
    left: 50%;
   transform: translate(-50%,-50%); 
    position: absolute;
}

.left-icon{
    float: left;
    margin-left: 30px;
}

.right-icon{
    float: right;
    margin-right: 30px;
}

.middle-box{
    height: 150px;
    background-color: #344cb0;
    margin: 10px 30px 20px;
    text-align: center;
    font-size: 12px;
    border-radius: 10px;
    color: #fff;
}
.middle-box h1{
    padding-top: 30px;
    padding-bottom: 30px;
    font-size: 50px;
    font-weight: normal;
    
    
}

.middle-box h1 span{
    font-size: 20px;
    margin-left: 5px;
    bottom: 18px;
    position : relative;
}

.payment-option-btn{
    color: #fff;
    margin: 5px 30px;
    height: 30px;
    width: 290px;
    background-color: #9100fd;
    border: none;
    cursor: pointer;
}

.card-details{
    background: #fff;
    color: #555;
    margin: 10px 30px;
    padding: 10px;
}
.card-details p{
    font-size: 14px;
}


.card-details label{
    font-size: 10px;
    line-height: 20px;
}

.card-num-field-group{
    margin-top: 10px;  
}

.date-field-group{
    margin-top: 10px;
    display: inline-block;
}

.cvc-field-group{
    margin-top: 10px;
    display: inline-block;
    float: right;
}


.name-field-group{
    margin-top: 10px;
}

.card-num-field, .name-field{
    width: 260px;
    
}

.date-field, .cvc-field{
    width: 70px;
}

.card-details input{
    border: 1px solid #ccc;
    height: 22px;
    padding: 5px;
    font-size: 10px;
}

.card-details input::placeholder{
    color: #ccc;
}


.pay-btn{
    width: 270px;
    color: #fff;
    margin-top: 20px;
    height: 30px;
    background-color: #9100fd;
    border: none;
    cursor: pointer;
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
 
  </nav></div>
  <?php
         $email=$_SESSION['email'];
         $sel="select * from `user` where email='$email'";
        $res=mysqli_query($con,$sel);
        $run=mysqli_fetch_array($res);
        $user_id=$run['user_id'];
        echo $user_id;
    ?>
<?php
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
?>
<div class= "app-container">
    <center>
    <div style="width:1200px;">
    <div class="middle-box">
        <h1 id="demo"><?php echo $subtotal ?><span>Rs</span></h1>
        <p>Pay To Appliances Mart</p>
    </div>
    <div class="bottom-box">
    <a href="profile.php?user_id=<?php echo $user_id ?>">  <img src="./images/cod2.jpg" height="300px"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="payments.php?user_id=<?php echo $user_id ?>"><img src="./images/debit.jpg" height="300px"></a>
    </div>
</div>
</center>
<div style="margin-bottom:20px;">
<a href="profile.php?user_id=<?php echo $user_id ?>" style="text-decoration:none"><span style="margin-left:26%;color:white;font-size:25px;">Cash On Delivery</span></a>
<a href="payments.php?user_id=<?php echo $user_id ?>" style="text-decoration:none"> <span style="margin-left:22%;color:white;font-size:25px;">Pay with Debit Card</span></a>
      </div>
<?php include("footer.php") ?> 
</div>
</body>
</html>