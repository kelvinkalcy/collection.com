<?php
   session_start();
   
     include("connection.php");
     include("function.php");
   
        if($_SERVER['REQUEST_METHOD'] == "POST"){
          //something was posted
          $user_name    = $_POST['user_name'];
          $phone_number = $_POST['phone_number'];
          $email        = $_POST['email'];
          $password     = $_POST['password'];
          $confirm_password = $_POST['confirm_password'];
   
          $registration_date = date('Y-m-d H:i');
   
           if ($password != $confirm_password) {
   
               echo "<script>alert('Password does not match!')</script>";
   
           }else if(!empty($user_name) && !empty($password) && !empty($user_name) && !empty($phone_number) && !empty($email)){
            //save to database
            $user_id = getNextUserId($con);
            
            $password = md5($password);
   
            $query = "INSERT INTO users (user_id, user_name, phone_number, email, password, registration_date) values ('$user_id', '$user_name', '$phone_number', '$email', '$password', '$registration_date')";
            $insert_data = mysqli_query($con, $query);
   
            header('location: login.php');
   
          }else
   
          {
           echo "<script>alert('Please enter valid information!')</script>";
          }
         }  
   
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
                  <img src="images/bomper1.png">
               </div>
               <div class="col-2">
                  <div class="form-container">
                     <div class="form-btn">
                        <span >Signup to your account.</span>
                     </div>
                     <form id="loginform" method="POST" action="">
                        <input type="text" placeholder="username" name="user_name" required>
                        <input type="number" placeholder="phone number" name="phone_number" required>
                        <input type="email" placeholder="email" name="email" required>
                        <input type="password" placeholder="password" name="password" required>
                        <input type="password" placeholder="confirm-password" name="confirm_password" required>
                        <button type="submit" class="btn">Sign up</button>
                        <a href="">forgot password</a> |
                         <a href="login.php">Login</a><br><br>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- account page -->
      <!-- footer -->
      <?php require_once 'includes/footer.php'; ?>
      <!-- js for toggle menu -->
      <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
      <script src="assets/js/navigation.js"></script>
   </body>
</html>