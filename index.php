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
  <title>Appliances Mart</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="style.css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<style>
/* .cart{
  width: 10%;
height: 10%;
margin-left: 12px;
} */

body{
  overflow-x: hidden;
}
.cart_img
{
  height:5%;
  width:5%;
  filter:invert(80%);
  display:inline-block;
}

.user_img{
  height:14%;
  width:14%;
  filter:invert(80%);
  display:inline-block;

}
.imgs{
  object-fit:contain;
}


/* ************************************************************************ */
h1,
        h2,
        h3,
        h4,
        h5,
        h6 {}
        a,
        a:hover,
        a:focus,
        a:active {
            text-decoration: none;
            outline: none;
        }
        
        a,
        a:active,
        a:focus {
            color:##000000;
            text-decoration: none;
            transition-timing-function: ease-in-out;
            -ms-transition-timing-function: ease-in-out;
            -moz-transition-timing-function: ease-in-out;
            -webkit-transition-timing-function: ease-in-out;
            -o-transition-timing-function: ease-in-out;
            transition-duration: .2s;
            -ms-transition-duration: .2s;
            -moz-transition-duration: .2s;
            -webkit-transition-duration: .2s;
            -o-transition-duration: .2s;
        }
        
        ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        img {
    max-width: 100%;
    height: auto;
}
        section {
            padding: 60px 0;
           /* min-height: 100vh;*/
        }

.sec-title{
  position:relative;
  z-index: 1;
  margin-bottom:60px;
}

.sec-title .title{
  position: relative;
  display: block;
  font-size: 18px;
  line-height: 24px;
  color: #006400;
  font-weight: 500;
  margin-bottom: 15px;
}

.sec-title h2{
  position: relative;
  display: block;
  font-size:40px;
  line-height: 1.28em;
  color: #006400;
  font-weight: 600;
  padding-bottom:18px;
}

.sec-title h2:before{
  position:absolute;
  content:'';
  left:0px;
  bottom:0px;
  width:50px;
  height:3px;
  background-color:#006400;
}

.sec-title .text{
  position: relative;
  font-size: 16px;
  line-height: 26px;
  color: #000000;
  font-weight: 400;
  margin-top: 35px;
}

.sec-title.light h2{
  color:#006400;
}

.sec-title.text-center h2:before{
  left:50%;
  margin-left: -25px;
}

.list-style-one{
  position:relative;
}

.list-style-one li{
  position:relative;
  font-size:16px;
  line-height:26px;
  color: #006400;
  font-weight:400;
  padding-left:35px;
  margin-bottom: 12px;
}

.list-style-one li:before {
    content: "\f058";
    position: absolute;
    left: 0;
    top: 0px;
    display: block;
    font-size: 18px;
    padding: 0px;
    color: #006400;
    font-weight: 600;
    -moz-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
    font-style: normal;
    font-variant: normal;
    text-rendering: auto;
    line-height: 1.6;
    font-family: "Font Awesome 5 Free";
}

.list-style-one li a:hover{
  color: #006400;
}

.btn-style-one{
  position: relative;
  display: inline-block;
  font-size: 17px;
  line-height: 30px;
  color:#ffffff;
  padding: 10px 30px;
  font-weight: 600;
  overflow: hidden;
  letter-spacing: 0.02em;
  background-color: #006400;
}

.btn-style-one:hover{
  background-color: #006400;
  color: #ffffff;
}
.about-section{
  position: relative;
  padding: 120px 0 70px;
}

.about-section .sec-title{
  margin-bottom: 45px;
}

.about-section .content-column{
  position: relative;
  margin-bottom: 50px;
}

.about-section .content-column .inner-column{
  position: relative;
  padding-left: 30px;
}

.about-section .text{
  margin-bottom: 20px;
  font-size: 16px;
  line-height: 26px;
  color: #000000;
  font-weight: 400;
}

.about-section .list-style-one{
  margin-bottom: 45px;
}

.about-section .btn-box{
  position: relative;
}

.about-section .btn-box a{
  padding: 15px 50px;
}

.about-section .image-column{
  position: relative;
}

.about-section .image-column .text-layer{
    position: absolute;
    right: -110px;
    top: 50%;
    font-size: 325px;
    line-height: 1em;
    color: #006400;
    margin-top: -175px;
    font-weight: 500;
}

