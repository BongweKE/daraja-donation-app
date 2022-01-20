<?php
#$ch = 
#curl_setopt($ch, CURLOPT_HTTPHEADER, ['Authorization: Bearer *****************************************'==']);
#curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
#$response = curl_exec($ch);
#curl_close($ch);
#echo $response;
$consumerKey='*************************';
$consumerSecret=' *********************';
$credentials = base64_encode($consumerKey.':'.$consumerSecret);


//access token
$CallBackURL='http://7c01-197-232-61-207.ngrok.io/final/';
$consumerKey='*************************';
$consumerSecret="*******************";
$headers=['Content-Type:applican/json; charset-utf8'];
function generateToken(){
  $accesstokenurl = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
  $curl = curl_init($accesstokenurl);
  $credentials = base64_encode($consumerKey);
  curl_setopt($curl, CURLOPT_HTTPHEADER, ['Authorization: Basic '.$credentials]); //setting a custom header
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  $curl_response = curl_exec($curl);
  
  //additions
  $json_decode=json_decode($curl_response);
  $access_token=$json_decode->access_token;
  echo $credentials;
  curl_close($curl);
}

function customerMpesaSTKPush($phone, $amt){
    date_default_timezone_set("Africa/Nairobi");
    $initiate_url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
    $ch = curl_init($initiate_url);

    $BusinessShortCode='174379';
    $Timestamp=date('YmdHis');
    $PartyA=$phone;
    $AccountReference='DONATE';
    $TransactionDesc='Give funds';
    $Amount=$amt;
    $Passkey='bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';
    $Password=base64_encode($BusinessShortCode.$Passkey.$Timestamp);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Authorization: Bearer ************************************'==',
        'Content-Type: application/json'
    ]);
    curl_setopt($ch, CURLOPT_POST, 1);
    $curl_post_data = array(
        //Fill in the request parameters with valid values
        'BusinessShortCode' => $BusinessShortCode,
        'Password' =>$Password,
        'Timestamp' => $Timestamp,
        'TransactionType' => 'CustomerPayBillOnline',
        'Amount' =>$Amount,
        'PartyA' =>$PartyA,
        'PartyB' =>$BusinessShortCode,
        'PhoneNumber' =>$PartyA,
        'CallBackURL' =>$CallBackURL,
    // 'CallBackURL' => 'https://ip_address:port/callback',
        'AccountReference' =>$AccountReference,
        'TransactionDesc' =>$TransactionDesc,
    );
    $data_string = json_encode($curl_post_data);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response     = curl_exec($ch);
    curl_close($ch);
    return $response;
}
generateToken();

?>