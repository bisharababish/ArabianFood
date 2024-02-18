<?php
session_start();

include("DatabaseConnection.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $gmail = $_POST['mail'];
  $password = $_POST['pass'];

  if (!empty($gmail) && !empty($password) && !is_numeric($gmail)) {
    $query = "select * from form where email='$gmail' limit 1";
    $result = mysqli_query($conn, $query); // Change $con to $conn

    if ($result) {
      if ($result && mysqli_num_rows($result) > 0) {
        $user_data = mysqli_fetch_assoc($result);
        if ($user_data['pass'] == $password) {
          $_SESSION["email"] = $gmail;

          header("location: index.php");
          die;
        }
      }
    }
    echo "<script type='text/javascript'> alert('Wrong Username or Password')</script>";
  } else {
    echo "<script type='text/javascript'> alert('Wrong Username or Password')</script>";

  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" href="images/ArabianFoodIcon.jpg">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="styles.css" />
  <title>Account Login</title>
</head>

<body>
  <header>
    <div class="logo">
      <a href="index.php">
        <img src="images/ArabianFoodLogo.PNG" alt="Arabian Food" />
      </a>
    </div>
  </header>
  <div class="login"></div>
  <h1>Login</h1>
  <form method="POST">
    <label>Email:</label>
    <input type="email" name="mail" required>
    <label>Password:</label>
    <input type="password" name="pass" required>
    <input type="submit" name="" value="submit">
  </form>
  <p>Not have an account?<a href="AccountRegister.php"> Sign Up Here</a></p>
  <p>Home Page to Explore?<a href="index.php"> Click Here</a></p>

</body>

</html>