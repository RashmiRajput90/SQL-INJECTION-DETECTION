<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SQL INJECTION DETECTION</title>
  <link rel="stylesheet" href="Styles.css">
  <!-- font awesome cdn link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <!-- header section start -->
  <header>
    <!-- input -->
    <input type="checkbox" name="" id="toggler">
    <label for="toggler" class="fa fa-bars"></label>

    <a href="#" class="logo">Fleurissant <span>&#127801;</span></a>
    <nav class="navbar">
      <a href="home.php">Home</a>
      <a href="about.php">About</a>
      <a href="shop.php">shop</a>
      <a href="orders.php">orders</a>
      <a href="contact.php">Contact</a>
    </nav>

    <div class="icons">
      <a href="#" id="heart-icon" class="fas fa-heart"></a>
      <a href="cart.php" id="cart-icon" class="fa-solid fa-cart-shopping"></a>
      <a href="register.php" id="user-icon" class="fa-solid fa-user"></a>
    </div>
    <?php if (isset($_SESSION['username'])): ?>
      <div class="welcome-message">
        Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!
      </div>
    <?php endif; ?>
  </header>
  <!-- header section end -->

  <!-- home section starts -->
  <section class="home" id="home">
    <div class="content">
      <h3>Fresh Flowers</h3>
      <span>Natural & Beautiful Flowers</span>
      <p>Welcome to our site, where passion meets creativity. Discover a world of possibilities as we bring your ideas 
        to life with exceptional craftsmanship and attention to detail.Whether you're seeking inspiration, quality products,
         or expert services, we're here to exceed your expectations.</p>
      <a href="#" class="btn">Shop now</a>

    </div>
  </section>
  <!-- home section end -->

  <!-- about section start -->
  <section class="about" id="about">
    <h1 class="heading"><span>about </span>us</h1>

    <div class="row">
      <!-- video -->
      <div class="video_container">
        <video src="video.mp4" loop autoplay muted></video>
        <h3>best flower sellers</h3>
      </div>

      <!-- content -->
      <div class="content">
        <h3>Why Choose Us?</h3>
<p>We are dedicated to delivering exceptional quality and unmatched service. Our team of experts goes
   above and beyond to ensure your satisfaction, providing innovative solutions tailored to your needs.
    With a commitment to excellence, we strive to exceed your expectations every step of the way.</p>
