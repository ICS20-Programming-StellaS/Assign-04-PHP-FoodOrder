<!DOCTYPE html>
<html>
  <head>
		<!-- Metadata -->
    <meta charset="utf-8" />
    <meta name="description" content="Food order with PHP" />
    <meta name="keywords" content="immaculata, ics2o" />
    <meta name="author" content="Stella S"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favs/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./favs/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./favs/favicon-16x16.png" />
    <link rel="manifest" href="./favs/site.webmanifest" />

    <!-- Code for the style sheets-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.pink-teal.min.css" />

    <!--Link to CSS file-->
    <link rel="stylesheet" href="./css/style.css"/>

    <!--Webpage title-->
    <title>Smoothie Shack</title>
  </head>
  
  <center><body>
    
    <!-- images -->
    		<img src="./images/smoothie.jpg" alt="Smoothie" width="30%">
    		<img src="./images/smoothie_a.jpg" alt="Smoothie" width="30%">
    		<img src="./images/smoothies_1.jpg" alt="Smoothie" width="30%">
    			<tr align = "center">
    			<td valign="top" align="right">
        </table>

		<!-- php echo to print the html to the page -->
    <?php 
			echo "<h4>Welcome to the SMOOTHIE SHACK</h4>";
      echo "<p>Here at the SMOOTHIE SHACK we love making smoothies that are healthy, clean and tasty</p>";
    ?>

    <!-- menu table -->
    <?php
      echo "<h4>MENU</h4>";
    ?>
      <table>
        <tr>
          <th>Flavour</th>
          <th>Size</th>
          <th>Extras</th>
          <th>Sides</th>
        </tr>
        <tr>
          <td>Strawberry N' Banana <br> (Strawberry & Bananas)</td>
          <td>Snack $3.78 <br>Medium $5.27<br>Regular $7.69</br></td>
          <td>Protein Powder (Whey) +$5.00 <br>Top with Fruit of your Choice +$4.00<br>Sweetener (Honey,Agave or Stevia) +$3.00</br></td>
          <td>Scone (Blueberry or Raspberry) +$2.67 <br>Protein Bites +$2.98<br>Fruit Cup +$1.79<br>Cookie (Chocolate Chip, Oatmeal or Cranberry and Chocolate) +$2.56</br></td>
        </tr>

        <tr>
          <td>Green Mix <br> (Spinach, Kale, Kiwis, Grapes, Pear, Apple, Pineapple & Honey dew)</td>
          <td>Snack $3.78 <br>Medium $5.27<br>Regular $7.69</br></td>
          <td>Protein Powder (Whey) +$5.00 <br>Top with Fruit of your Choice +$4.00<br>Sweetener (Honey,Agave or Stevia) +$3.00</br></td>
          <td>Scone (Blueberry or Raspberry) +$2.67 <br>Protein Bites +$2.98<br>Fruit Cup +$1.79<br>Cookie (Chocolate Chip, Oatmeal or Cranberry and Chocolate) +$2.56</br></td>
        </tr>

        <tr>
          <td>Berry Blend <br> (Strawberries, Blueberries, Raspberries & Blackberries)</td>
          <td>Snack $3.78 <br>Medium $5.27<br>Regular $7.69</br></td>
          <td>Protein Powder (Whey) +$5.00 <br>Top with Fruit of your Choice +$4.00<br>Sweetener (Honey,Agave or Stevia) +$3.00</br></td>
          <td>Scone (Blueberry or Raspberry) +$2.67 <br>Protein Bites +$2.98<br>Fruit Cup +$1.79<br>Cookie (Chocolate Chip, Oatmeal or Cranberry and Chocolate) +$2.56</br></td>
        </tr>

        <tr>
          <td>Tropical Twist <br> (Banana, Coconut, Watermelon, Mango, Orange & Pear)</td>
          <td>Snack $3.78 <br>Medium $5.27<br>Regular $7.69</br></td>
          <td>Protein Powder (Whey) +$5.00 <br>Top with Fruit of your Choice +$4.00<br>Sweetener (Honey,Agave or Stevia) +$3.00</br></td>
          <td>Scone (Blueberry or Raspberry) +$2.67 <br>Protein Bites +$2.98<br>Fruit Cup +$1.79<br>Cookie (Chocolate Chip, Oatmeal or Cranberry and Chocolate) +$2.56</br></td>
        </tr>
      </table>

      <h3>Order Here</h3>
    
      <!--user input-->
        <form action="./results.php" method="post" target="results"> 
        
        <!-- Dropdown Menu for size -->
        <label for="size">*Choose a Smoothie Size:</label>
        <select id="size" name="size">
          <option value="">--Smoothie Size--</option>
          <option value="snack">Snack</option>
          <option value="medium">Medium</option>
          <option value="regular">Regular</option>
        </select>
        <br>
        <br>
        
        <!-- Dropdown Menu for flavour -->
        <label for="flavour">*Choose a Smoothie Flavour:</label>
        <select id="flavour" name="flavour">
          <option value="">--Smoothie Flavour--</option>
          <option value="banana">Banana N' Strawberry</option>
          <option value="berry">Berry Blend</option>
          <option value="tropical">Tropical Twist</option>
          <option value="green">Green Mix</option>
        </select>
        <br>
        <br>

        <!-- Dropdown Menu for extras -->
        <label for="extra">Choose a Smoothie extra:</label>
        <select id="extra" name="extra">
          <option value="">--Smoothie extra--</option>
          <option value="protein">Protein Powder ($5.00)</option>
          <option value="fruit">Top with Fruit ($4.00)</option>
          <option value="sweetener">Sweetener ($3.00)</option>
        </select>
        <br>
        <br>

        <!-- Dropdown Menu for side snack -->
        <label for="side">A Side Snack:</label>
        <select id="side" name="side">
          <option value="">--Side Snack--</option>
          <option value="scone">Scone ($2.67)</option>
          <option value="bites">Protein bites ($2.98)</option>
          <option value="cup">Fruit Cup ($1.79)</option>
          <option value="cookie">Cookie ($2.56)</option>
        </select>
        <br>
        <br>
        
        <!-- Colored icon button -->
        <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
          <i class="material-icons">mood</i>
        </button>

    <!-- iframe for the results to show on the web page. -->
      <center><iframe id="results" name="results"></iframe></center>
      </iframe>


        <p>How would you rate the SMOOTHIE SHACK?</p>
        <p><-- < 50 > --></br></p>
        <!-- Default Slider -->
        <input class="mdl-slider mdl-js-slider" type="range"
          min="0" max="100" value="0" tabindex="0">
      </div>
    </main>
  </body>
</html>