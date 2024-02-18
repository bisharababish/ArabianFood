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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css" />
  <link rel="icon" href="images/ArabianFoodIcon.jpg">
  <title>Arabian Food</title>
</head>

<body>
  <header>
    <div class="logo">
      <a href="index.php">
        <img src="images/ArabianFoodLogo.PNG" alt="Arabian Food" />
      </a>

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
  <div class="Food">
    <div>
      <h1 id="FoodLabel">Food</h1>
    </div>
    <div class="LineUnderFood"></div>
    <div class="FoodImages">
      <div class="food-item">
        <img src="FoodImages/Kabsa.jpg" alt="Kabsa" onclick="showModal('Kabsa')">
        <span>Kabsa</span>
      </div>
      <div class="food-item">
        <img src="FoodImages/Mnokheyye.jpg" alt="Mnokheyye" onclick="showModal('Mnokheyye')">
        <span>Mnokheyye</span>
      </div>
      <div class="food-item">
        <img src="FoodImages/Kebab.jpg" alt="Kebab" onclick="showModal('Kebab')">
        <span>Kebab</span>
      </div>
      <div class="food-item">
        <img src="FoodImages/Maftool.jpg" alt="Maftool" onclick="showModal('Maftool')">
        <span>Maftool</span>
      </div>
      <div class="food-item">
        <img src="FoodImages/Maqluba.jpg" alt="Maqluba" onclick="showModal('Maqluba')">
        <span>Maqluba</span>
      </div>
      <div class="food-item">
        <img src="FoodImages/Kufta.jpg" alt="Kufta" onclick="showModal('Kufta')">
        <span>Kufta</span>
      </div>
      <div class="food-item">
        <img src="FoodImages/WarakDawali.jpg" alt="WarakDawali" onclick="showModal('Warak Dawali')">
        <span>Warak Dawali</span>
      </div>
      <div class="food-item">
        <img src="FoodImages/Musakhan.jpg" alt="Musakhan" onclick="showModal('Musakhan')">
        <span>Musakhan</span>
      </div>
      <div class="food-item">
        <img src="FoodImages/Mansaf.jpg" alt="Mansaf" onclick="showModal('Mansaf')">
        <span>Mansaf</span>
      </div>
    </div>
  </div>

  <div class="Drinks">
    <div>
      <h1 id="DrinksLabel">Drinks</h1>
    </div>
    <div class="LineUnderFood"></div>
    <div class="DrinksImages">
      <div class="drink-item">
        <img src="DrinksImages/CocaCola.jpg" alt="CocaCola" onclick="showModal('Coca Cola')">
        <span>Coca Cola</span>
      </div>
      <div class="drink-item">
        <img src="DrinksImages/CocaColaZero.jpg" alt="CocaColaZero" onclick="showModal('Coca Cola Zero')">
        <span>Coca Cola Zero</span>
      </div>
      <div class="drink-item">
        <img src="DrinksImages/Sprite.jpg" alt="Sprite" onclick="showModal('Sprite')">
        <span>Sprite</span>
      </div>
      <div class="drink-item">
        <img src="DrinksImages/Fanta.jpg" alt="Fanta" onclick="showModal('Fanta')">
        <span>Fanta</span>
      </div>
      <div class="drink-item">
        <img src="DrinksImages/Shani.jpg" alt="Shani" onclick="showModal('Shani')">
        <span>Shani</span>
      </div>
      <div class="drink-item">
        <img src="DrinksImages/Water.jpg" alt="Water" onclick="showModal('Water')">
        <span>Water</span>
      </div>
      <div class="drink-item">
        <img src="DrinksImages/Coffee.jpg" alt="Black Coffee" onclick="showModal('Black Coffee')">
        <span>Black Coffee</span>
      </div>
      <div class="drink-item">
        <img src="DrinksImages/Tea.jpg" alt="Tea" onclick="showModal('Tea')">
        <span>Tea</span>
      </div>
      <div class="drink-item">
        <img src="DrinksImages/Sahlab.jpg" alt="Sahlab" onclick="showModal('Sahlab')">
        <span>Sahlab</span>
      </div>
    </div>
  </div>

  <div class="SaladAndDeserts">
    <div>
      <h1 id="SaladDesertsLabel">Salad And Deserts</h1>
    </div>
    <div class="LineUnderFood"></div>
    <div class="SaladAndDesertsImages">
      <div class="SaladDeserts-item">
        <img src="SaladAndDesertsImages/Shakshuka.jpg" alt="Shakshuka" onclick="showModal('Shakshuka')">
        <span>Shakshuka</span>
      </div>
      <div class="SaladDeserts-item">
        <img src="SaladAndDesertsImages/Falafel.jpg" alt="Falafel" onclick="showModal('Falafel')">
        <span>Falafel</span>
      </div>
      <div class="SaladDeserts-item">
        <img src="SaladAndDesertsImages/Tabbouleh.jpg" alt="Tabbouleh" onclick="showModal('Tabbouleh')">
        <span>Tabbouleh</span>
      </div>
      <div class="SaladDeserts-item">
        <img src="SaladAndDesertsImages/Sfeeha.jpg" alt="Sfeeha" onclick="showModal('Sfeeha')">
        <span>Sfeeha</span>
      </div>
      <div class="SaladDeserts-item">
        <img src="SaladAndDesertsImages/Hummus.jpg" alt="Hummus" onclick="showModal('Hummus')">
        <span>Hummus</span>
      </div>
      <div class="SaladDeserts-item">
        <img src="SaladAndDesertsImages/Knafeh.jpg" alt="Knafeh" onclick="showModal('Knafeh')">
        <span>Knafeh</span>
      </div>
      <div class="SaladDeserts-item">
        <img src="SaladAndDesertsImages/Dolma.jpg" alt="Dolma" onclick="showModal('Dolma')">
        <span>Dolma</span>
      </div>
      <div class="SaladDeserts-item">
        <img src="SaladAndDesertsImages/Baklava.jpg" alt="Baklava" onclick="showModal('Baklava')">
        <span>Baklava</span>
      </div>
      <div class="SaladDeserts-item">
        <img src="SaladAndDesertsImages/CesarSalad.jpg" alt="Cesar Salad" onclick="showModal('Cesar Salad')">
        <span>Cesar Salad</span>
      </div>
    </div>
  </div>

  <div id="mymodel" class="model">
    <div class="model-content">
      <span class="close">&times;</span>
      <p id="model-message">Do you want to add this item to your order?</p>
      <button id="add-to-order-btn">Add to Order</button>
    </div>
  </div>


  <script src="scripts/AddingOrders.js"></script>
</body>

</html>
