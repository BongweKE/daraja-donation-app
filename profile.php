    <?php
include('session1.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>DONATOR'S PROFILE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.flex-container {
  display: flex;
	overflow: hidden;

}
.flex-container>div {
   background-color:  #e6e6e6
;
  margin: 10px;
  padding: 20px;
  font-size: 30px;
	width:33.3%;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);

  margin: 15px;
  text-align: center;
  font-family: arial;
	overflow:hidden;
}



button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
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
</style>
</head>
<body style='background-color: #e6e6e6
;'>


			<div class="w3-top">
		    <div class="w3-row w3-large w3-black">
		      <div class="w3-col s3">
		        <a href='index.html' class="w3-button w3-block">Home</a>
		      </div>
		         <div class="w3-col s3">
		        <a href="contactus.html" class="w3-button w3-block">Contact us</a>
		      </div>
					<div class="w3-col s3">
				 <a href="donation.php" class="w3-button w3-block">Donate Money</a>
			 </div>
			 <div class="w3-col s3">
      <a href="events.php" class="w3-button w3-block">Events </a>
    </div>



</div>
</div>

<br><br><br>

<?php

 	$sql=" SELECT * FROM account WHERE id='$login_session'";

	$result = mysqli_query($db,$sql);

	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);


	$count = mysqli_num_rows($result);

	  if($count == 1){

			$latest=$row['latest'];
			$total=$row['total'];


			//$sql1="UPDATE maths_marks SET eng_marks='$total' WHERE id='$login_session'";
			//if(mysqli_query($db, $sql1)){
//			} else {
//		    echo "ERROR: Could not able to execute $sql1. "
//		                            . mysqli_error($db);
//			}

}
	else{
		echo "USER ID NOT FOUND";
	}


?>
<div class="flex-container">
  <div>

		<h2 style="text-align:left; margin:15px">User Profile Card</h2>

		<div class="card" style='width:80%'>
		  <img src="profile.jpg" alt="John" style="width:100%">
			<div style='font-size:16px; background-color:beige'>
			ID : <?php echo $row['id'];?><br>
			Username : <?php echo $row['name'];?><br>
			Age : <?php echo $row['age'];?>
		</div>


		</div>
	</div>
  <div>
		<h1 style="text-align:left; margin:15px">Activity</h1>

		<div class="card">
			<div style='font-size:16px;'>
				<h3 style= 'text-align:left;font-size:32px;border-bottom:1px solid black;background-color:#009973'>DONATIONS<h3>

				<p> Latest donation: KES. <?php echo $latest?></p>
				<hr>
				<p>Total donation: KES. <?php echo $total?></p>



		</div>


                    </div>
            </div>
      
  <div>

		<div style='margin-left:-70px; margin-top:82.5px'>


			<div class="card">
				<div style='font-size:16px;'>
					<h3 style= 'text-align:left;font-size:32px;border-bottom:1px solid black;background-color:#009973'>REGISTERED EVENTS<h3>

			<?php if ($row['marathon']=='Yes'){
				echo 'Marathon (22nd Oct)';
			}
				?>
<hr>

			<?php	if ($row['beach']=='Yes'){
				echo 'Beach Cleanup (1st Nov)';
			}
	?><hr>
			<?php	if ($row['blood']=='Yes'){
				echo 'Blood Donation Drive (5th Nov)';
			}
	?>
	<?php if ($row['blood']!='Yes' && $row['beach']!='Yes'&& $row['marathon']!='Yes'){
		echo 'No upcoming events yet Sign up for events';
	}
	?>




			</div>


			</div></div>
	</div>
</div>
<a href='logout.php'><h2 style='color:black;'>LOG OUT</h2></a>

</body>
</html>
