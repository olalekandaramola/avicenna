<?php
session_start();
$_SESSION['statusnye'] = 'Paid';

if(isset($_SESSION['paye-email'])){
$email = $_SESSION['paye-email'];
$curl = curl_init();

$amount = 500000;  //the amount in kobo

// url to go to after payment
$callback_url = "http://localhost/avicenna/xiyrbcnhgxbnqwzxc.php?pay=' '";  

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.paystack.co/transaction/initialize",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode([
    'amount'=>$amount,
    'email'=>$email,
    'callback_url' => $callback_url,
    // 'subaccount' => $subaccount
  ]),
  CURLOPT_HTTPHEADER => [
    "authorization: Bearer sk_test_3492833154c9a7c8f3573c4f9b35c2af4f4530fe", 
    "content-type: application/json",
    "cache-control: no-cache"
  ],
));

$response = curl_exec($curl);
$err = curl_error($curl);

if($err){
  // there was an error contacting the Paystack API
  die('Curl returned error: ' . $err);
}

$tranx = json_decode($response, true);

if(!$tranx['status']){
  // there was an error from the API
  print_r('API returned error: ' . $tranx['message']);
}


print_r($tranx);

header('Location: ' . $tranx['data']['authorization_url']);
} else{
    echo "Sorry! you are not supposed to be here.";
}

?>