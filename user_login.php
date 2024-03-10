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
  <link rel="stylesheet" href="style.css">
 
  <!-- jQuery CDN Link -->
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="style.css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


  <title>Login/Register</title>
  <style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body{
  font-family: Arial, Helvetica, sans-serif;
  background-image: url('bg.jpg');
  background-size: cover;
  background-attachment: fixed;
}
/* align items center vertically and horizontally  */
.container{
  display: flex;
  justify-content: center;
  align-items:center !important;
  height: 100vh;
}
.form{
  width: 500px;
  height: 650px;
  background-color: rgba(41, 39, 39, 0.3);
  box-shadow: 0 5px 30px black;
}
.btn button {
  padding: 3px;
  margin: 30px 0px 40px 30px;
  border-style: none;
  background-color: transparent;
  color: beige;
  font-size: 18px;
  font-weight: 550;
}
.formGroup{
  display: flex;
  justify-content: center;
}
.formGroup input{
  border: none;
  width: 80%;
  border-bottom: 2px solid white;
  padding: 10px;
  margin-bottom: 20px;
  font-size: 14px;
  font-weight: bold;
  background-color: transparent;
  color: white;
}
input:focus {
  outline: none !important;
  border-bottom: 2px solid rgb(91, 243, 131);
  font-size: 17px;
  font-weight: bold;
  color: white;
}
::placeholder {
  color: white;
}
.checkBox{
  display: flex;
  justify-content: center;
  margin: 16px!important;
}
 
#checkbox{
  margin-right: 10px;
  height: 15px;
  width: 15px;
}
.text{
  color: rgb(199, 197, 197);
  font-size: 13px;
}
.btn2{
  padding: 10px;
  width: 150px;
  border-radius: 20px;
  background-color: rgb(10, 136, 43);
  border-style: none;
  color: white;
  font-weight: 600;
  margin-top:10px;
}
.btn2:hover{
  background-color: rgba(10, 136, 43, 0.5);
}
.btn button:hover{
  border-bottom: 2px solid rgb(91, 243, 131);
}
 
/* hide signup form */
.login{
  display: none;
}
 
/* Login form code */
.login{
  margin-top: 40px;
}
.frgt_pass
{
  color:white;
  margin-top: 27px;
}
.reg{
  color:white;
  margin-top: 27px;
}
.log{
  color:white;
  margin-top: 27px;
}
  </style>
  <script>
    
   
  </script>
</head>
 <?php
    if(isset($_POST['register']))
    {
      $uname=$_POST['uname'];
      $email=$_POST['email'];
      $pass=$_POST['pass'];
      $cpass=$_POST['cpass'];
     $hash_pass=password_hash($pass,PASSWORD_DEFAULT);
     $hash_cpass=password_hash($cpass,PASSWORD_DEFAULT);
      $address=$_POST['address'];
      $cno=$_POST['cno'];
      $ip=getIPAddress();
      $flag=0;
      $sql_exists="select * from user where email='$email'";
      $res_exists=mysqli_query($con,$sql_exists);
      $num_Exists=mysqli_num_rows($res_exists);
      if($num_Exists>0)
      {
       echo "<script>alert('User already exists');</script>";
      }
      else if (!preg_match("/^[a-zA-Z ]+$/",$uname)) {
        echo "<script>alert('Name must contain only alphabets and space')</script>";
      //  echo"<script>window.open('user_login.php','_self')</script>"; 
        }
      /*else if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Please Enter Valid Email ID')</script>";
          }*/
      else if(strlen($pass)<8 || strlen($pass)>20)
      {
        echo "<script>alert('Password must be greater than 8 characters and less than 20 characters');</script>";
      }
      else if($pass!=$cpass)
      {
        echo "<script>alert('Password does not match');</script>";
      }
      else if(strlen($cno)>10 || strlen($cno)<10)
      {
        echo "<script>alert('Mobile number must be minimum of 10 characters');</script>";
      }
      
      else{
      $sql="insert into `user` (user_name,email,password,c_password,user_add,user_cno,ip_address) values ('$uname','$email','$hash_pass','$hash_cpass','$address','$cno','$ip')";
      $res=mysqli_query($con,$sql);
      $flag=1;
      // if($res)
      // echo "Registered Successfully";
      // header("location:index.php");
      }

      $sel_cart="select * from `cart` where ip_address='$ip'";
      $res_cart=mysqli_query($con,$sel_cart);
      $rows_cart=mysqli_num_rows($res_cart);
      if($rows_cart>0 && $flag==1)
      {
          $_SESSION['email']=$email;
          echo"<script>alert('You have items in your cart')</script>";
          echo"<script>window.open('checkout.php','_self')</script>";
      }
      else{
          if($flag==1 && isset($_POST['login12']))
          echo"<script>window.open('products.php','_self')</script>"; 
      }

    }
