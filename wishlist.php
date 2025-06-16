<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('location: login.php');
    exit();
}

require_once 'connect.php'; // Ensure database connection is included

$user_id = $_SESSION['user_id'] ?? 0; // Validate user_id
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wishlist</title>
    <link rel="stylesheet" href="Styles.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <a href="index6.html" class="logo">Fleurissant <span>&#127801;</span></a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="shop.php">Shop</a>
            <a href="orders.php">Orders</a>
            <a href="contact.php">Contact</a>
        </nav>
        <div class="icons">
            <a href="wishlist.php" id="heart-icon" class="fas fa-heart"></a>
            <a href="cart.php" id="cart-icon" class="fas fa-shopping-cart"></a>
            <a href="register.php" id="user-icon" class="fas fa-user"></a>
        </div>
    </header>

    <main>
        <h1>Your Wishlist</h1>

        <section class="products">
            <h1 class="heading">Your <span>Wishlist</span></h1>

            <div class="card_container">
                <?php
                try {
                    $grand_total = 0;

                    $select_wishlist = $conn->prepare("SELECT * FROM wishlist WHERE user_id = ?");
                    $select_wishlist->bind_param("i", $user_id);
                    $select_wishlist->execute();
                    $result = $select_wishlist->get_result();

                    if ($result->num_rows > 0) {
                        while ($fetch_wishlist = $result->fetch_assoc()) {
                            $grand_total += $fetch_wishlist['price'];
                ?>
                <div class="card">
                    <div class="card_img">
                        <img src="uploaded_img/<?= htmlspecialchars($fetch_wishlist['image']); ?>" alt="Wishlist Item">
                        <div class="icons">
                            <a href="wishlist.php?remove=<?= htmlspecialchars($fetch_wishlist['id']); ?>" class="fa-solid fa-heart"></a>
                            <a href="cart.php?add=<?= htmlspecialchars($fetch_wishlist['pid']); ?>" class="add-to-cart">Add to Cart</a>
                            <a href="#" class="fa-solid fa-share"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3><?= htmlspecialchars($fetch_wishlist['name']); ?></h3>
                        <div class="price">Rs.<?= htmlspecialchars($fetch_wishlist['price']); ?>/-</div>
                    </div>
                </div>
                <?php
                        }
                    } else {
                        echo '<p class="empty">Your wishlist is empty</p>';
                    }
                } catch (Exception $e) {
                    echo '<p class="error">Error fetching wishlist: ' . $e->getMessage() . '</p>';
                }
                ?>
            </div>
        </section>

        <!-- Wishlist Summary -->
        <div class="wishlist-total">
            <p>Grand Total: <span>Rs.<?= $grand_total; ?>/-</span></p>
            <a href="shop.php" class="option-btn">Continue Shopping</a>
            <a href="wishlist.php?delete_all" class="delete-btn <?= ($grand_total > 1) ? '' : 'disabled'; ?>" onclick="return confirm('Delete all from wishlist?');">Delete All</a>
        </div>
    </main>

    <?php include 'footer.php'; ?>
    <script src="js/script.js"></script>
</body>
</html>