<?php
   include('session1.php');

   #Select our user first and get details about them
    $sql=" SELECT * FROM account WHERE id='$login_session'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if($count == 1){
        $total=$row['total'];
    }else{
    echo "user not found";
    }

    $amt=1;
  $phone=254...;
  // first work MPESA API here
  require_once 'pay.php';
  customerMpesaSTKPush($phone,$amt);
  echo "something special";
  sleep(20);

  //then update db like this
  $sql = "UPDATE `account` SET `latest` ='$amt', `total` = '$total'+'$amt' WHERE `account`.`id` = '$login_session'"; 
  if ($result = mysqli_query($db, $sql)) {
    // Free result set
    mysqli_free_result($result);
    mysqli_close($db);
    header("Location: success.php");
    
  } else {
      echo "ERROR: Could not able to execute $sql".mysqli_error($db);
  }
?>