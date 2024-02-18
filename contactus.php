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
  <link rel="stylesheet" href="styles.css" />
  <link rel="icon" href="images/ArabianFoodIcon.jpg">

  <title>Contact US</title>
  <style>
    body {
      background: url(images/contactus.png) no-repeat;
      background-size: cover;
    }

    .container {
      max-width: 600px;
      margin: 50px auto;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
      color: white;
    }

    form {
      margin-top: 20px;
    }

    textarea {
      width: 100%;
      height: 150px;
      margin-bottom: 20px;
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
      resize: none;
      font-size: 16px;
    }

    input[type="submit"] {
      display: block;
      width: 325px;
      padding: 10px;
      border: none;
      background-color: #ff7322;
      color: #fff;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      transition: background-color 0.3s;
    }

    input[type="submit"]:hover {
      background: rgb(13, 211, 247);
    }

    p {
      text-align: center;
      margin-top: 20px;
      font-size: 14px;
      color: white;
    }
  </style>
</head>

<body>

  <header>
    <div class="logo">
      <a href="index.php">
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

  <div class="container">

    <h1>Contact Us</h1>
    <form method="POST" action="submit_feedback.php" onsubmit="showMessage()">
      <script>
        // Function to show popup message
        function showMessage() {
          alert("Message received! Thank you for your feedback.");
        }
      </script>
      <textarea id="message" name="message" required placeholder="Your Feedback"></textarea>
      <input type="submit" name="save" value="Submit">
    </form>
    <p>We value your feedback. Please feel free to share any comments, suggestions, or concerns with us.</p>
  </div>


</body>

</html>