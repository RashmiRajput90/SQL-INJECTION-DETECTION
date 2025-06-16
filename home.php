<?php

include 'connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'index1.html'; ?>


<section class="home">

   <div class="content">
      <h3>Fresh Flowers</h3>
      <span> Natural & Beautiful Flowers </span>
      <p>Welcome To Our Site, Where Passion Meets Creativity. Discover A World Of Possibilities As We Bring Your Ideas To Life With Exceptional Craftmanship and Attention To Detail. Whether You are Seeking Inspiration, Quality Products, Or Expert Services, We are Here To Exceed Your Expectations.</p>
      <a href="shop.php" class="btn">shop now</a>
   </div>

</section>

<section class="products">

   <h1 class="heading">latest products</h1>

   <div class="box-container">

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
          <div class="price"> $10.24 <span>$20.89</span></div>
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

      <?php


// Use MySQLi prepared statement instead of PDO
$stmt = $conn->prepare("SELECT * FROM products LIMIT 6");
$stmt->execute();
$result = $stmt->get_result();
$select_products = $result->fetch_all(MYSQLI_ASSOC);

if (count($select_products) > 0) {
    foreach ($select_products as $fetch_products) {
?>
    <form action="" method="POST" class="box">
        <a href="view_page.php?pid=<?php echo $fetch_products['id']; ?>" class="fas fa-eye"></a>
        <div class="price">$<?php echo $fetch_products['price']; ?>/-</div>
        <img src="uploaded_img/<?php echo $fetch_products['image']; ?>"class="image"  alt="" >
        <img src="uploaded_img/<?php echo htmlspecialchars($fetch_products['image']); ?>" alt="" class="image">
        <div class="name"><?php echo $fetch_products['name']; ?></div>
        <input type="number" name="product_quantity" value="1" min="0" class="qty">
        <input type="hidden" name="product_id" value="<?php echo $fetch_products['id']; ?>">
        <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
        <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
        <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
        <input type="submit" value="add to wishlist" name="add_to_wishlist" class="option-btn">
        </form>
        <input type="submit" value="add to cart" name="add_to_cart" class="btn">
    </form>
<?php
    }
} 
?>

   </div>



</section>






<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>