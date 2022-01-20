<?php
   include('session1.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>BLOOD DONATION</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}
.container {
  padding: 16px;

}

    body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
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
.head{
  font-size:20px;
  width:50px;
}

select{
  width:200px;
  padding:5px;
  border:2px solid grey;
  border-radius: 5px;
}


</style>
</head>
<body>


  <body>

    <div class="w3-top" >
      <div class="w3-row w3-large w3-black">
        <div class="w3-col s3">
          <a href="index.html" class="w3-button w3-block" >Home</a>
        </div>
           <div class="w3-col s3">
          <a href="contactus.html" class="w3-button w3-block">Contact us</a>
        </div>
        <div class="w3-col s3">
        <a href="profile.php" class="w3-button w3-block">Your profile</a>
        </div>
        </div>


      </div>

<div>
<br><br><br><br>
<div class="card">
<form  action='' method='post' style="border:1px solid #ccc">
 <div class="container" >

 <h2>Do you want to register for blood donation drive?</h2>

 <hr></div>


   <select id='blood' name='blood'>
     <option value='Yes'>YES</option>
     <option value='No'>No</option>
   </select>





    <div class="clearfix">

   <button type="submit" class="signupbtn" name='submit'>CONFIRM YOUR REGISTERATION</button>
 </div>


    </form>
     </div>
</body>
</html>
<?php

 	$maths_marks = false;
	if(isset($_POST['blood'])){
    $maths_marks = $_POST['blood'];
 	}
 	$sql= "UPDATE maths_marks SET blood= '$maths_marks' WHERE id='$login_session' ";

 	if(mysqli_query($db, $sql)){
    echo 'Record was updated successfully.';



	} else {
    echo "ERROR: Could not able to execute $sql. "
                            . mysqli_error($db);
	}


	mysqli_close($db);



?>
