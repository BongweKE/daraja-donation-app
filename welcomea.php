<?php
   include('session.php');
?>
<html>
<DOCTYPE html>

<html>
<head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


   <title>ADMIN</title>




<style>

   .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: #000033; 
  border: 2px solid #e6e6ff;
}

.button1:hover {
  background-color: #e6e6ff;
  color: #000033;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}

.button3 {
  background-color: white; 
  color: black; 
  border: 2px solid #f44336;
}

.button3:hover {
  background-color: #f44336;
  color: white;
}

.button4 {
  background-color: white;
  color: black;
  border: 2px solid #e7e7e7;
}

.button4:hover {background-color: #e7e7e7;}

.button5 {
  background-color: white;
  color: black;
  border: 2px solid #555555;
}

.button5:hover {
  background-color: #555555;
  color: white;
}
    
    
    </style>

   </head>

   <body bgcolor = "#FFFFFF">




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

     <br><br><br>


   <body>

    <div class="container">
      <h1>Welcome <?php echo $login_session; ?></h1>
        
        <button class="button button1"><a href="marathonr.php">View Marathon Registrees</a></button>
        <br>
<button class="button button1"><a href="bloodr.php">View Blood donation Drive registers</a></button>
        <br>
    
<button class="button button1"><a href="beachr.php">View Beach Cleanup registrees</a></button>
        <br>
<button class="button button1"><a href="viewdonation.php">View All Donations</a></button>
        <br>
<button class="button button1"><a href="viewall.php">View All Profiles</a><br></button>
    <br>    <button class="button button1"><a href="deleteid.php">Delete Profile</a></button>
        <br>
        <button class="button button1"><a href="addevent.php">Add an event</a></button>
        <br>





      </div>




		<h2><a href = "logoutadmin.php">Sign Out</a></h2>






   </body>
   <table align="center" width="98%" height="5%" border="0">
<tr>
<td align="left"><b><i style="font-family:Old English Text MT"> <font color="orange" size="5px">Consolata Children's Home</font></i></b>
</td>
</tr>
</table>

</html>