?>
<body>
  <div class="container">
    <div class="form">
      <div class="btn">
        <button class="signUpBtn">SIGN UP</button>
        <button class="loginBtn">LOG IN</button>
      </div>
      <form class="signUp" action="" method="post">
        <div class="formGroup">
          <input type="text" id="userName" placeholder="User Name" name="uname">
        </div>
        <div class="formGroup">
          <input type="email" placeholder="Email ID" name="email" required>
        </div>
        <!-- <div class="formGroup">
          <input type="file" placeholder="Profile Picture" name="pr" required autocomplete="off">
        </div> -->
        <div class="formGroup">
          <input type="password" id="password" placeholder="Password" required name="pass">
        </div>
        <div class="formGroup">
          <input type="password" id="confirmPassword" placeholder="Confirm Password" required  name="cpass">
        </div>
        <div class="formGroup">
          <input type="text" id="Address" placeholder="Address" name="address">
        </div>
        <div class="formGroup">
          <input type="text" id="Contact No" placeholder="Contact No"  name="cno">
        </div>
        <div class="formGroup">
          <button type="submit" class="btn2" name="register">REGISTER</button>
        </div>
        <div class="formGroup log">Already have an account?
        &nbsp<span style="color:green"><b>Login</b></span>
        </div>
      </form>
      <?php

      
      if(isset($_REQUEST['login12']))
{
  $email = $_REQUEST['email'];
  $pwd = md5($_REQUEST['password']);
  $select_query = mysqli_query($con,"select * from user where email='$email' and password='$pwd'");
  $res = mysqli_num_rows($select_query);
  if($res>0)
  {
    $data = mysqli_fetch_array($select_query);
    $email = $data['email'];
    $_SESSION['email'] = $email;
    echo"<script>window.open('index.php','_self')</script>";
  }
  else
  {
    $msg = "Invalid Credentials";
  }
}
 ?>
      <!------ Login Form -------- -->
      <form class="login" action="" method="post">
        
        <div class="formGroup">
          <input type="email" placeholder="Email ID" name="email" required autocomplete="off">
  </div>
        <div class="formGroup">
          <input type="password" name="password" placeholder="Password" required autocomplete="off">
         
        </div>

        <div class="formGroup">
          <button type="submit" class="btn2" name="login12">Login</button>
        </div>
        <div class="frgt_pass formGroup"><a href="forgot.php" style= "text-decoration:none; color:white">Forgot password ?</a>
        
</div>
        <div class="formGroup reg">
        Don't have an account ? &nbsp<span style="color:green"><b>Register</b></span>
</div>
      </form>
      <p class="error"><?php if(!empty($msg)){ echo $msg; } ?></p>
    </div>
  </div>

 
 <script>
 $('.loginBtn').click(function(){
  $('.login').show();
  $('.signUp').hide();
  /* border bottom on button click */
  $('.loginBtn').css({'border-bottom' : '2px solid green'});
  /* remove border after click */
  $('.signUpBtn').css({'border-style' : 'none'});
});
 
 $('.reg').click(function(){
  $('.signUp').show();
  $('.login').hide();
  $('.signUpBtn').css({'border-bottom' : '2px solid green'});
   /* remove border after click */
   $('.loginBtn').css({'border-style' : 'none'});
 });

 $('.log').click(function(){
  $('.login').show();
  $('.signUp').hide();
  $('.loginBtn').css({'border-bottom' : '2px solid green'});
   /* remove border after click */
   $('.signUpBtn').css({'border-style' : 'none'});
 });



/* Show sign Up form on button click */
 
$('.signUpBtn').click(function(){
  $('.login').hide();
  $('.signUp').show();
  /* border bottom on button click */
  $('.signUpBtn').css({'border-bottom' : '2px solid green'});
   /* remove border after click */
   $('.loginBtn').css({'border-style' : 'none'});
});</script>
</body>
 
</html>
<?php
  if(isset($_POST['login12'])){
    // echo "<script>alert('Login successfully')</script>";
     $email=$_POST['email'];
     $pass1=$_POST['password'];
     $sel="select * from `user` where email='$email'";
     $res=mysqli_query($con,$sel);
     $row_ct=mysqli_num_rows($res);
     $row_data=mysqli_fetch_assoc($res); 
     $ip_address=getIPAddress();
     $sel_cart="select * from `cart` where ip_address='$ip_address'";
     $res_cart=mysqli_query($con,$sel_cart);
     $row_ct_cart=mysqli_num_rows($res_cart);
     if($row_ct>0)
     {
      // echo "<script>alert('Login successfully')</script>";
         $_SESSION['email']=$email;
         if(password_verify($pass1,$row_data['password']))
         {
             //echo "<script>alert('Login successfully')</script>";
             if($email=="shahashvi123@gmail.com")
              {
                echo "<script>alert('Login successfully')</script>";
                echo "<script>window.open('./admin/index.php')</script>";
              }
              else{
             if($row_ct==1 and $row_ct_cart==0)
             {
              $_SESSION['email']=$email;
              echo "<script>alert('Login successfully')</script>";
              echo "<script>window.open('products.php','_self')</script>";
             }
             else{
              $_SESSION['email']=$email;
              echo "<script>alert('Login successfully')</script>";
              echo "<script>window.open('payments.php','_self')</script>";
             }
            }
         }
        else
         {
           echo "<script>alert('Invalid credentials')</script>";
         }
     }
     else
     {
         echo "<script>alert('Invalid credentials')</script>";
     }
     }
?>

