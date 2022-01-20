<?php
   include("config.php");
   session_start();

   ?>
<html>
<head>
  <title>LOGIN PAGE</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>

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


          </div>


        </div>

<div>
<br><br><br><br>
</div>

   <div class="card">
  <form  action='' method='post' style="border:1px solid #ccc">
    <div class="container" >

    <h2>Login</h2>
    <p>Please login in your account.</p>
    <hr></div>


     <div class="col-25">
		<input type="text" name="id" title='ENTER TWO DIGIT ID' pattern='[0-9]{2}'  placeholder="Enter your ID"><br>
	</div>

      <div class="col-25">
    <input type="password" placeholder="Enter Password" name="password" required>
      </div>


       <div class="clearfix">

      <button type="submit" class="loginbtn" name='submit'>login</button>
    </div>


       </form>
        </div>


        <br><br>
 <div class="card" style="box-shadow: 5px 5px 10px #888888">



      <div style='padding: 10px;'>                          Dont have an Account ?
         <a href='signup.php' style='text-decoration:none; font-size: 16px; color:#00b8e6 ;'>Sign Up</a>
  </div>

      </div>
    </body>
   </html>
<?php
         if($_SERVER["REQUEST_METHOD"] == "POST") {
            // username and password sent from form

            $id=mysqli_real_escape_string($db,$_POST['id']);
            $mypassword = mysqli_real_escape_string($db,$_POST['password']);

            $sql = "SELECT id FROM maths_marks WHERE id = '$id' and password = '$mypassword'";
            $result = mysqli_query($db,$sql);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);


            $count = mysqli_num_rows($result);
            // If result matched $myusername and $mypassword, table row must be 1 row
            if($count == 1) {
               //session_register("myusername");
               $_SESSION['login_user'] = $id;
               echo "$id";
               header("location: marathon.php");
            }

         }
      ?>
