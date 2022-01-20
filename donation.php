<?php
   include('session1.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>DONATE</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>

    body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ffff;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;

}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #4CAF50;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}


.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #ddd;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #ddd;
}
.loader {
  border: 16px solid #f3f3f3; /* Light grey */
  border-top: 16px solid #3498db; /* Blue */
  border-radius: 50%;
  width: 120px;
  height: 120px;
  animation: spin 2s linear infinite;
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>
</head>
<body>
  <div class="w3-top">
    <div class="w3-row w3-large w3-black">
      <div class="w3-col s3">
        <a href="index.html" class="w3-button w3-block">Home</a>
      </div>
         <div class="w3-col s3">
        <a href="contactus.html" class="w3-button w3-block">Contact us</a>
      </div>

      <div class="w3-col s3">
     <a href="profile.php" class="w3-button w3-block">Your Profile</a>
     </div>


    </div>
  </div>

  <br>
  <br>
  <div id="mpesa" class="card">
    <img src="mpesa.png" style="max-width:50%; height:auto;" alt="">
  </div>
 <br><br><br>
     <br><br>


     <div id='main' class="card">
    <form  action='' method='post' style="border:1px solid #ccc">
    <div class="container" >
      <p>Enter your PHONE NUMBER (2547.......) </p>
      <hr></div>


       <div class="col-25">
      <input type="text" name="phone"   placeholder="2547......" ><br>
    </div>
      <div class="container" >
      <p>Enter your donation amount</p>
      <hr></div>


       <div class="col-25">
      <input type="number" name="amt"  ><br>
    </div>

       


      <div class="clearfix">

      <input type="submit"  >
      </div>


    </form>



    </div>
            </body>
            </html>
<?php
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
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $amt=mysqli_real_escape_string($db,$_POST['amt']);
  $phone=mysqli_real_escape_string($db,$_POST['phone']);
  // first work MPESA API here
  require_once 'pay.php';
  customerMpesaSTKPush($phone,$amt);
  sleep(20);

  //then update db like this
  //then update db like this
  $sql = "UPDATE `account` SET `latest` ='$amt', `total` = '$total'+'$amt' WHERE `account`.`id` = '$login_session'"; 

  if ($db->query($sql) === TRUE) {
    include 'success.php';
  } else {
    echo "Error updating record: " . $db->error;
  }
  
  $db->close();

}



?>
