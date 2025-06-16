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
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'index.html'; ?>

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

        <a href="contact.php" class="btn">Contact Us</a>
      </div>
    </div>

  </section>
  <!-- about section end -->


  <section class="about" id="about">
    <h1 class="heading"><span>Customer's</span> Review</h1>
   
      <section id="reviews" style="padding: 40px;">
  <h2 style="text-align: center;">
    <span style="color: black;"></span> <span style="color: #f75b5b;"></span>
  </h2>

  <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px; margin-top: 30px;">
    
    <!-- Review 1 -->
    <div style="flex: 1 1 300px; border: 3px solid #ddd; border-radius: 20px; padding: 20px; max-width: 350px;">
      <div style="color: red; font-size: 30px;">★★★★★</div>
      <p>“I had an amazing experience with this service! 
          The team went above and beyond to ensure 
          everything was perfect. Their attention 
          to detail and customer-first approach
         truly sets them apart. From start to finish,
          I felt taken care of and confident in their expertise. 
         Highly recommend to anyone looking for top-notch quality 
         and exceptional service!”</p>
      <div style="display: flex; align-items: center; margin-top: 35px;">
        <img src="pic-1.png" alt="James" style="width: 100px; height: 100px; border-radius: 50%; margin-right: 10px;">
        <div>
          <strong>James</strong><br><span style="color: gray;">Happy Customer</span>
        </div>
      </div>
    </div>

    <!-- Review 2 -->
    <div style="flex: 1 1 300px; border: 2px solid #ddd; border-radius: 20px; padding: 20px; max-width: 350px;">
      <div style="color: red; font-size: 30px;">★★★★★</div>
      <p>“I am beyond impressed with the exceptional service I received! From the moment I reached out, 
          the team was attentive, knowledgeable, and eager to ensure my needs were met. They took the time 
          to understand my vision and delivered results that exceeded my expectations. </p>
      <div style="display: flex; align-items: center; margin-top: 15px;">
        <img src="pic-2.png" alt="Kingston" style="width: 100px; height: 100px; border-radius: 50%; margin-right: 10px;">
        <div>
          <strong>Zara</strong><br><span style="color: gray;">Happy Customer</span>
        </div>
      </div>
    </div>

    <!-- Review 3 -->
    <div style="flex: 1 1 300px; border: 2px solid #ddd; border-radius: 20px; padding: 20px; max-width: 350px;">
      <div style="color: red; font-size: 30px;">★★★★★</div>
      <p>“I m so glad I chose to shop here! The experience was smooth, and the customer service was excellent
           from start to finish. The products I purchased exceeded my expectations in both quality and value. 
           The team was incredibly responsive and helped me every step of the way. It’s clear they truly care about
            their customers!"</p>
      <div style="display: flex; align-items: center; margin-top: 15px;">
        <img src="pic-3.png" alt="Zara" style="width: 100px; height: 100px; border-radius: 50%; margin-right: 10px;">
        <div>
          <strong>Kingston</strong><br><span style="color: gray;">Happy Customer</span>
        </div>
      </div>
    </div>

    <!-- Review 4 -->
    <div style="flex: 1 1 300px; border: 2px solid #ddd; border-radius: 20px; padding: 20px; max-width: 350px;">
      <div style="color: red; font-size: 30px;">★★★★★</div>
      <p>“I am beyond impressed with the exceptional service I received! From the moment I reached out, 
          the team was attentive, knowledgeable, and eager to ensure my needs were met. They took the time 
          to understand my vision and delivered results that exceeded my expectations. </p>
      <div style="display: flex; align-items: center; margin-top: 15px;">
        <img src="pic-4.png" alt="Kingston" style="width: 100px; height: 100px; border-radius: 50%; margin-right: 10px;">
        <div>
          <strong>Surbhi</strong><br><span style="color: gray;">Happy Customer</span>
        </div>
      </div>
    </div>

    <!-- Review 5 -->
    <div style="flex: 1 1 300px; border: 2px solid #ddd; border-radius: 20px; padding: 20px; max-width: 350px;">
      <div style="color: red; font-size: 30px;">★★★★★</div>
      <p>“I m so glad I chose to shop here! The experience was smooth, and the customer service was excellent
           from start to finish. The products I purchased exceeded my expectations in both quality and value. 
           The team was incredibly responsive and helped me every step of the way. It’s clear they truly care about
            their customers!"</p>
      <div style="display: flex; align-items: center; margin-top: 15px;">
        <img src="pic-5.png" alt="Zara" style="width: 100px; height: 100px; border-radius: 50%; margin-right: 10px;">
        <div>
          <strong>Ram Sharma</strong><br><span style="color: gray;">Happy Customer</span>
        </div>
      </div>
    </div>

    <!-- Review 6 -->
    <div style="flex: 1 1 300px; border: 3px solid #ddd; border-radius: 20px; padding: 20px; max-width: 350px;">
      <div style="color: red; font-size: 30px;">★★★★★</div>
      <p>“I had an amazing experience with this service! 
          The team went above and beyond to ensure 
          everything was perfect. Their attention 
          to detail and customer-first approach
         truly sets them apart. From start to finish,
          I felt taken care of and confident in their expertise. 
         Highly recommend to anyone looking for top-notch quality 
         and exceptional service!”</p>
      <div style="display: flex; align-items: center; margin-top: 35px;">
        <img src="pic-6.png" alt="James" style="width: 100px; height: 100px; border-radius: 50%; margin-right: 10px;">
        <div>
          <strong>Rashmi verma</strong><br><span style="color: gray;">Happy Customer</span>
        </div>
      </div>
    </div>

  

  </div>
</section>


 <!--

   <script src="Login.js"></script>
   <script src="Signup.js"></script>
   <script src="auth.js"></script>
   <script src="server.js"></script>
   <script src="USer.js"></script>-->

   <?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>

