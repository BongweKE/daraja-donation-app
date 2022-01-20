<?php
include("config.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>DELETE Profile</title>
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
</div></div>
    
    <br>
    <br><br><br><br>
    
	<div class="card">
  <form  action='' method='post' style="border:1px solid #ccc">
    <div class="container" >

    </div>


     <div class="col-25">
		<input type="text" name="id" title='ENTER TWO DIGIT ID' pattern='[0-9]{2}'  placeholder="Enter ID of profile to be deleted"><br>
	</div>
      
		  <div class="clearfix">

      <button type="submit" class="signupbtn" name='submit'>Delete Profile</button>
    </div>


       </form>
    </div>
        
          <br><br>
 <div class="card" style="box-shadow: 5px 5px 10px #888888">



      <div style='padding: 10px;'><a href='welcomea.php' style='text-decoration:none; font-size: 16px; color:#00b8e6 ;'>Go Back</a>
  </div>

      </div>


<?php
include("config.php");
$id=filter_input(INPUT_POST,'id');
if($id!=0){
$sql="DELETE FROM maths_marks WHERE id = '$id'";
if(mysqli_query($db, $sql)){
    echo "Record was updated successfully.";
	} else {
    echo "ERROR: Could not able to execute $sql. "
                            . mysqli_error($db);
	}
}
	mysqli_close($db);
?>

</body>
</html>
