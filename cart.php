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
                  <h1>happy <br/> customer</h1>
                  <p>Thank you for shopping with us</p>
                  <a href="/collection/" class="btn">
                     BACK TO SHOP &#8594;
                  </a>
               </div>
               <div class="col-2" style=" margin-top: 40px;" >
                  <img src="images/exitcart.png" >
               </div>
            </div>
         </div>
      </div>
   </br>
      <!-- cart -->
      <div claas="small-container cart-page" style="padding-left: 100px;padding-right: 100px;">
         <table id="shoppingCart">
             <thead>
                 <tr>
                     <th>Product</th>
                     <th>Quantity</th>
                     <th>Subtotal</th>
                 </tr>
             </thead>
             <tbody>
            <?php
               if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
                  $user_id = $_SESSION['user_id'];
                  $getCart = mysqli_query($con, "SELECT * FROM `shopping_cart` WHERE `user_id` = '$user_id'");
               }else{
                  $cookie_id = checkShoppingCartCookie();
                  $getCart = mysqli_query($con, "SELECT * FROM `shopping_cart` WHERE `cookie_id` = '$cookie_id'");
               }
               while($showCart = mysqli_fetch_assoc($getCart)){
            ?>
                 <tr>
                     <td>
                         <div class="cart-info">
                             <img src="<?php echo checkImageFile($showCart['image']); ?>" alt="Yellow Printed T-shirt">
                             <div>
                                 <p><?php echo $showCart['product_name']; ?></p>
                                 <small>Price: Ksh. <?php echo number_format($showCart['price']); ?></small>
                                 <br>
                                 <a href="#" class="remove-item removeCartItem" data-id="<?php echo $showCart['id']; ?>" data-name="<?php echo $showCart['product_name']; ?>">
                                    Remove
                                 </a>
                             </div>
                         </div>
                     </td>
                     <td>
                        <input type="number" class="productQty" name="productQty" value="<?php echo $showCart['quantity']; ?>" min="1" data-id="<?php echo $showCart['id']; ?>">
                     </td>
                     <td>Ksh. <?php echo number_format($showCart['price'] * $showCart['quantity']); ?></td>
                 </tr>
              <?php } ?>
                  <tr>
                     <td>&nbsp;</td>
                     <td>&nbsp;</td>
                     <td>
                        <hr>
                        <?php
                           $getTotal = mysqli_fetch_assoc(mysqli_query($con, "SELECT SUM(`quantity` * `price`) AS total_amount FROM `shopping_cart` WHERE `cookie_id` = '$cookie_id'"));
                        ?>
                        <h2>
                           Total: <?php echo number_format($getTotal['total_amount']); ?><br/>
                           Tax: <?php echo number_format(round(($getTotal['total_amount'] * 0.16),2)); ?> <br/>
                           Final Amount: <?php echo number_format(round(($getTotal['total_amount'] * 1.16),2)); ?>
                        </h2>
                        <hr>
                        <a href="checkout.php" class="btn">
                           CHECKOUT &#8594;
                        </a>
                     </td>
                  </tr>



             </tbody>
         </table>


      </div>
      <!-- footer -->
      <?php require_once 'includes/footer.php'; ?>
      <script src="assets/js/headerslide.js"></script>
      <script src="assets/js/watchbounce.js"></script>
    
      <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script src="assets/js/navigation.js"></script>
      <script src="assets/js/custom.js"></script>
      <script src="assets/js/table-helper.js"></script>
   </body>
</html>