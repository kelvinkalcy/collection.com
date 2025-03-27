<?php

session_start();

include("connection.php");
include("function.php");

// check if user is logged in, otherwise redirect to login page

if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {

    $user_id = $_SESSION['user_id'];

    $query = "SELECT sc.product_id, sc.quantity, sc.total_price AS amount FROM shopping_cart sc JOIN products p ON sc.product_id = p.id WHERE sc.user_id = ?";
    $stmt = $con->prepare($query);
    $stmt->bind_param('i', $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    $products = [];
    while ($row = $result->fetch_assoc()) {
        $products[] = [
            'product_id' => $row['product_id'],
            'quantity' => $row['quantity'],
            'amount' => $row['amount']
        ];
    }
    $stmt->close();

    $allProducts = ['products' => $products];
    $products = json_encode($allProducts, JSON_PRETTY_PRINT);

    $transaction_id =  generateTransactionId($con);
    $phone_number   =  getUserPhoneNumber($con);

    $getTotal = mysqli_fetch_assoc(mysqli_query($con, "SELECT SUM(`quantity` * `price`) AS total_amount FROM `shopping_cart` WHERE `user_id` = '$user_id'"));
    $total_amount = round(($getTotal['total_amount'] * 1.16),2);
    $date_time  = date('Y-m-d H:i');
    $status     = "pending";

    $insertData = mysqli_query($con, "INSERT INTO `payments` (`id`, `user_id`, `products`, `total_amount`, `transaction_id`, `date_time`, `status`) VALUES (NULL, '$user_id', '$products', '$total_amount', '$transaction_id', '$date_time', '$status')");

}else{
    header("location: login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Centered Loader</title>
    <style type="text/css">
        /* Centering container */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Full viewport height */
            margin: 0; /* Remove default body margin */
            background-color: #f5f5f5; /* Optional background color */
        }

        /* Loader styles */
        .loader {
            width: 15px;
            aspect-ratio: 1;
            border-radius: 50%;
            animation: l5 1s infinite linear alternate;
        }

        @keyframes l5 {
            0%  {box-shadow: 20px 0 #000, -20px 0 #0002; background: #000 }
            33% {box-shadow: 20px 0 #000, -20px 0 #0002; background: #0002}
            66% {box-shadow: 20px 0 #0002, -20px 0 #000; background: #0002}
            100%{box-shadow: 20px 0 #0002, -20px 0 #000; background: #000 }
        }
    </style>
    <script src="https://raw.githack.com/PAY-HERO-KENYA/payment_button/main/sdk.js"></script>
</head>
<body>
    <!-- <div class="loader"></div> -->
    <div style="display: none;">
        <input type="hidden" name="amount" id="amount" value="<?php echo $total_amount ?>">
        <input type="hidden" name="phone" id="phone" value="<?php echo $phone_number ?>">
        <input type="hidden" name="reference" id="reference" value="<?php echo $transaction_id ?>">
    </div>
    <button type="submit" id="payHero"></button>


<script>

    // Fetch the hidden input values
    const amount = document.getElementById('amount').value;
    const phone = document.getElementById('phone').value;
    const reference = document.getElementById('reference').value;

    PayHero.init({
        paymentUrl: "https://app.payhero.co.ke/lipwa/1064",//use your own lipwa link here
        width: "100%",
        height: "100%",
        containerId: "payHero",
        channelID: 1076, //provide your payment channel ID
        amount: amount, //provide the amount
        phone: phone, //provide the customer phone
        reference: reference,//provide payment reference here
        buttonName: "Complete Payment",//provide button text
        buttonColor: "#00a884", //provide button color
        successUrl: "https://0477-41-90-37-112.ngrok-free.app/collection/success-url.php?reference=" + reference,
        failedUrl: "https://0477-41-90-37-112.ngrok-free.app/collection/failled-url.php"
    });

    setTimeout(() => {
        const payButton = document.getElementById('payHero');
        payButton.click();
    }, 3000);
</script>
</body>
</html>


   
