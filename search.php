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
  <title>Search</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
  <style>
    .scroll {
        /* enable div scrolling */
        overflow: scroll;
       height: 200px;
       width:250px;
       overflow-x:hidden;
       
    }
    .cart_img
{
  height:5%;
  width:5%;
  filter:invert(80%);
}
*{
    box-sizing: border-box;
}
#search{
    outline: none;
    border: none;
    display: inline-block;
    
}
#burgundy{
    color: rgb(153, 40, 59);
}
#orange,select{
    color: orange;
}
.fa-search{
    font-size: 20px;
    padding: 10px;
    margin-bottom: 3px;
    padding-right: 20px;
}
.search-nav-item{
    height: 40px;
}
nav{
    padding: 0px 100px;
}
.fa-user-o,.fa-shopping-cart{
    font-size: 20px;
    padding: 4px;
}
.form-group{
    margin-bottom: 5px;
}
label{
    padding-left: 10px;
}
.form-group:last-child{
    margin-bottom: 0;
}
h6{
    margin-bottom: 0px;
}
#sort{
    outline: none;
    border: none;
}

.card-body{
    padding: 8px;
}
.sign{
    width: 25px;
    height: 25px;
}
.discount{
    border: 1px solid orange;
    border-radius: 5px;
    width: 65px;
    position: absolute;
    top: 2%;
}
.c_img{
  object-fit: contain;
}
@media(min-width:1200px){
    #search{
        width: 300px;
        padding: 5px;
        padding-left: 20px;
    }
    .search-nav-item{
        margin-left: 400px;
        width: 350px;
    }
    .fa-user-o{
        margin-left: 300px;
    }
    .text{
        display: none;
    }
    .fa-user-o,.fa-shopping-cart{
        font-size: 20px;
        padding-left: 20px;
    }
    #sidebar{
        width: 20%;
        padding: 20px;
        float: left;
    }
    #products{
        width: 80%;
        padding: 10px;
        margin: 0;
        float: right;
    }
    .card{
        width: 300px;
        height: 330px;
        border: none;
    }
    .card-img-top{
        width: 295px;
        height: 200px;
        border-radius: 10px;
    }
    del{
        padding-right: 2px;
    }
    .filter,#mobile-filter{
        display: none;
    }
}
@media(min-width:992px) and (max-width:1199px){
    #search{
        width: 300px;
        padding: 5px;
        padding-left: 20px;
    }
    .search-nav-item{
        margin-left: 200px;
        width: 350px;
    }
    .fa-user-o{
        margin-left: 160px;
    }
    .text{
        display: none;
    }
    #sidebar{
        width: 30%;
        padding: 20px;
        float: left;
    }
    #products{
        width: 70%;
        padding: 10px;
        margin: 0;
        float: right;
    }
    .card{
        width: 200px;
        height: 330px;
        border: none;
    }
    .card-img-top{
        width: 200px;
        height: 200px;
        border-radius: 10px;
    }
    .fa-plus,.fa-minus{
        font-size: 12px;
    }
    .sign{
        height: 25px;
    }
    .price{
        width: 99px;
    }
    .filter,#mobile-filter{
        display: none;
    }
}
@media(min-width:768px) and (max-width:991px){
    #search{
        width: 300px;
        padding: 5px;
        padding-left: 20px;
    }
    .search-nav-item{
        margin-left: 60px;
        width: 350px;
    }
    .fa-user-o{
        margin-left: 80px;
    }
    .text{
        display: none;
    }
    #sidebar{
        width: 35%;
        padding: 20px;
        float: left;
    }
    #products{
        width: 65%;
        padding: 10px;
        margin: 0;
        float: right;
    }
    .card{
        border: none;
    }
    .filter,#mobile-filter{
        display: none;
    }
}
@media(min-width:576px) and (max-width:767px){
    .text{
        display: none;
    }
    .search-nav-item{
        margin-left: 35px;
        width: 270px;
    }
    #search{
        width: 240px;
        padding: 5px;
        padding-left: 20px;
    }
    .fa-search{
        padding: 3px;
        font-size: 18px;
    }
    #sidebar{
        width: 40%;
        padding: 20px;
        float: left;
    }
    #products{
        width: 60%;
        padding: 10px;
        margin: 0;
        float: right;
    }
    .card{
        border: none;
    }
    #off{
        padding-left: 2px;
    }
    #sorting span,#res{
        font-size: 14px;
    }
    .filter,#mobile-filter{
        display: none;
    }
}
@media(max-width:575px){
    .search-nav-item{
        margin: 0;
        width: 100%;
        margin-top: 10px;
    }
    #search{
        width: 80%;
        padding-left: 10px;
        margin-top: 10px;
        padding-right: 10px;
    }
    .fa-search{
        padding: 10px;
        font-size: 18px;
    }
    #sidebar{
        display: none;
    }
    .filter{
        margin-left: 70%;
        margin-top: 2%;
    }
    #sorting,#res{
        font-size: 12px;
        margin-top: 2%;
    }
}
.scroll {
        /* enable div scrolling */
        overflow: scroll;
       height: 200px;
       width:250px;
       overflow-x:hidden;
       
    }
  </style>
   <script>
    $(document).ready(function(){
        //filter_data();
        function filter_data()
        {
            var action='fetch_data';
            var category=get_filter('category');
            var brand=get_filter('brand');
            $.ajax({
               url:"fetch_data.php",
               method:"POST",
               data:{action:action,category:category,brand:brand},
               success:function(data){
                $('.filter_data').html(data);
               } 
            });
        }

        function get_filter(class_name)
        {
            var filter=[];
            $('.'+class_name+':checked').each(function(){
                filter.push($(this).val());
            });
            return filter;
        }
        $('.common_selector').click(function(){
            filter_data();
        });

    });
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


