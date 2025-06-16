<?php

include 'connect.php';

session_start();


if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

// Establish database connection
$conn = new mysqli("localhost", "root", "", "sho_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Debugging: Ensure connection is established
if (!$conn) {
    die("Database connection failed.");
}

// Ensure variables exist before accessing them
if (isset($yourVariable['key'])) {
    echo $yourVariable['key'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>shop</title>

   <!-- Font Awesome CDN Link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- Custom CSS File -->
   <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include 'index3.html'; ?>



 <!-- product section start--> 
  <section class="products" id="product">
  <section class="products">
  <section class="about" id="about">
    <h1 class="heading"><span>Latest </span>Products</h1>

 
<!-- content -->
 <div class="box-container"></div>
    <!-- products -->
    <div class="card_container">
      <!-- card-1 -->
      <div class="card">
        <span class="discount">-20%</span>
        <div class="card_img">
          <img src="img1.webp">
          <div class="icons">
            <a href="#" class="fa-solid fa-heart"></a>
            <a href="#" class="card_btn">add to cart</a>
            <a href="#" class="fa-solid fa-share"></a>
          </div>
        </div>
        <div class="content">
          <h3>flower</h3>
          <div class="price">$10.24 <span>$20.89</span></div>
        </div>
      </div>
      <!-- card-2 -->
      <div class="card">
        <span class="discount">-5%</span>
        <div class="card_img">
          <img src="img2.webp">
          <div class="icons">
            <a href="#" class="fa-solid fa-heart"></a>
            <a href="#" class="card_btn">add to cart</a>
            <a href="#" class="fa-solid fa-share"></a>
          </div>
        </div>
        <div class="content">
          <h3>flower</h3>
          <div class="price">$10.24 <span>$20.89</span></div>
        </div>
      </div>
      <!-- card-3 -->
      <div class="card">
        <span class="discount">-15%</span>
        <div class="card_img">
          <img src="img3.webp">
          <div class="icons">
            <a href="#" class="fa-solid fa-heart"></a>
            <a href="#" class="card_btn">add to cart</a>
            <a href="#" class="fa-solid fa-share"></a>
          </div>
        </div>
        <div class="content">
          <h3>flower</h3>
          <div class="price">$10.24 <span>$20.89</span></div>
        </div>
      </div>
      <!-- card-4 -->
      <div class="card">
        <span class="discount">-10%</span>
        <div class="card_img">
          <img src="img4.webp">
          <div class="icons">
            <a href="#" class="fa-solid fa-heart"></a>
            <a href="#" class="card_btn">add to cart</a>
            <a href="#" class="fa-solid fa-share"></a>
          </div>
        </div>
        <div class="content">
          <h3>flower</h3>
          <div class="price">$10.24 <span>$20.89</span></div>
        </div>
      </div>
      <!-- card-5 -->
      <div class="card">
        <span class="discount">-18%</span>
        <div class="card_img">
          <img src="img5.avif">
          <div class="icons">
            <a href="#" class="fa-solid fa-heart"></a>
            <a href="#" class="card_btn">add to cart</a>
            <a href="#" class="fa-solid fa-share"></a>
          </div>
        </div>
        <div class="content">
          <h3>flower</h3>
          <div class="price">$10.24 <span>$20.89</span></div>
        </div>
      </div>
      <!-- card-6 -->
      <div class="card">
        <span class="discount">-12%</span>
        <div class="card_img">
          <img src="img6.jpg">
          <div class="icons">
            <a href="#" class="fa-solid fa-heart"></a>
            <a href="#" class="card_btn">add to cart</a>
            <a href="#" class="fa-solid fa-share"></a>
          </div>
        </div>
        <div class="content">
          <h3>flower</h3>
          <div class="price">$10.24 <span>$20.89</span></div>
        </div>
      </div>
      <!-- card-7 -->
      <div class="card">
        <span class="discount">-8%</span>
        <div class="card_img">
          <img src="img7.webp">
          <div class="icons">
            <a href="#" class="fa-solid fa-heart"></a>
            <a href="#" class="card_btn">add to cart</a>
            <a href="#" class="fa-solid fa-share"></a>
          </div>
        </div>
        <div class="content">
          <h3>flower</h3>
          <div class="price">$10.24 <span>$20.89</span></div>
        </div>
      </div>
      <!-- card-8 -->
      <div class="card">
        <span class="discount">-19%</span>
        <div class="card_img">
          <img src="img8.avif">
          <div class="icons">
            <a href="#" class="fa-solid fa-heart"></a>
            <a href="#" class="card_btn">add to cart</a>
            <a href="#" class="fa-solid fa-share"></a>
          </div>
        </div>
        <div class="content">
          <h3>flower</h3>
          <div class="price">$10.24 <span>$20.89</span></div>
        </div>
      </div>

    </div>
  </section>
  <!-- product section end -->
    <?php
    
        // Check if $conn is properly initialized before query execution
        if ($conn) {
            $select_orders = mysqli_query($conn, "SELECT * FROM `orders` WHERE user_id = '$user_id'") or die('Query failed');
            
            if (mysqli_num_rows($select_orders) > 0) {
                while ($fetch_orders = mysqli_fetch_assoc($select_orders)) {
    ?>
    <div class="box">
        <p>Placed on: <span><?php echo $fetch_orders['placed_on']; ?></span></p>
        <p>Name: <span><?php echo $fetch_orders['name']; ?></span></p>
        <p>Number: <span><?php echo $fetch_orders['number']; ?></span></p>
        <p>Email: <span><?php echo $fetch_orders['email']; ?></span></p>
        <p>Address: <span><?php echo $fetch_orders['address']; ?></span></p>
        <p>Payment Method: <span><?php echo $fetch_orders['method']; ?></span></p>
        <p>Your Orders: <span><?php echo $fetch_orders['total_products']; ?></span></p>
        <p>Total Price: <span>$<?php echo $fetch_orders['total_price']; ?>/-</span></p>
        <p>Payment Status: <span style="color:<?php echo ($fetch_orders['payment_status'] == 'pending') ? 'tomato' : 'green'; ?>"><?php echo $fetch_orders['payment_status']; ?></span></p>
    </div>
    <?php
                }
            } 
        } else {
            echo '<p class="error">Database connection error!</p>';
        }
    ?>
    
    </div>

</section>
<?php include 'footer.php'; ?>

<script src="js/script.js"></script>
</body>
</html>
