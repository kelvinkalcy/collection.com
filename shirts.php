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
                  <img src="images/t shirt header.png">
               </div>
               <div >
                  <h1>Get new <br>fancy& comfortable t-shirts </h1>
                  <p>Our T-shirts are crafted from 100% cotton sourced solely from the region,
                     fostering sustainability and bolstering local communities.
                  </p>
                  <a href="#" class="btn">SHOP NOW &#8594;</a>
               </div>
            </div>
         </div>
      </div>
      <!-- featured products -->
      <div class="small-container">
         <h2 class="title">T-shirts</h2>
         <?php require_once "includes/shirts.php";?>
      </div>
      </div>
      </div>
      <!-- shirt -->
      <div class="shirt">
         <div class="small-container shirt-product">
            <div class="row">
               <div class="col-1">
                  <img src="images/tshirt-2.png" class="offer-img">
               </div>
               <div class="col-1">
                  <p>Now avilable in our shops</p>
                  <h1>About product</h1>
                  <small>Premium Quality Material: The printed cotton T-shirt is made from high-quality <br> 
                  cotton fabric, ensuring durability, comfort, and breathability. It offers a soft <br>
                  and cozy feel against the skin, making it perfect for everyday wear.</small>
                  <br>
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
                  <a href="" class="btn">place orde</a>
               </div>
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