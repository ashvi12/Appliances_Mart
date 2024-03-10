<?php
include('connect.php');
include('com_func.php');
@session_start();
?>
<?php
 $Email = $_SESSION['email'];
 global $con;
$sel="select * from user where email='$Email'";
$res=mysqli_query($con,$sel);
$row=mysqli_fetch_assoc($res);
// $Email=$row['email'];
$Mobile = $row['user_cno'];
// $Name = $row['user_name'];

$key = "test_3c479fe58489f070c81ea358516";
$token = "test_18274944e5dbbc95ba540729f34";
$mojoURL = "test.instamojo.com";


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://$mojoURL/api/1.1/payment-requests/");
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:$key",
                  "X-Auth-Token:$token"));
$payload = Array(
    'purpose' => 'WEB DEVELOPMENT',
    'amount' => total_amt(),
    'phone' => "$Mobile",
    //'buyer_name' => "$Name",
    'redirect_url' => '',
    'send_email' => true,
    'webhook' => '',
    'send_sms' => false,
    'email' => "$Email",
    'allow_repeated_payments' => true
);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch); 
$decode = json_decode($response);

$success = $decode -> success;
if ($success == true)
{

$paymentURL = $decode->payment_request->longurl;

// SQL DATA ENTRY


header("Location:$paymentURL");
exit();

}
else{ echo"$response"; echo"Contact the developer's email ID tv.agathiya@gmail.com with screenshot for technical support";}

?>