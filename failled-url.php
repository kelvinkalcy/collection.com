<?php
session_start();

include("connection.php");
include("function.php");

?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>kalcy collection</title>
      <link rel="stylesheet" href="style.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
      <script src="https://kit.fontawesome.com/adccbeb138.js" crossorigin="anonymous"></script>
   </head>
   <body>
      <div class="header">
         <div class="container">
            
            <?php include("includes/header.php"); ?>

            <div class="row">
               <div class="col-2">
               	
	               	<div class="alert">
	               		Your transaction failed to complete for some reason
	               </div>

                  <h1>Get a cool outfit <br>& new style </h1>
                  <p>bomper jackets,t-shirts,hoodies,dresses</p>
					<a href="index.php" class="btn">GO TO HOME PAGE &#8594;</a>
					<a href="index.php#bomper-jackets" class="btn">BACK TO SHOPPING &#8594;</a>
               </div>
               <div class="col-2">
                  <img src="images/bomper1.png">
               </div>
            </div>
         </div>
      </div>
  </body>
</html>