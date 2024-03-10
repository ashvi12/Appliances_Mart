

<?php
    include('connect.php');
    @session_start();

    function getProducts()
    {
        
        $no=0;
            if(isset($_GET['page']))
            {
                $page=$_GET['page'];
            }
            else
            {
                $page=1;
            }
       
            $num_per_page=6;
            $start_from=($page-1)*6;
           global $con;
           $sel="select * from `products` order by rand() limit $start_from,$num_per_page";
           $res=mysqli_query($con,$sel);
           while($row=mysqli_fetch_assoc($res))
           {
               $prod_id=$row['prod_id'];
               $prod_name=$row['prod_name'];
               $prod_desc=$row['prod_desc'];
               $p_img1=$row['p_img1'];
                $category_id=$row['category_id'];
                $brand_id=$row['brand_id'];
                $prod_price=$row['prod_price'];
           echo "<div class='col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1 mb-3'>
           <div class='h-100 card filter_data'>
     <img class='card-img-top c_img' src='./images/$p_img1' alt='$prod_name'>
     <div class='card-body'>
           <h5 class='card-title'>$prod_name</h5>
       <p class='card-text'>$prod_desc</p>
       <p class='card-text'>Price:$prod_price Rs</p>
       <a href='products.php?cart=$prod_id' class='btn btn-success'>Add to cart</a>
       <a href='viewmore.php?product_id=$prod_id' name='viewmore' class='btn btn-dark'>View more</a>
       </div>
       </div>
       </div>";
       }
      echo" <nav class='app-pagination mt-5'>
                    <ul class='pagination justify-content-center'>";

 $sel2="select * from `products`";
 $res2=mysqli_query($con,$sel2);
 $total_records1= mysqli_num_rows($res2);
 $total_pages1=ceil($total_records1/$num_per_page);
 
if($page>1)
{
    echo "<a href='products.php?page=".($page-1)."' class='btn btn-outline-dark'>Previous</a>";
    
}
 for($i=1;$i<$total_pages1;$i++)
 {
    echo "<a href='products.php?page=".$i."' class='btn btn-outline-dark'>".$i."</a>";
 }
 if($i>$page)
{
    echo "<a href='products.php?page=".($page+1)."' class='btn btn-outline-dark'>Next</a>";
    
}


echo "</ul>
</nav>";
}

//admin insert brand
function getBrands()
{
    global $con;
    if(isset($_POST['insert_brand']))
{
    $brand_name=$_POST['brand_name'];
    $select_query="select * from `brands` where brand_name='$brand_name'";
    $result_select=mysqli_query($con,$select_query);
    $number=mysqli_num_rows($result_select);
    if($number>0)
    {
        echo "<script>alert('This Brand is already present')</script>";
    }
    else{
    $insert_query="insert into `brands` (brand_name) values ('$brand_name')";
    $result=mysqli_query($con, $insert_query);
    if($result)
    {
        echo "<script>alert('Brand has been inserted successfully')</script>";
    }
}
}
}

//admin insert categories
function getcat()
{
    global $con;
    if(isset($_POST['insert_cat']))
{
    // echo "<script>alert('This category is already present')</script>";
    $category_name=$_POST['cat_name'];
    $select_query="select * from `categories` where category_name='$category_name'";
    $result_select=mysqli_query($con,$select_query);
    $number=mysqli_num_rows($result_select);
    if($number>0)
    {
        echo "<script>alert('This category is already present')</script>";
    }
    else{
    $insert_query="insert into `categories` (category_name) values ('$category_name')";
    $result=mysqli_query($con, $insert_query);
    if($result)
    {
        echo "<script>alert('Category has been inserted successfully')</script>";
        echo"<script>window.open('categories.php','_self')</script>";
    }
}
} 
}

