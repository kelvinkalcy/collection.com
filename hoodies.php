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
                  <h1>hoodies</h1>
                  <p class="suger">Refresh your weekend wardrobe with our hoodies in all cuts and colors.</br> Discover classic oversized hoodies to stay warm whatever the weather,</br> and graphic printed styles perfect for the skate park. Choose casual zip-up</br> hoodies and pull-on crew-neck sweatshirts for lounging around the house</br> or grabbing a coffee</p>
                  <a href="#" class="btn">SHOP NOW &#8594;</a>
               </div> 
            </div>
         </div>
      </div>
      <!-- hoodies -->
      <div class="small-container">
         <h2 class="title">Hoodies</h2>
         <?php require_once "includes/hoodies.php"; ?>
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