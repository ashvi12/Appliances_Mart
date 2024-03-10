<?php
include('connect.php');
include('com_func.php');
@session_start();

if(isset($_GET['edit_profile']))
{
   $email=$_SESSION['email'];
   $sel="select * from `user` where email='$email'";
   $res=mysqli_query($con,$sel);
   $row_ct=mysqli_fetch_assoc($res);
   $user_id=$row_ct['user_id'];
   $user_name=$row_ct['user_name'];
   $email=$row_ct['email'];
   $user_add=$row_ct['user_add'];
   $user_cno=$row_ct['user_cno'];

if(isset($_POST['update_user']))
{
    
    $update_id=$user_id;
    $user_name=$_POST['user_name'];
    $email=$_POST['email'];
    $user_add=$_POST['user_add'];
    $user_cno=$_POST['user_cno'];
    $update="update `user` set user_name='$user_name', email='$email', user_add='$user_add', user_cno='$user_cno' where user_id=$update_id";
    $res_update=mysqli_query($con,$update);
    if($res_update)
    {
        echo "<script>alert('Data Updated')</script>";
        echo "<script>window.open('user_logout.php')</script>";
    }
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.min.js"></script>
    <title>Edit Profile</title>
<style>
body {
    background: rgb(99, 39, 120)
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}
</style>
</head>
<body>
    <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-8 border-right">
            <div class="p-3 py-5">
                <div class="form-outline mb-4 w-50 m-auto">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Edit Profile</h4>
                </div>
            <form action="" method="post" enctype="multipart/form-data">
                <label for="product_title" class="form-label">Username</label>
                <input type="text" name="user_name" id="user_name" class="form-control" placeholder="Enter Username" value="<?php echo $user_name?>" required="required">
            </div>

            <div class="form-outline mb-4 w-50 m-auto">
                <label for="description" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter email" value="<?php echo $email?>" required="required">
            </div>

            <div class="form-outline mb-4 w-50 m-auto">
                <label for="keyword" class="form-label">Address</label>
                <input type="text" name="user_add" id="user_add" class="form-control" placeholder="Enter Address" value="<?php echo $user_add?>" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="keyword" class="form-label">Contact No</label>
                <input type="text" name="user_cno" id="user_cno" class="form-control" placeholder="Enter Contact No" value="<?php echo $user_cno?>" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="update_user" class="btn btn-info mb-3 px-3" value="Save">
            </div>
        </form>
    </div>
           
</div>
</div>
</body>
</html>

