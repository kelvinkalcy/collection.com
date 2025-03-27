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
                 <h1>Get a cool outfit <br>& new style </h1>
                 <p class="suger">Bomper jackets, t-shirts, hoodies, dresses</p>
                  <a href="#" class="btn">SHOP NOW &#8594;</a>
                </div>
               <div class="2">
                  
               </div>
            </div>
         </div>
      </div>
      <!-- featured categories -->
      <div class="small-container js-small-container" id="bomper-jackets">
         <h2 class="title-j">bomper jackets</h2>
         <?php require_once "includes/bomper-jackets.php"; ?>
      </div>
      <!-- hoodies -->
      <div class="small-container">
         <h2 class="title">Hoodies</h2>
         <?php require_once "includes/hoodies.php"; ?>
      </div>
      <!-- sweatshirt dress -->
      <div class="small-container">
         <h2 class="title-j">sweatshirt dresses</h2>

         <?php require_once "includes/sweatshirt.php"; ?>
      </div>
      <!-- watches -->
      <div class="watch"></div>
      <div class="small-container">
         <h2 class="title-j">watch</h2>
        <?php require_once "includes/watch.php";?>
      </div>
      </div>
      <!-- featured products -->
      <div class="small-container">
         <h2 class="title">T-shirts</h2>
        <?php require_once "includes/shirts.php";?>
         <h2 class="title">latest products</h2>
        <?php require_once "includes/latestproducts.php"; ?>
      </div>
      </div>
      <!-- offer -->
      <div class="offer">
         <div class="small-container">
            <div class="row">
               <div class="col-1">
               <img src="images/exclusive.png" class="offer-img" id="bounceImage">
               </div>

               <div class="col-1">
                  <p>Now avilable in our shops</p>
                  <h1>smart band watch</h1>
                  <small>The Smart Watch band has become an important tool for individuals <br>
                  to understand the physical body, construct the technological body <br>
                  and promote the right<br> 
                  of self-determination of the body.</small>
               </div>
            </div>
         </div>
      </div>
      <!-- testimonials -->
      <div class="testimonial">
         <div class="small-container">
            <div class="row">
               <div class="col-6">
                  <i class="fa-solid fa-quote-left"></i>
                  <p>I am looking forward to wearing my <br>new clothes and<br> 
                     shoes. I now have the knowledge and<br> confidence to be <br>
                     able to go through my wardrobe.
                  </p>
                  <div class="rating">
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star-o"></i>
                  </div>
                  <img src="images/user-1.png">
                  <h4>hellen johns</h4>
               </div>
               <div class="col-6">
                  <i class="fa-solid fa-quote-left"></i>
                  <p>Did not spend nearly as much money as<br> I would have had I shopped </p>
                  <div class="rating">
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star-o"></i>
                  </div>
                  <img src="images/user-2.png">
                  <h4>william smith</h4>
               </div>
               <div class="col-6">
                  <i class="fa-solid fa-quote-left"></i>
                  <p>I would recommend a Personal Shopping <br>session to anyone who wants<br> a new wardrobe, regardless of age, <br>occupation, budget or any other factor</p>
                  <div class="rating">
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star"></i>
                     <i class="fa-solid fa-star-o"></i>
                  </div>
                  <img src="images/user-3.png">
                  <h4>elena rastover</h4>
               </div>
            </div>
         </div>
      </div>
      <!-- brands-->
      <div class="brands">
         <div class="small-container">
            <div class="row">
               <div class="col-7">
                  <img src="images/logo-oppo.png">
               </div>
               <div class="col-7">
                  <img src="images/logo-coca-cola.png">
               </div>
               <div class="col-7">
                  <img src="images/logo-paypal.png">
               </div>
               <div class="col-7">
                  <img src="images/logo-godrej.png">
               </div>
               <div class="col-7">
                  <img src="images/logo-philips.png">
               </div>
               <div class="col-7">
                  <img src="images/logo-white.png">
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