



<?php
include("config.php");
?>


<!DOCTYPE html>
<html>
     <title>Registeration</title>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
   #
    background-image: url('Mother.jpg');



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
.signupbtn{

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



a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

 a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>
  <div class="w3-top">
    <div class="w3-row w3-large w3-black">
      <div class="w3-col s3">
        <a href='index.html' class="w3-button w3-block">Home</a>
      </div>
         <div class="w3-col s3">
        <a href="contactus.html" class="w3-button w3-block">Contact us</a>
      </div>


      </div>


  </div>
<div>
<br><br><br><br>
</div>
<div class="card">
  <form method='post' style="border:1px solid #ccc">
  <div class="container" >
    <h2>Sign Up</h2>
    <hr>    
     <div class="col-25">
       Enter your name
      <input type="text" name="name" title='ONLY ALPHABETS'  placeholder="Enter your name" required><br>
	  </div>
    <div class="col-25">
      Enter Phone number  
    <input type="text" name="phone"  title='ENTER PHONE NUMBER' placeholder="Phone number" required><br>
    </div>   
    <div class="col-25" >
        age <br>
    <input type="number" placeholder="Enter Age" name="age" title='Enter two digit age' pattern='[0-9]{2}' required>	</div>
    <br>
    <div class="col-25">
      Enter password
    <input type="password" placeholder="Enter Password" name="password" required>
    </div>
     <div class="col-25">
       Confirm password
      <input type="password" placeholder="Confirm password" name="Confirm password" required>
    </div>
    <div class="clearfix">
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>
</div>
         <br><br>
 <div class="card" style="box-shadow: 5px 5px 10px #888888">



     <div style='padding: 10px;'>                           Have an Account ?
         <a href='login.php' style='text-decoration:none; font-size: 16px; color:#00b8e6 ;'>Log in</a>
  </div>
      </div>


    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name=filter_input(INPUT_POST,'name');
      $phone=filter_input(INPUT_POST,'phone');
      $age=filter_input(INPUT_POST,'age');
      $password=filter_input(INPUT_POST,'password');
      //if($age>0){
        $sql="INSERT INTO account ( `name`, `age`, `phone`, `password`) VALUES ('$name','$age', '$phone','$password')";

        // Perform query
        if ($result = mysqli_query($db, $sql)) {
          // Free result set
          mysqli_free_result($result);
          mysqli_close($db);
          header("Location: login.php");
        } else {
            echo "ERROR: Could not able to execute $sql".mysqli_error($db);
        }
      //}
    }
?>
</body>
</html>