<p>Choose us for our passion, reliability, and personalized approach. We believe in building lasting 
  relationships with our clients, offering support and guidance to help you achieve your goals. Trust 
  us to bring your vision to life with professionalism and creativity.</p>

        <a href="contact.php" class="btn">contact us</a>
      </div>
    </div>

  </section>
  <!-- about section end -->

  <!-- /* icons section start */ 
  <section class="icons_container">
    <!-- icons-1 
    <div class="icons">
      <i class="fa-solid fa-cart-shopping"></i>
      <div class="info">
        <h3>Free delivery</h3>
        <span>on all orders</span>
      </div>
    </div>

    <!-- icons-2 
    <div class="icons">
      <i class="fa-solid fa-sack-dollar"></i>
      <div class="info">
        <h3>14 days returns</h3>
        <span>Money-Back Guarantee</span>
      </div>
    </div>

    <!-- icons-3 
    <div class="icons">
      <i class="fa-solid fa-gift"></i>
      <div class="info">
        <h3>offer & gifts</h3>
        <span>on all orders</span>
      </div>
    </div>

    <!-- icons-4 
    <div class="icons">
      <i class="fa-solid fa-money-check-dollar"></i>
      <div class="info">
        <h3>secure payment</h3>
        <span>protected by paypal</span>
      </div>
    </div>



  </section>
  <!-- icons section end -->

  <!-- product section start -->
  <section class="products" id="product">
    <h1 class="heading">Latest <span>Products</span></h1>
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

  <!-- review section start -->
  <section class="review" id="review">
    <h1 class="heading">Customer's <span>Review</span></h1>

    <div class="card_container">
      <!-- customer-1 -->
      <div class="card">
        <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
        </div>
        <p>“I had an amazing experience with this service! The team went above and 
          beyond to ensure everything was perfect. Their attention to detail and customer-first approach
           truly sets them apart. From start to finish, I felt taken care of and confident in their expertise. 
           Highly recommend to anyone looking for top-notch quality and exceptional service!”</p>

        <div class="user">
          <img src="pic1.jpg">
          <div class="user_info">
            <h3>James</h3>
            <span>Happy Customer</span>
          </div>
        </div>
        <i class="fa-solid fa-quote-right"></i>
      </div>

      <!-- customer-2 -->
      <div class="card">
        <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
        </div>
        <p>“I am beyond impressed with the exceptional service I received! From the moment I reached out, 
          the team was attentive, knowledgeable, and eager to ensure my needs were met. They took the time 
          to understand my vision and delivered results that exceeded my expectations. </p>

        <div class="user">
          <img src="pic2.webp">
          <div class="user_info">
            <h3>Kingston</h3>
            <span>happy customer</span>
          </div>
        </div>
        <i class="fa-solid fa-quote-right"></i>
      </div>
    <!-- customer-3 -->
    <div class="card">
      <div class="stars">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
      </div>
               <p>“I’m so glad I chose to shop here! The experience was smooth, and the customer service was excellent
           from start to finish. The products I purchased exceeded my expectations in both quality and value. 
           The team was incredibly responsive and helped me every step of the way. It’s clear they truly care about
            their customers!"</p>
        </p>
      <div class="user">
        <img src="pic3.avif">
        <div class="user_info">
          <h3>Zara</h3>
          <span>Happy Customer</span>
        </div>
      </div>
      <i class="fa-solid fa-quote-right"></i>
    </div>

 </div>

  </section>
  <!-- review section end -->

  <!-- contact section start -->
  <section class="contact" id="contact">

    <h1 class="heading"><span> contact</span> us</h1>

    <div class="row">

      <form action="">
        <input type="text" placeholder="Name" class="card">
        <input type="email" placeholder="Email" class="card">
        <input type="number" placeholder="Phone Number" class="card">
        <textarea name="" class="card" placeholder="Message" id="" cols="30" rows="10"></textarea>
        <input type="Submit" value="Send Message" class="btn">
      </form>
      <div class="image">
        <img src="contact_img.jpeg">
      </div>
    </div>
  </section>
  <!-- contact section end -->

  <!-- footer section start -->
  <section class="footer">
    <div class="card_container">
      <!-- quick links -->
      <div class="card">
        <h3>Quick Links</h3>
        <a href="home.php">Home</a>
        <a href="about.php">About</a>
        <a href="shop.php">shop</a>
        <a href="contact.php">Contact</a>
      </div>
     <!-- extra links -->
      <div class="card">
        <h3>Extra Links</h3>
        <a href="login.php">login</a>
        <a href="register.php">register</a>
        <a href="cart.php">cart</a>
        <a href="orders.php">orders</a>
      </div>
      <!-- contact us -->
         <div class="card">
          <h3>contact us</h3>
           <a href="tel:1234567890"><i class="fas fa-phone"></i> +123 456 7899</a>
         <a href="tel:11122233333"><i class="fas fa-phone"></i> +111 222 3333</a>
         <a href="mailto:shaikh@gmail.com"><i class="fas fa-envelope"></i> We3@gmail.com</a>
         <a href="https://www.google.com/myplace"><i class="fas fa-map-marker-alt"></i> Uttar Pradesh, india - 19100 </a>
        </div>
         <!-- contact information -->

         <div class="card">
         <h3>follow us</h3>
         <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
         <a href="#"><i class="fab fa-twitter"></i>twitter</a>
         <a href="#"><i class="fab fa-instagram"></i>instagram</a>
         <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
      </div>
        
    
    </div>
    <script src="responsive.js"></script>
       <div class="credit">&copy; copyright @ <?= date(format:'Y');?> by <span>We3</span>| All rights reserved !</div>
  <!-- footer section end -->
   <script src="Login.js"></script>
   <script src="Signup.js"></script>
   <script src="auth.js"></script>
   <script src="server.js"></script>
   <script src="USer.js"></script>
</body>
</html>
