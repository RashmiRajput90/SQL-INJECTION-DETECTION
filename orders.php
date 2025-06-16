<?php
include 'connect.php';

session_start();

if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
}else{
    $user_id = '';
}

// Fetch orders from the database
$query = "SELECT * FROM orders WHERE user_id = '$user_id'";
$result = mysqli_query($conn, $query);

if($result && mysqli_num_rows($result) > 0){
    $fetch_orders = mysqli_fetch_assoc($result); // Fetch the first order
} else {
    $fetch_orders = null; // No orders found
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Orders</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'index4.html'; ?>

 <!-- product section start--> 
  <section class="orders" id="orders">
  <section class="orders">
  <section class="about" id="about">
    <h1 class="heading"><span>Placed </span>Orders</h1>


   
</section>

<section class="contact">
    <div class="box-container">
  

    <div class="box"> 
        


<?php if($fetch_orders): ?>
    <p>Placed on: <span><?= htmlspecialchars($fetch_orders['placed_on']); ?></span></p>
    <p>Name: <span><?= htmlspecialchars($fetch_orders['name']); ?></span></p>
    <p>Email: <span><?= htmlspecialchars($fetch_orders['email']); ?></span></p>
    <p>Number: <span><?= htmlspecialchars($fetch_orders['number']); ?></span></p>
    <p>Address: <span><?= htmlspecialchars($fetch_orders['address']); ?></span></p>
    <p>Payment Method: <span><?= htmlspecialchars($fetch_orders['method']); ?></span></p>
    <p>Your Orders: <span><?= htmlspecialchars($fetch_orders['total_products']); ?></span></p>
    <p>Total Price: <span>Rs.<?= htmlspecialchars($fetch_orders['total_price']); ?>/-</span></p>
    <p>
        Payment Status: 
        <span style="color: <?= ($fetch_orders['payment_status'] == 'pending') ? 'red' : 'green'; ?>">
            <?= htmlspecialchars($fetch_orders['payment_status']); ?>
        </span>
    </p>
<?php else: ?>
   
<?php endif; ?>

    </div>

    </div>

  

</section>






<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>