<?php
   include('config.php');
?>
<html>
  <head>
      <script>
            var element = document.getElementById("main");
            element.style.display = "none";
      </script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
  </head>
    <style>
      body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
      }
        h1 {
          color: #88B04B;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
      }
    </style>
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
      <div class="card">
      <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
        <i class="checkmark">✓</i>
      </div>
        <h1>Success!!</h1> 
        <p>You have donated:<br/>MPESA will send you a text shortly</p>
      </div>
    </body>
</html>