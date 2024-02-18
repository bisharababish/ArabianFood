<?php
session_start();

include("DatabaseConnection.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $firstname = $_POST['fname'];
  $lastname = $_POST['lname'];
  $num = $_POST['number'];
  $address = $_POST['add'];
  $gmail = $_POST['mail'];
  $password = $_POST['pass'];

  if (!empty($gmail) && !empty($password) && !is_numeric($gmail)) {
    $query = "insert into form (fname,lname,cnum,address,email,pass) values('$firstname','$lastname','$num','$address','$gmail','$password')";
    mysqli_query($conn, $query);
    echo "<script type='text/javascript'> alert('Successfully Registered')</script>";

  } else {
    echo "<script type='text/javascript'> alert('Please Enter some Valid Information')</script>";


  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="images/ArabianFoodIcon.jpg">

  <title>Account Registration</title>
  <link rel="stylesheet" href="styles.css" />
  <link rel=" icon" href="images/ArabianFoodIcon.jpg">

</head>

<body>
  <header>
    <div class="logo">
      <!-- Link the logo directly to index.php -->
      <a href="index.php">
        <img src="images/ArabianFoodLogo.PNG" alt="Arabian Food" />
      </a>
    </div>
  </header>
  <div class="signup"></div>
  <h1>Sign Up</h1>
  <h4>it's free and only takes a minute.</h4>
  <form method="POST">
    <label>First Name:</label>
    <input type="text" name="fname" required>
    <label>Last Name:</label>
    <input type="text" name="lname" required>
    <label>Contact Address:</label>
    <input type="tel" name="number" required>
    <label>Address:</label>
    <input type="text" name="add" required>
    <label>Email:</label>
    <input type="email" name="mail" required>
    <label>Password:</label>
    <input type="password" name="pass" required>
    <input type="submit" name="" value="Submit">
  </form>
  <p>Already have an account?<a href="AccountLogin.php"> Login Here</a></p>
</body>

</html>