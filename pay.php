<?php
$url = "https://7c01-197-232-61-207.ngrok.io";
function generateToken(){
    $consumerKey='*************************';
    $consumerSecret="*******************";
    $credentials = base64_encode('$consumerKey.':'.$consumerSecret)');
    //$credentials = REPLACEMENT;
    $ch = curl_init('https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials');
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Authorization: Basic '.$credentials]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    curl_close($ch);
    $json_decode=json_decode($response);
    $access_token=$json_decode->access_token;
    return $access_token;
}


function customerMpesaSTKPush($phone,$amt)
    {
        date_default_timezone_set("Africa/Nairobi");
        $initiate_url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
        $BusinessShortCode='174379';
        $Timestamp=date('YmdHis');
        $PartyA=$phone;
        //$PartyA='254711601532';
        $CallBackURL='https://sandbox.safaricom.co.ke/mpesa/';
        //$CallBackURL=$url;
        $AccountReference='DONATE';
        $TransactionDesc='GIVE SOME DONATIONS';
        $Amount=$amt;
        $Passkey="bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919";
        $Password=base64_encode($BusinessShortCode.$Passkey.$Timestamp);
        $ch = curl_init('https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest');

        #create an array to be converted to JSON
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

        
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Authorization: Bearer '.generateToken() ,
            'Content-Type: application/json'
        ]);
        curl_setopt($ch, CURLOPT_POST, 1);
        $data_string = json_encode($curl_post_data);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $response     = curl_exec($ch);
        
        $json_decode=json_decode($response);
        curl_close($ch);
        return $json_decode->ResponseCode;
        sleep(15);
    }


//echo customerMpesaSTKPush(254...,1);
//echo generateToken();
?>