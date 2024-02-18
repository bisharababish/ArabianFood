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
  <link rel="stylesheet" href="styles.css">
  <link rel="icon" href="images/ArabianFoodIcon.jpg">
  <title>Orders</title>

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
</body>

</html>