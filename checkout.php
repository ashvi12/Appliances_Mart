<?php
include('connect.php');
session_start();
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
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Products
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Trending Products</a>
          <a class="dropdown-item" href="products.php">All Products</a>
        </div>
      </li>
      <?php
        if(!isset($_SESSION['email']))
        {
          echo "<li class='nav-item'>
          <a class='nav-link' href='user_login.php'>Login/Register</a>
        </li>";
        }
        else
        {
          echo "<li class='nav-item'>
          <a class='nav-link' href='user_logout.php'>Logout</a>
        </li>";
        }
      ?>
     
      <li class="nav-item">
        <a class="nav-link" href="#">AboutUs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ContactUs</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Cart<i class="fa-solid-light fa-cart-shopping"></i><sup>1</sup></a>
      </li> -->
    </ul>
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="cart.php"><img src="./images/cart1.png" class="cart_img" height="5%" width="5%"><sup>1</sup></a>
      </li></ul>
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-light" type="submit">Search</button>
    </form>
  </div>
  </nav>
    
        <div>
        <?php
        if(!isset($_SESSION['email']))
        {
            include('user_login.php');
        }
        else{
            include('pay.php');
        }
        ?>

        </div>
    
   
</body>
</html>