<div class="filter">
    <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#mobile-filter" aria-expanded="true" aria-controls="mobile-filter">Filters<span class="fa fa-filter pl-1"></span></button>
</div>
<div id="mobile-filter">
    
    <div class="py-2 border-bottom ml-3">
        <h6 class="font-weight-bold">Categories</h6>
        <div id="orange"><span class="fa fa-minus"></span></div>
        <div class="scroll">
        <form>
        <?php
               $sel_cat="select * from `categories`";
               $res_cat=mysqli_query($con,$sel_cat);
               while($row_data=mysqli_fetch_assoc($res_cat))
               {
                   $cat_name=$row_data['category_name'];
                   $cat_id=$row_data['category_id'];
                   echo "<div class='form-group'>
                   <input type='checkbox' id='laptop' class='common_selector category' value = '$cat_id'>
                   <label for='laptop'>$cat_name</label>
               </div>";
               }
            ?>  
                                                                       
        </form>
            </div>
    </div>
    <div class="py-2 border-bottom ml-3">
        <h6 class="font-weight-bold">Brands</h6>
        <div id="orange"><span class="fa fa-minus"></span></div>
        <div class="scroll">
        <form>
            <?php
                $sel_br="select * from `brands`";
                $res_br=mysqli_query($con,$sel_br);
                while($row_data=mysqli_fetch_assoc($res_br))
                {
                    $brand_name=$row_data['brand_name'];
                    $brand_id=$row_data['brand_id'];
                    echo "<div class='form-group'>
                    <input type='checkbox' id='laptop' class='common_selector brand' value = '$brand_id'>
                    <label for='laptop'>$brand_name</label>
                </div>";
                }
            ?>                                                      
        </form>
            </div>
    </div>
</div>
<!-- Sidebar filter section -->

<section id="sidebar">

    <div class="py-2 border-bottom ml-3">
        <h6 class="font-weight-bold">Categories</h6>
        <div id="orange"><span class="fa fa-minus"></span></div>
        <div class="scroll">
        <form>
            <?php
               $sel_cat="select * from `categories`";
               $res_cat=mysqli_query($con,$sel_cat);
               while($row_data=mysqli_fetch_assoc($res_cat))
               {
                   $cat_name=$row_data['category_name'];
                   $cat_id=$row_data['category_id'];
                   echo "<div class='form-group'>
                   <input type='checkbox' id='laptop' class='common_selector category' value = '$cat_id'>
                   <label for='laptop'>$cat_name</label>
               </div>";
               }
            ?>                                                               
                                 
        </form></div>
    </div>
    <div class="py-2 border-bottom ml-3">
        <h6 class="font-weight-bold">Brands</h6>
        <div id="orange"><span class="fa fa-minus"></span></div>
        <div class="scroll">
        <form>
            <?php
                $sel_br="select * from `brands`";
                $res_br=mysqli_query($con,$sel_br);
                while($row_data=mysqli_fetch_assoc($res_br))
                {
                    $brand_name=$row_data['brand_name'];
                    $brand_id=$row_data['brand_id'];
                    echo "<div class='form-group'>
                    <input type='checkbox' id='laptop' class='common_selector brand' value = '$brand_id'>
                    <label for='laptop'>$brand_name</label>
                </div>";
                }
            ?>                                                      
        </form>
            </div>
    </div>
</section>
<!-- products section -->
<section id="products">
    <div class="container">
        <div class="d-flex flex-row">
            <div class="text-muted m-2" id="res">Showing 6 results</div>
            <div class="ml-auto mr-lg-4">
                <div id="sorting" class="border rounded p-1 m-1">
                    <span class="text-muted">Sort by</span>
                    <select name="sort" id="sort">
                        <option value="popularity"><b>Popularity</b></option>
                        <option value="prcie"><b>Price</b></option>
                        <option value="rating"><b>Rating</b></option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row filter_data">
            <?php
            search_product();
   ?></div>




<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>