.about-section .image-column .inner-column{
  position: relative;
  padding-left: 80px;
  padding-bottom: 0px;
}
.about-section .image-column .inner-column .author-desc{
    position: absolute;
    bottom: 16px;
    z-index: 1;
    background: #006400;
    padding: 10px 15px;
    left: 96px;
    width: calc(100% - 152px);
    border-radius: 50px;
}
.about-section .image-column .inner-column .author-desc h2{
    font-size: 21px;
    letter-spacing: 1px;
    text-align: center;
    color: #006400;
  margin: 0;
}
.about-section .image-column .inner-column .author-desc span{
    font-size: 16px;
    letter-spacing: 6px;
    text-align: center;
    color: #006400;
  display: block;
  font-weight: 400;
}
.about-section .image-column .inner-column:before{
    content: '';
    position: absolute;
    width: calc(50% + 80px);
    height: calc(100% + 160px);
    top: -80px;
    left: -3px;
    background: transparent;
    z-index: 0;
    border: 44px solid #006400;
}

.about-section .image-column .image-1{
  position: relative;
}
.about-section .image-column .image-2{
  position: absolute;
  left: 0;
  bottom: 0;
}

.about-section .image-column .image-2 img,
.about-section .image-column .image-1 img{
  box-shadow: 0 30px 50px #006400;
      border-radius: 46px;
}

.about-section .image-column .video-link{
  position: absolute;
  left: 70px;
  top: 170px;
}

.about-section .image-column .video-link .link{
  position: relative;
  display: block;
  font-size: 22px;
  color: #006400;
  font-weight: 400;
  text-align: center;
  height: 100px;
  width: 100px;
  line-height: 100px;
  background-color:#006400;
  border-radius: 50%;
  box-shadow: 0 30px 50px #006400;
  -webkit-transition: all 300ms ease;
  -moz-transition: all 300ms ease;
  -ms-transition: all 300ms ease;
  -o-transition: all 300ms ease;
  transition: all 300ms ease;
}

