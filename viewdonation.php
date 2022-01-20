<?php
include("config.php");
session_start();
?>
<DOCTYPE html>
<html>
<head>
  <title>DONATIONS </title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>

    p{
        display: none;
        background-color: yellow;
        padding: 2px;
        
    }
    
    div:hover p {
        display: block;
    }


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
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color:#f5f5f5;}

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
         <a href="welcomea.php" class="w3-button w3-block"> Your Profile</a>
         </div>
          </div>
        </div>
        
        
        <div>hello here</div>
        <p>none</p>

        


        


  <br><br><br>

<?php
$sql=" SELECT * FROM maths_marks WHERE id BETWEEN 01 and 99" ;
 echo "<h2>INDIVIDUAL DONATORS:</h2><br><br>";

$result = $db->query($sql);
if ($result->num_rows > 0) {

   while($row = $result->fetch_assoc())
   {

    if ($row['maths_marks']!=0)
    {  echo "<table><tr>";
        echo "<th> ID</th>";
        echo "<th> Name</th>";
        echo "<th> Latest Donation</th>";
        echo "<th> Total Donations</th>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>".$row["id"];
        echo "</td>";
        echo "<td>".$row["name"];
        echo "</td>";
        echo "<td>".$row["maths_marks"];
        echo "</td>";
        echo "<td>".$row["eng_marks"];
        echo "</td>";
        echo "</tr>";
        echo "</table>";
    }
  }}
?>
        
        
        
        
        
        
        </body>
</html>
