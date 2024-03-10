<?php
include('connect.php');
//include('com_func.php');
@session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
      $email=$_SESSION['email'];
      $sel="select * from `user` where email='$email'";
      $res=mysqli_query($con,$sel);
      $row_fetch=mysqli_fetch_assoc($res);
      $user_id=$row_fetch['user_id'];
    //  echo $user_id;
  ?>
<div class="row">
                   <div class="col-md-12">
 <table class="table">
  <thead class="bg-dark text-light">
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
  <tbody class="">
  <?php
      $get="select * from `orders` where user_id=$user_id";
      $res1=mysqli_query($con,$get);
      $no=1;
      while($row=mysqli_fetch_assoc($res1))
      {
        $order_id=$row['order_id'];
        $amount_due=$row['amount_due'];
        $invoice_no=$row['invoice_no'];
        $total_products=$row['total_products'];
        $order_date=$row['order_date'];
        $order_status=$row['order_status'];
        if($order_status=='pending')
        {
          $order_status="Incomplete";
        }
        else{
          $order_status="Complete";
        }
          
        echo"
        <tr>
        <th scope='row'>$no</th>
        <td>$amount_due</td>
        <td>$total_products</td>
        <td>$invoice_no</td>
        <td>$order_date</td>
        <td>$order_status</td>
        <td><a href='confirm_payment.php'>Confirm</a></td>
      </tr>
        ";
        $no++;
      }
  ?>
   
  </tbody>
</table>


</div>
    </div>   
</body>
</html>