.about-section .image-column .video-link .link:hover{
  background-color: #006400;
  color: #006400;
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
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 slider" src="./images/index_img2.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100  slider"  src="./images/furniture.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 slider" src="./images/airpods_rel2.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div><br>
<h1><center>Featured Products</center></h1>
<div class="row">
    <div class="col-md-12">
        <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card h-100">
  <img class="card-img-top imgs" src="./images/lg_tvh.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">LG 55 (138cm) UQ80 4K Ultra HD Smart LED <br> 18000 Rs</h5>
    <p class="card-text">LG 55 (138cm) UQ80 4K Ultra HD Smart LED TV with Dolby Audio online</p>
    <a href='viewmore.php?product_id=3' name='viewmore' class='btn btn-dark'>View more</a>
  </div>
</div> 
</div>
           <div class="col-md-4 mb-4">
            <div class="card h-100">
  <img class="card-img-top imgs" src="./images/sam_tab.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Samsung galaxy SM-X200NZAEINU tablet <br>15999 Rs</h5>
    <p class="card-text">
    26.69cm (10.5 inch) Display, RAM 4 GB, ROM 64 GB Expandable</p>
    <a href='viewmore.php?product_id=48' name='viewmore' class='btn btn-dark'>View more</a>
  </div>
</div> 
</div>
<div class="col-md-4 mb-4">
            <div class="card h-100">
  <img class="card-img-top imgs" src="./images/boat_sph.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">boAt Stone 620 Bluetooth Speaker (Black)
<br>1999 Rs</h5>
    <p class="card-text">12W RMS Stereo Sound, 10HRS Playtime, Multi-Compatibility Mode(Black)</p>
    <a href='viewmore.php?product_id=38' name='viewmore' class='btn btn-dark'>View more</a>
  </div>
</div> 
</div> 
<!-- //****************************************************************// -->
<section class="about-section">
        <div class="container">
            <div class="row">                
                <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2>About Appliances Mart</h2>
                        </div>
                        <div class="text">Welcome to Appliances Mart, we are leading distributor of electronics & robotics components. we are working towards excellence in electronics space and believe in pursuing business through innovation and technology. Our team comes with several years of industry experience and comprise of a highly motivated set of specialists & industry experts. Our goal is to be a leader in the industry by providing enhanced services, products, relationship and profitability.<br><br> We firmly believe that our customers are the reason for our existence, and greatly respect the trust that they place in us. We grow through creativity and innovation.Our mission is to build long term relationships with our customers. We strive towards delighting our customers at every opportunity through exceptional customer service.</div>
                     
                        <div class="btn-box">
                            <a href="contactUs.php" class="theme-btn btn-style-one">Contact Us</a>
                        </div>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft">
                        <figure class="image-1"><a href="#" class="lightbox-image" data-fancybox="images"><img title="Rahul Kumar Yadav" src="./images/aboutus.jpg" alt=""></a></figure>
                     
                    </div>
                </div>
              
            </div>
           <div class="sec-title">
                            <span class="title">Our Future Goal</span>
                            <h2>We want to lead in innovation & Technology</h2>
                        </div>
   
                        We Believe,

The competitive strength of a company should be measured not by the volume of sales or the range of innovation, but by the extent of involvement of all the association in the quality improvement process.

We've kept that step ahead by listening carefully to our customers over the years, by paying expert attention to an ever-changing economic environment and by giving our people the opportunities to realize their potential.

<br><br>As we look at the road ahead, we are determined to exceed our historical success. And we'll do it by constantly increasing the value of our offerings to our customers and increasing the caliber of our services to such a high level, that our name will become synonymous with customer satisfaction.
<br><br>In the end, I would say keep visiting our website and enjoy the quality content.
              
        </div><br>
    
    <?php
   if(isset($_POST['feedback']))
  {
    $email=$_SESSION['email'];
    $sel="select * from `user` where email='$email'";
    $res=mysqli_query($con,$sel);
    $row_fetch=mysqli_fetch_assoc($res);
    $user_id=$row_fetch['user_id'];
    $sub=$_POST['subject'];
    $msg=$_POST['msg'];
    $ins="insert into `feedback` (user_id,email,subject,message) values ($user_id,'$email','$sub','$msg')";
    $res=mysqli_query($con,$ins);
  }
?>
<div class="sec-title center">
                            <h2>Contact us</h2>
                        </div>

   <!--Contact heading-->
   <div class="row">
      <!--Grid column-->
      <div class="col-sm-12 mb-4 col-md-5">
         <!--Form with header-->
         <div class="card border-success rounded-0">
            <div class="card-header p-0">
               <div class="bg-success text-white text-center py-2">
                  <h3><i class="fa fa-envelope"></i> Write to us:</h3>
                  <p class="m-0">We’ll write rarely, but only the best content.</p>
               </div>
            </div>
            <div class="card-body p-3">
            <form id="myForm" method="post">
                  <div class="form-group p-3">
                    <h4 class="sent-notification"></h4>
                  <label> Your name </label>
                  <div class="input-group">
                     <input value="" type="text" name="data[name]" class="form-control" id="name" placeholder="Your name">
                  </div>
				</div>
                  <div class="form-group p-3">
                     <label>Your email</label>
                     <div class="input-group mb-2 mb-sm-0">
                        <input type="email" value="" name="data[email]" class="form-control" id="email" placeholder="Email">
                     </div>
                  </div>
                  <div class="form-group p-3">
                     <label>Subject</label>
                     <div class="input-group mb-2 mb-sm-0">
                        <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject">
                     </div>
                  </div>
                  <div class="form-group p-3">
                     <label>Message</label>
                     <div class="input-group mb-2 mb-sm-0">
                        <input type="text" class="form-control" id="body" placeholder="Message" name="msg">
                     </div>
                  </div>
                  <div class="text-center">
                     <input type="submit" name="feedback" onclick="sendEmail()" class="btn btn-success btn-block rounded-0 py-2 m-4" value="Submit">
                    </div>
      </form>
             
			     </div>
				  
            </div>
         </div>
      <!--Grid column-->
	  
      <!--Grid column-->
      <div class="col-sm-12 col-md-7">
         <!--Google map-->
         <div class="mb-4">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.7572024351107!2d72.66404721480096!3d23.03268538494795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e87a954d62abd%3A0x60219e0e597f38d5!2sVARDHMAN%20SALES!5e0!3m2!1sen!2sin!4v1680460099485!5m2!1sen!2sin" width="750" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>   </div>
         <!--Buttons-->
         <div class="row text-center">
            <div class="col-md-4">
               <a class="bg-dark px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-map-marker"></i></a>
               <p>Vardhman Sales,
                Odhav,Ahmedabad,Gujarat</p>
            </div>
            <div class="col-md-4">
               <a class="bg-dark px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-phone"></i></a>
               <p>+91 9879083825</p>
            </div>
            <div class="col-md-4">
               <a class="bg-dark px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-envelope"></i></a>
               <p>vardhmansales2021@gmail.com</p>
            </div>
         </div>
      </div>
      <!--Grid column-->
	    </div>
</section>


	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            var subject = $("#subject");
            var body = $("#body");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                $.ajax({
                   url: 'sendemail1.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       subject: subject.val(),
                       body: body.val()
                   }, success: function (response) {
                        $('#myForm')[0].reset();
                        $('.sent-notification').text("Message Sent Successfully.");
                        alert('Message Sent Successfully.');
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>
    
<?php include("footer.php") ?> 



</body>
</html>