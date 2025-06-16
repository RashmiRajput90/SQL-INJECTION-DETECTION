
<?php
session_start();
include 'connect.php';

if (!isset($_SESSION['user_id'])) {
    header('location:login.php');
    exit();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $number = htmlspecialchars($_POST["number"]);
    $payment = htmlspecialchars($_POST["payment"]);
    $address = htmlspecialchars($_POST["address"]);

    // Store order details (for demonstration, using a simple echo)
    echo "<h2>Order Confirmation</h2>";
    echo "<p>Name: $name</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Phone: $number</p>";
    echo "<p>Payment Method: $payment</p>";
    echo "<p>Address: $address</p>";
    echo "<p>Your order has been placed successfully!</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkout</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { width: 120%; margin: auto; padding: 20px; border: 1px solid #ccc; border-radius: 5px; }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; margin-bottom: 5px; }
        .form-group input, .form-group select { width: 100%; padding: 8px; box-sizing: border-box; }
        .form-group button { width: 100%; padding: 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer; }
        .form-group button:hover { background-color: #45a049; }
    </style>
</head>
<body>
    <?php include 'index4.html'; ?>

 <!-- product section start--> 
  <section class="checkout" id="checkout">
  <section class="checkout">
  <section class="checkout" id="checkout">
    <h1 class="heading"><span>your </span>orders</h1>

    <div class="container">
        <h2>Place Your Order</h2>
        <form action="checkout.php" method="post">
            <div class="form-group">
                <label for="name">Your Name:</label>
 <input type="text" name="name" placeholder="enter your name" class="box" maxlength="20" required>

               
            </div>
            <div class="form-group">
                <label for="email">Your Email:</label>
 <input type="email" name="email" placeholder="enter your email" class="box" maxlength="20" required>

            </div>
            <div class="form-group">
                <label for="number">Your Number:</label>
     <input type="number" name="number" placeholder="enter your number" class="box" min="0" max="9999999999" onkeypress="if(this.value.length == 10) return false;" required>
            </div>
            <div class="form-group">
                <label for="payment">Payment Method:</label>
                <select id="payment" name="payment">
                    <option value="cash_on_delivery">Cash on Delivery</option>
                    <option value="credit_card">Credit Card</option>
                    <option value="debit_card">Debit Card</option>
                    <option value="net_banking">Net Banking</option>
                </select>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>
            </div>
            <div class="form-group">
                <button type="submit">Place Order</button>
            </div>
        </form>


    </div>



    <?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>