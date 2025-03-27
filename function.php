    <?php

checkShoppingCartCookie();
updateUserShoppingCart($con);
isUserLoggedIn($con);

function check_login($con)
{

   if(isset($_SESSION["user_id"])){


      $id = $_SESSION["user_id"];
      $query = "select * from users where user_id = '$id' limit 1";
      $result = mysqli_query($con,$query);
      if($result && mysqli_num_rows($result) > 0)
    {

          $user_data =mysqli_fetch_assoc($result);
          return $user_data;
     }else
        {

         //redirect to signup
          header("location: signup.php");
         die;

        }
      }

}

function random_num($length){
   $text = "";
   if($length<5)
   {
   $length = 5;
   }
   $len = rand(4,$length);
   for($i=0; $i<$len; $i++){
      #code...
      $text .= rand(0,9);
   }
   return $text;
}


function productRating($rating) {
    $fullStars = floor($rating);  // Get the number of full stars
    $emptyStars = 5 - $fullStars; // Get the number of empty stars

    $starsHTML = '<div class="rating">';

    // Add full stars
    for ($i = 0; $i < $fullStars; $i++) {
        $starsHTML .= '<i class="fa-solid fa-star"></i>';
    }

    // Add empty stars
    for ($i = 0; $i < $emptyStars; $i++) {
        $starsHTML .= '<i class="fa-regular fa-star"></i>';
    }

    $starsHTML .= '</div>';
    return $starsHTML;
}

function checkImageFile($file_name) {
    // Define the path to the image file
    $file_path = $file_name;

    // Define the default file path
    $default_file = 'images/default-bomber-jacket.webp';

    // Check if the file exists
    if (file_exists($file_path)) {
        // Return the file path if the file exists
        return $file_path;
    } else {
        // Return the default file path if the file does not exist
        return $default_file;
    }
}


function checkShoppingCartCookie() {
    if (isset($_COOKIE['shopping_cart']) && !empty($_COOKIE['shopping_cart'])) {    
        $cart_id = $_COOKIE['shopping_cart'];
    } else {
        $cart_id = time();

        $cookie_name = "shopping_cart";
        $cookie_value = $cart_id;
        $expiry_time = time() + (60 * 60 * 24 * 60);
        setcookie($cookie_name, $cookie_value, $expiry_time, "/");
    }

    return $cart_id;
}

    function updateUserShoppingCart($con){
        if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
            if (isset($_COOKIE['shopping_cart']) && !empty($_COOKIE['shopping_cart'])) {

                $cart_id = $_COOKIE['shopping_cart'];
                $user_id = $_SESSION['user_id'];
                if (mysqli_num_rows(mysqli_query($con, "SELECT * FROM `shopping_cart` WHERE `cookie_id` = '$cart_id'")) > 0) {

                    $updateCart = mysqli_query($con, "UPDATE `shopping_cart` SET `user_id` = '$user_id' WHERE `cookie_id` = '$cart_id'");
                }

            }
        }
    }


function getNextUserId($con){

    if (mysqli_num_rows(mysqli_query($con, "SELECT * FROM `users`")) > 0) {
        $next_id = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM `users` ORDER BY `user_id` DESC LIMIT 1"));
        $user_id = (int) filter_var($next_id['user_id'], FILTER_SANITIZE_NUMBER_INT) + 1;
    } else {
        $user_id = 1000;
    }

    return $user_id;

}

function isUserLoggedIn($con){
    if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {

        $user_id = $_SESSION['user_id'];

        if (mysqli_num_rows(mysqli_query($con, "SELECT * FROM `users` WHERE `user_id` = '$user_id'")) < 1) {

            header("location: logout.php");

        }

    }
}



function getUserPhoneNumber($con){
    if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {

        $user_id = $_SESSION['user_id'];
        $userData = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM `users` WHERE `user_id` = '$user_id'"));

    }else{
        header("location: logout.php");
    }
    return $userData['phone_number'];
}


function randomString($length) {
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
    $alphaLength = strlen($alphabet);
    $pass = '';
    for ($i = 0; $i < $length; $i++) {
        $n = rand(0, $alphaLength - 1);
        $pass .= $alphabet[$n];
    }
    return $pass;
}

function generateTransactionId($con) {
    do {
        $transaction_id = randomString(12);
        $query = "SELECT 1 FROM `payments` WHERE `transaction_id` = ?";
        $stmt = $con->prepare($query);
        $stmt->bind_param('s', $transaction_id);
        $stmt->execute();
        $stmt->store_result();
        $exists = $stmt->num_rows > 0;
        $stmt->close();
    } while ($exists);

    return $transaction_id;
}



