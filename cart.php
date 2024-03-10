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
    <title>Cart Page</title>
    <link rel="stylesheet" href="style.css">
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
  overflow: scroll;
}
    .cart_img1{
        object-fit:contain;

    }
        .cart_img
        {
            height:5%;
            width:5%;
            filter:invert(80%);
        }
       .cart{
            margin: 80px auto;
            margin-top:40px;
        }
        table{
            width:100%;
            border-collapse:collapse;
        }
        .cart-info
        {
            display:flex;
            flex-wrap:wrap;
        }
        th{
            text-align:left;
            padding:5px;
            color:white;
            background-color:#212529;
            font-weight:normal;
        }
        td{
            padding: 10px 5px;
        }
        td input{
            width:40px;
            height:30px;
            padding:5px;
        }
        td a{
            color:green;
            font-size:12px;
        }
        td img{
            width:100px;
            height:100px;
            margin-right:10px;
        }
        .total{
            display:flex;
            justify-content:flex-end;
        }
        .total table{
            border-top:3px solid green;
            width:100%;
            max-width:400px;
        }
        td:last-child{
            text-align:right;
        }
        th:last-child{
            text-align:right;
        }
        @media only screen and (max-width:600px) {
            .cart-info p{
                display:none;
            }
        }
    </style>
    <script>
    $(document).ready(function(){
        subtotal();});
        var gt=0;
    var iprice=document.getElementsByClassName('iprice');
    var iquantity=document.getElementsByClassName('iquantity');
    var itotal=document.getElementsByClassName('itotal');
    
    
    function subtotal()
    {
        gt=0;
        for(i=0;i<iprice.length;i++)
        {
            itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
            gt=gt+(iprice[i].value)*(iquantity[i].value);
        }
        document.getElementById('gtotal').innerText=gt;
         
    }
 

        </script>
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
    <div class="container cart">
        <table>
            <tr>
                <th>Products</th>
                <!-- <th>Price</th> -->
                <th>Quantity</th>
                <th>SubTotal</th>
            </tr>

            <?php
                global $con;
                $ip = getIPAddress(); 
                $total=0;
                $sel="select * from `cart` where ip_address='$ip'";
                $res=mysqli_query($con,$sel);
                $count=mysqli_num_rows($res);
                if($count==0)
                echo"<script>alert('No Product is added to cart')</script>";
                else{
                while($row=mysqli_fetch_array($res))
                {
                    $prod_id=$row['product_id'];
                    $quantity=$row['quantity'];
                    $sel_pr="select * from `products` where prod_id=$prod_id";
                    $res_pr=mysqli_query($con,$sel_pr);
                    while($row_price=mysqli_fetch_array($res_pr))
                    {
                        $prod_price=array($row_price['prod_price']);
                        $price_table=$row_price['prod_price'];
                        $prod_name=$row_price['prod_name'];
                        $prod_img=$row_price['p_img1'];
                        $prod_priceSum=array_sum($prod_price);
                        $total+=$prod_priceSum;               
       ?>
            <tr>

                <td><div class="cart-info">
                    <img src="./images/<?php echo $prod_img?>" class="cart_img1">
                    <div><p><?php echo $prod_name ?></p>
                    <small><?php echo $price_table ?>/-<input type='hidden' value =<?php echo $price_table?> class='iprice'></small><br>
                   
                    <form method="post">
                    <!-- <input type="submit" value="update" class='text-success' name="update"><br> -->
                    <a href='del_cart.php?delete_cart=<?php echo $prod_id?>' class='text-success'>Remove</a></div>
                    <br>
                    
                <td><input type="number" value="1" min="1" max="5" onchange="subtotal()" class="iquantity" name="quanty"></td>
                    </form>
                <td class='itotal'></td>
                </div></td></td>
                <!-- <?php
                    $ip = getIPAddress(); 
                    if(isset($_POST['update']))
                    {
                        $qnty=$_POST['quanty'];
                        $sel12="select * from `cart`";
                        $res12=mysqli_query($con,$sel12);
                        while($row12=mysqli_fetch_array($res12))
                        {
                          
                          $id=$row12['product_id'];
                          echo $id;
                         
                        $update="update `cart` set quantity=$qnty where product_id=$id";
                        $res_qnty=mysqli_query($con,$update);
                        
                        }
                    }
                    ?> -->
            </tr>
            <?php }}}?>
        </table>
      

        <form method="get">
        <div class="total">
            <table>
                <tr>
                    <td>Total</td>
                    <td id="gtotal"></td>
                    
                </tr>
            </table>
        </div>
                    
       
        <button class="btn btn-outline-dark bg-dark"><a href="products.php" class="text-white text-decoration-none">Continue Shopping</a></button>
        <button class="btn btn-outline-dark bg-dark" name="subtn"><a href="checkout.php" class="text-white text-decoration-none">Checkout</a></button>
      </form>
    </div>
    <?php include("footer.php") ?>
</body>
</html>