function search_product()
{
	global $con;
    if(isset($_GET['search'])){
		$search_data=$_GET['search_data'];
    $search="select * from `products` where prod_keywords like '%$search_data%'";
		$res=mysqli_query($con,$search);
		$num=mysqli_num_rows($res);
		if($num==0)
		{
			echo"<h2 class='text-center text-danger'>No product found!</h2>";
		}
		while($row=mysqli_fetch_assoc($res))
		{
			
            $prod_id=$row['prod_id'];
            $prod_name=$row['prod_name'];
            $prod_desc=$row['prod_desc'];
            $p_img1=$row['p_img1'];
             $category_id=$row['category_id'];
             $brand_id=$row['brand_id'];
             $prod_price=$row['prod_price'];
        echo "<div class='col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1 mb-3'>
        <div class='h-100 card filter_data'>
  <img class='card-img-top c_img' src='./admin/product_images/$p_img1' alt='$prod_name'>
  <div class='card-body'>
        <h5 class='card-title'>$prod_name</h5>
    <p class='card-text'>$prod_desc</p>
    <p class='card-text'>Price:$prod_price Rs</p>
    <a href='products.php?cart=$prod_id' class='btn btn-success'>Add to cart</a>
    <a href='product_details.php?product_id=$prod_id' class='btn btn-dark'>View more</a>
    </div>
    </div>
    </div>";
        }
		}
	}

    function getIPAddress() {  
        //whether ip is from the share internet  
         if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                    $ip = $_SERVER['HTTP_CLIENT_IP'];  
            }  
        //whether ip is from the proxy  
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
         }  
    //whether ip is from the remote address  
        else{  
                 $ip = $_SERVER['REMOTE_ADDR'];  
         }  
         return $ip;  
    }  
    // $ip = getIPAddress();  
    // echo 'User Real IP Address - '.$ip;  

//cart functionality
function cart()
{
	if(isset($_GET['cart']))
	{
		global $con;
		$ip = getIPAddress();  
		$get_prodId=$_GET['cart'];
		$sel="select * from `cart` where ip_address='$ip' and product_id=$get_prodId";
		$res=mysqli_query($con,$sel);
		$num=mysqli_num_rows($res);
		if($num>0)
		{
			echo"<script>alert('This product is already present in cart')</script>";
			echo"<script>window.open('products.php','_self')</script>";
		}
		else
		{
			$insert="insert into `cart` (product_id,ip_address,quantity) values($get_prodId,'$ip',1)";
			$res=mysqli_query($con,$insert);
			echo"<script>alert('Product is added to cart')</script>";
			echo"<script>window.open('products.php','_self')</script>";
		}

	}
}

//function to count items added in cart
function Cart_NoItems()
{
	if(isset($_GET['cart']))
	{
		global $con;
		$ip = getIPAddress();  
		$sel="select * from `cart` where ip_address='$ip'";
		$res=mysqli_query($con,$sel);
		$count=mysqli_num_rows($res);
	}
		else
		{
			global $con;
		$ip = getIPAddress();  
		$sel="select * from `cart` where ip_address='$ip'";
		$res=mysqli_query($con,$sel);
		$count=mysqli_num_rows($res);
		}
		echo $count;

	}

//Total Cart Amount
function TotalCartAmount()
{
	global $con;
	$ip = getIPAddress(); 
	$total=0;
	$sel="select * from `cart` where ip_address='$ip'";
	$res=mysqli_query($con,$sel);
	while($row=mysqli_fetch_array($res))
	{
		$prod_id=$row['product_id'];
		$sel_pr="select * from `products` where prod_id=$prod_id";
		$res_pr=mysqli_query($con,$sel_pr);
		while($row_price=mysqli_fetch_array($res_pr))
		{
			$prod_price=array($row_price['prod_price']);
			$prod_priceSum=array_sum($prod_price);
			$total+=$prod_priceSum;
		}

	}
	echo $total;
}

function getOrderDetails()
{
   // echo "<script>alert('hello');</script>";
    global $con;
    $email=$_SESSION['email'];
    $sel_order="select * from `user` where email='$email'";
    $res_order=mysqli_query($con,$sel_order);
    while($row_query=mysqli_fetch_array($res_order))
    {
       
        if(!isset($_GET['edit_profile']))
        {
            $user_id=$row_query['user_id'];
            $get_orders="select * from `orders` where user_id=$user_id and order_status='pending'";
            $res_orders=mysqli_query($con,$get_orders);
            $row_count=mysqli_num_rows($res_orders);
            if($row_count>0)
            {
                echo "<h3 class='text-center'>You have <span class='text-danger'>$row_count</span> Pending Orders</h3>
                <p class='text-center'><a href='profile.php?my_orders' class='text-dark'>Order Details</a></p>";
            }
            else{
                echo "<h3 class='text-center'>You have zero pending orders</h3>
                <p class='text-center'><a href='products.php?my_orders' class='text-dark'>Explore Products</a></p>";
            }
        }
    }

}
function total_amt()
{
    global $con;
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
return $subtotal;
}
?>

