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
               <div class="intro">
                  <h1>sweatshirts</h1>
                  <p class="suger">bomper jackets,t-shirts,hoodies,dresses Show your casual </br>'drobe some lovin' in a sweatshirt dress this season! We've got </br>all the understated sweater dress styles you need to nail the athleisure trend.</p>
                  <a href="#" class="btn">SHOP NOW &#8594;</a>
               </div>
               <div class="col-2">
                 
               </div>
            </div>
         </div>
      </div>
      <!-- sweatshirt dress -->
      <div class="small-container">
         <h2 class="title-j">sweatshirt dresses</h2>
        <?php require_once "includes/dresses.php"; ?>
      </div>
      <!-- single product dress-->
      <div class="small-container single-product">
         <div class="row">
            <div class="col-2">
               <img src ="images/mini1.png"width="85%">
            </div>
            <div class="col-2">
               <p>mini manon sweatshirt</p>
               <h1>COLOR: LIGHT HEATHER GREY</h1>
               <h4>ksh 2,800</h4>
               <select >
                  <option>select size</option>
                  <option>XL</option>
                  <option>L</option>
                  <option>M</option>
                  <option>S</option>
                  <option>XS</option>
                  <option>3T</option>
               </select>
               <input type="number" value="1">
               <a href="" class="btn">place order</a>
               <h3>product details </h3>
               <br>
               <p >This mini style is made from our medium-weight Luxe Terry fabric and has a soft and drapey fit.</p>
            </div>
         </div>
      </div>
      <!-- footer -->
      <?php require_once 'includes/footer.php'; ?>
       <script src="assets/js/headerslide.js"></script>
   <script src="assets/js/watchbounce.js"></script>
      <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script src="assets/js/navigation.js"></script>
      <script src="assets/js/custom.js"></script>
   </body>
</html>