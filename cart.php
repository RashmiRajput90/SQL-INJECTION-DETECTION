<!-- filepath: /d:/xampp/htdocs/Forms/cart.html -->
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add to Cart Example</title>
   <link rel="stylesheet" href="Styles.css">  
</head>
<body>
  <header>
    <a href="index.html" class="logo">Fleurissant <span>&#127801;</span></a>
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
  </header>
  <main>
    <h1>Your Cart</h1>
    <!-- Cart content goes here -->
   <h1>Product List</h1>
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
            <button class="add-to-cart" data-product="Product 1" data-price="10">Add to Cart</button>

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
            <button class="add-to-cart" data-product="Product 2" data-price="15">Add to Cart</button>
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
            <button class="add-to-cart" data-product="Product 3" data-price="20">Add to Cart</button>
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
            <button class="add-to-cart" data-product="Product 4" data-price="25">Add to Cart</button>
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
            <button class="add-to-cart" data-product="Product 5" data-price="20">Add to Cart</button>
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
            <button class="add-to-cart" data-product="Product 6" data-price="30">Add to Cart</button>
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
            <button class="add-to-cart" data-product="Product 7" data-price="10">Add to Cart</button>
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
            <button class="add-to-cart" data-product="Product 8" data-price="15">Add to Cart</button>
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
  <div class="cart">

  <section class="about" id="about">
    <h1 class="heading"><span>shopping </span>cart</h1>


 <ul id="cart-items">
      <!-- Items will be added dynamically -->
    </ul>
    <p id="total-price">Total: $0</p>
  </div>



     <div class="cart-total" style="text-align:center;  padding: 20px; max-width: 1500px; border-radius: 10px; margin: 0 auto;">
     <a href="checkout.php" class="btn"  background: lightskyblue; padding: 20px; margin: 10px 0; color: white; text-decoration: none;">Proceed To Checkout</a>
   </div>

    
   

  <script>
    // Cart Array to store added products
    const cart = [];
    const cartItemsList = document.getElementById('cart-items');
    const totalPriceElement = document.getElementById('total-price');

    // Function to update the cart display
    function updateCartDisplay() {
      cartItemsList.innerHTML = ''; // Clear the current list

      let total = 0;

      // Add each item in the cart to the list
      cart.forEach(item => {
        const li = document.createElement('li');
        li.textContent = `${item.name} - $${item.price}`;
        cartItemsList.appendChild(li);
        total += item.price;
      });

      // Update the total price
      totalPriceElement.textContent = `Total: $${total.toFixed(2)}`;
    }

    // Function to handle Add to Cart button click
    function handleAddToCartClick(event) {
      const button = event.target;

      if (button.classList.contains('add-to-cart')) {
        const product = button.getAttribute('data-product');
        const price = parseFloat(button.getAttribute('data-price'));

        // Add product to the cart array
        cart.push({ name: product, price: price });

        // Disable the button to prevent duplicate additions
        button.disabled = true;
        button.textContent = "Added to Cart";

        // Update the cart display
        updateCartDisplay();
      }
    }

    // Attach event listener to the container instead of individual buttons (Event Delegation)
    document.querySelector('.card_container').addEventListener('click', handleAddToCartClick);
  

    

  
  </script>
  </main>

  
<?php include 'footer.php'; ?>

<script src="js/script.js"></script>
</body>
</html>
