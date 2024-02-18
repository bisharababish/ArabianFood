<?php
session_start();

if (isset($_SESSION["email"])) {
  $email = $_SESSION["email"];
} else {
  $email = "";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us - Arabian Delights</title>
  <link rel="stylesheet" href="styles.css" />
  <link rel="icon" href="images/ArabianFoodIcon.jpg">

</head>

<body>

  <header>
    <div class="logo">
      <a href="index.html">
        <img src="images/ArabianFoodLogo.PNG" alt="Arabian Food" />
    </div>
    <nav>
      <a href="index.php">Menu</a>
      <a href="orders.php">Orders</a>
      <a href="aboutus.php">About Us</a>
      <a href="contactus.php">Contact Us</a>
    </nav>
    <?php if ($email != ""): ?>
      <p>Welcome, <span id="loggedInUser">
          <?php echo $email; ?>
        </span></p>
      <button class="signup-btn" onclick="window.location.href='logout.php'">Logout</button>
    <?php else: ?>
      <button class="signup-btn" onclick="window.location.href='AccountLogin.php'">Join Us</button>
    <?php endif; ?>
  </header>

  <section class="hero">
    <div class="hero-content">
      <h1>Welcome to Arabian Food Restaurant</h1>
      <p>Experience the rich flavors and traditions of Arabian cuisine</p>
    </div>
  </section>

  <section class="story">
    <div class="container">
      <h2>Our Story</h2>
      <p>
        Arabian Delights was born out of a love for authentic Arabian cuisine
        and a desire to share it with the world. Our journey began in the
        bustling markets of the Middle East, where our founders discovered the
        vibrant flavors and culinary heritage that define Arabian cooking.
      </p>
      <p>
        Driven by passion and a commitment to quality, we set out to create a
        dining experience that celebrates the rich traditions of Arabian
        hospitality. Each dish on our menu is crafted with care, using only
        the finest ingredients and time-honored recipes passed down through
        generations.
      </p>
      <p>
        At Arabian Delights, we invite you to join us on a culinary journey
        unlike any other. Whether you're savoring our savory kebabs, indulging
        in our decadent desserts, or simply enjoying the warm atmosphere of
        our restaurant, we promise an experience that will delight your senses
        and leave you craving more.
      </p>
    </div>
  </section>


</body>

</html>