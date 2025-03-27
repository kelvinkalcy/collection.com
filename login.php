<?php
session_start();

include("connection.php");
include("function.php");

   if($_SERVER['REQUEST_METHOD'] == "POST"){
     //something was posted
     $user_name = $_POST['user_name'];
     $password = md5($_POST['password']);
    
     if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
     {
       //read from database
       $user_id = random_num(20);
       $query = "SELECT * FROM `users` WHERE user_name = '$user_name'";
       $result = mysqli_query($con, $query);
        if($result)
        {
          if($result && mysqli_num_rows($result) > 0)
          {
               $user_data = mysqli_fetch_assoc($result);
               if($user_data['password'] == $password)
            {
          
              $_SESSION['user_id'] =  $user_data['user_id'];
              header('location: index.php');
            }else{
                echo "<script>alert('wrong user name or password!')</script>";
            } 
                          
          }else{
            echo "<script>alert('wrong user name or password!')</script>";
          }  
        }else{
        echo "<script>alert('wrong user name or password!')</script>";

      }
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
            <div class="row">
               <div class="col-2">
               </div>
               <div class="col-2">
                <div class="form-container">
                    <div class="form-btn">
                        <span >Login to your account.</span>
                    </div>
                    <form id="loginform" method="POST" action="">
                        <input type="text" placeholder="username" name="user_name" required>
                        <input type="password" placeholder="password" name="password" required>
                        <button type="submit" class="btn">login</button>
                        <a href="">forgot password</a> |
                        <a href="signup.php">Signup</a><br><br>
                    </form>
                </div>
            </div>
            </div>
         </div>
      </div>
         <?php require_once 'includes/footer.php'; ?>
<!-- js for toggle menu -->
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="assets/js/navigation.js"></script>

</body>
</html>