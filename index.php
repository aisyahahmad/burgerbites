<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Burger Bites Restaurant</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts     -->

<section class="header">

   <a href="#" class="logo"> <i class="fas fa-utensils"></i> Burger Bites. </a>

   <nav class="navbar">
      <a href="#home">home</a>
      <a href="#about">about</a>
      <a href="#food">food</a>
      <a href="#gallery">gallery</a>
      <a href="#menu">menu</a>
      <a href="#order" target="">order</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends    -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background: url(images/home-slide-1.jpg) no-repeat;">
            <div class="content">
               <span>Let's try</span>
               <h3>delicious cooking</h3>
               <a href="#menu" class="btn">get started</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background: url(images/home-slide-2.jpg) no-repeat;">
            <div class="content">
               <span>Having a</span>
               <h3>linner moment</h3>
               <a href="#menu" class="btn">get started</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background: url(images/home-slide-3.jpg) no-repeat;">
            <div class="content">
               <span>outstanding food</span>
               <h3>authentic kitchen</h3>
               <a href="#menu" class="btn">get started</a>
            </div>
         </div>

      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <div class="image">
      <img src="images/about-img.png" alt="">
   </div>

   <div class="content">
      <h3 class="title">welcome to our restaurant</h3>
      <p>Always a good time for burgers. A food consisting of fillings, usually a patty of ground meat-placed inside a sliced bun. Easy to eat. Come with an array of sides, build yours to your own taste.</p>
      <a href="#" class="btn">read more</a>
      <div class="icons-container">
         <div class="icons">
            <img src="images/about-icon-1.png" alt="">
            <h3>quality food</h3>
         </div>
         <div class="icons">
            <img src="images/about-icon-2.png" alt="">
            <h3>food & drinks</h3>
         </div>
         <div class="icons">
            <img src="images/about-icon-3.png" alt="">
            <h3>expert chefs</h3>
         </div>
      </div>
   </div>

</section>

<!-- about section ends -->

<!-- food section starts  -->

<section class="food" id="food">

   <div class="heading">  
      <span>popular dishes</span>
      <h3>our delicious food</h3>
   </div>

   <div class="swiper food-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" data-name="food-1">
            <img src="images/chickenburger.png" alt="">
            <h3>Chicken Burger</h3>
            <div class="price">RM 7.00</div>
         </div>

         <div class="swiper-slide slide" data-name="food-2">
            <img src="images/beefburger.png" alt="">
            <h3>Beef Burger</h3>
            <div class="price">RM 7.00</div>
         </div>

         <div class="swiper-slide slide" data-name="food-3">
            <img src="images/doublecheeseburger.png" alt="">
            <h3>Double Cheese Burger</h3>
            <div class="price">RM 8.00</div>
         </div>

         <div class="swiper-slide slide" data-name="food-4">
            <img src="images/spicyfriedchicken.png" alt="">
            <h3>The Supreme Spicy Fried Chicken</h3>
            <div class="price">RM 12.00</div>
         </div>

         <div class="swiper-slide slide" data-name="food-5">
            <img src="images/pepperonipizza.png" alt="">
            <h3>Pepperoni Pizza</h3>
            <div class="price">RM 20.00</div>
         </div>

         <div class="swiper-slide slide" data-name="food-6">
            <img src="images/spaghetti.png" alt="">
            <h3>Spaghetti Bolognese</h3>
            <div class="price">RM 13.00</div>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- food section ends -->

<!-- food preview section starts  -->

<section class="food-preview-container">

   <div id="close-preview" class="fas fa-times"></div>

   <div class="food-preview" data-target="food-1">
      <img src="images/chickenburger.png" alt="">
      <h3>delicious food</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
      </div>
      <div class="price">RM 7.00</div>
      <a href="#order" class="btn">buy now</a>
   </div>

   <div class="food-preview" data-target="food-2">
      <img src="images/beefburger.png" alt="">
      <h3>delicious food</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
      </div>
      <div class="price">RM  7.00</div>
      <a href="#order" class="btn">buy now</a>
   </div>

   <div class="food-preview" data-target="food-3">
      <img src="images/doublecheeseburger.png" alt="">
      <h3>delicious food</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
      </div>
      <div class="price">RM 8.00</div>
      <a href="#order" class="btn">buy now</a>
   </div>

   <div class="food-preview" data-target="food-4">
      <img src="images/spicyfriedchicken.png" alt="">
      <h3>delicious food</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
      </div>
      <div class="price">RM 12.00</div>
      <a href="#order" class="btn">buy now</a>
   </div>

   <div class="food-preview" data-target="food-5">
      <img src="images/pepperonipizza.png" alt="">
      <h3>delicious food</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
      </div>
      <div class="price">RM 20.00</div>
      <a href="#order" class="btn">buy now</a>
   </div>

   <div class="food-preview" data-target="food-6">
      <img src="images/spaghetti.png" alt="">
      <h3>delicious food</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
      </div>
      <div class="price">RM 13.00</div>
      <a href="#order" class="btn">buy now</a>
   </div>

</section>

<!-- food preview section ends -->

<!-- gallery section starts  -->

<section class="gallery" id="gallery">

   <div class="heading">
      <span>our gallery</span>
      <h3>our untold stories</h3>
   </div>

   <div class="gallery-container">

      <a href="images/food-galler-img-1.jpg" class="box">
         <img src="images/food-galler-img-1.jpg" alt="">
         <div class="icon"> <i class="fas fa-plus"></i> </div>
      </a>

      <a href="images/food-galler-img-2.jpg" class="box">
         <img src="images/food-galler-img-2.jpg" alt="">
         <div class="icon"> <i class="fas fa-plus"></i> </div>
      </a>

      <a href="images/food-galler-img-3.jpg" class="box">
         <img src="images/food-galler-img-3.jpg" alt="">
         <div class="icon"> <i class="fas fa-plus"></i> </div>
      </a>

      <a href="images/food-galler-img-4.jpg" class="box">
         <img src="images/food-galler-img-4.jpg" alt="">
         <div class="icon"> <i class="fas fa-plus"></i> </div>
      </a>
      
      <a href="images/food-galler-img-5.jpg" class="box">
         <img src="images/food-galler-img-5.jpg" alt="">
         <div class="icon"> <i class="fas fa-plus"></i> </div>
      </a>

      <a href="images/food-galler-img-6.jpg" class="box">
         <img src="images/food-galler-img-6.jpg" alt="">
         <div class="icon"> <i class="fas fa-plus"></i> </div>
      </a>

   </div>

</section>

<!-- gallery section ends -->

<!-- menu section starts  -->

<section class="menu" id="menu">

   <div class="heading">
      <span>our menu</span>
      <h3>our popular dishes</h3>
   </div>

   <div class="swiper menu-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <h3 class="title">Foods</h3>
            <div class="box-container">
               <div class="box">
                  <div class="info">
                     <h3>Chicken Burger</h3>
                  </div>
                  <div class="price">RM 7.00</div>
               </div>
               <div class="box">
                  <div class="info">
                     <h3>Beef Burger</h3>
                  </div>
                  <div class="price">RM 7.00</div>
               </div>
               <div class="box">
                  <div class="info">
                     <h3>Double Cheese Burger</h3>
                  </div>
                  <div class="price">RM 9.00</div>
               </div>
               <div class="box">
                  <div class="info">
                     <h3>Pepperoni Pizza</h3>
                  </div>
                  <div class="price">RM 20.00</div>
               </div>
               <div class="box">
                  <div class="info">
                     <h3>French Fries</h3>
                  </div>
                  <div class="price">RM 6.00</div>
               </div>
            </div>
         </div>

         
         <div class="swiper-slide slide">
            <h3 class="title">drinks</h3>
            <div class="box-container">
               <div class="box">
                  <div class="info">
                     <h3>Plain Water</h3>
                  </div>
                  <div class="price">RM 2.00</div>
               </div>
               <div class="box">
                  <div class="info">
                     <h3>Carbonated Drinks</h3>
                     <p>Coca-cola, Pepsi, Sprite</p>
                  </div>
                  <div class="price">RM 3.00</div>
               </div>
               <div class="box">
                  <div class="info">
                     <h3>Juices</h3>
                     <p>Watermelon, Orange, Pineapple</p>
                  </div>
                  <div class="price">RM 7.00</div>
               </div>
               <div class="box">
                  <div class="info">
                     <h3>Coffee</h3>
                     <p>Espresso, Cappucino, Latte</p>
                  </div>
                  <div class="price">RM 7.50</div>
               </div>
            </div>
         </div>

         <div class="swiper-slide slide">
            <h3 class="title">dessert</h3>
            <div class="box-container">
               <div class="box">
                  <div class="info">
                     <h3>Ice-cream</h3>
                     <p>Vanilla, Chocolate, Strawberry</p>
                  </div>
                  <div class="price">RM 4.00</div>
               </div>
               <div class="box">
                  <div class="info">
                     <h3>Cookies</h3>
                     <p>Chocolate Chip, Macadamia</p>
                  </div>
                  <div class="price">RM 5.00</div>
               </div>
               <div class="box">
                  <div class="info">
                     <h3>Cakes</h3>
                     <p>Carrot, Red Velvet, Indulgence</p>
                  </div>
                  <div class="price">RM 10.00</div>
               </div>
            </div>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- menu section ends -->

<!-- order section starts  -->

<section class="order" id="order">

   <div class="heading">
      <span>order now</span>
      <h3>fast home delivery</h3>
   </div>
<?php
    // call file to connect to server
    include("header.php"); ?>


    <?php
    //This query inserts a record in the clinic table
    //has form been submitted?
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $error = array(); //initialize an error array

        //check for a Firstname
        if (empty($_POST['name'])) {
            $error[] = "You forgot to enter your name.";
        } else {
            $n = mysqli_real_escape_string($connect, trim($_POST['name']));
        }


        //check for a lastName
        if (empty($_POST['food_name'])) {
            $error[] = 'You forgot to enter your food name.';
        } else {
            $fn = mysqli_real_escape_string($connect, trim($_POST['food_name']));
        }


        //check for a insurance number
        if (empty($_POST['order_details'])) {
            $error[] = 'You forgot to enter your order details. ';
        } else {
            $od = mysqli_real_escape_string($connect, trim($_POST['order_details']));
        }


        //check for a diagnose
        if (empty($_POST['address'])) {
            $error[] = "You forgot to enter your address.";
        } else {
            $d = mysqli_real_escape_string($connect, trim($_POST['address']));
        }

        //check for a number
        if (empty($_POST['number'])) {
            $error[] = "You forgot to enter your number.";
        } else {
            $nm = mysqli_real_escape_string($connect, trim($_POST['number']));
        }

        //check for a diagnose
        if (empty($_POST['how_much'])) {
            $error[] = "You forgot to enter your how much.";
        } else {
            $h = mysqli_real_escape_string($connect, trim($_POST['how_much']));
        }

        //check for a when you want
        if (empty($_POST['when_you_want'])) {
            $error[] = "You forgot to enter your when you want.";
        } else {
            $w = mysqli_real_escape_string($connect, trim($_POST['when_you_want']));
        }

        //register the user in the database
        //make the query:
        $q = "Insert INTO table_order (id, name, food_name, order_details, address, number, how_much, when_you_want)
  VALUES ('', '$n','$fn','$od','$d', '$nm', '$h', '$w')";
        $result = @mysqli_query($connect, $q); // run the query
        if ($result) { //if it runs
            echo '<h1>thank you<h1>';
            exit();
        } else { //if it didnt run
            //message
            echo '<h1>System error</h1>';

            //debugging message
            echo '<p>' . mysqli_error($connect) . '<br><br>Query: ' . $q . '</p>';
        } //end of it (result)
        mysqli_close($connect); //close the database connection.
        exit();
    } //End of the main submit conditional
    ?>

   <form action="index.php" method="post">
      <div class="box-container">
         <div class="box">
            <div class="inputBox">
               <span>full name</span>
               <input id="name" type="text" name="name" placeholder="enter your name" value="<?php if (isset($_POST['name'])) echo $_POST['name']; ?> "/>
            </div>
            <div class="inputBox">
               <span>food name</span>
               <input id="food_name" type="text" name="food_name" placeholder="food you want" value="<?php if (isset($_POST['food_name'])) echo $_POST['food_name']; ?> "/>
            </div>
            <div class="inputBox">
               <span>order details</span>
               <input id="order_details" type="text" name="order_details" placeholder="specifics with food" value="<?php if (isset($_POST['order_details'])) echo $_POST['order_details']; ?> "/>
            </div>
            <div class="inputBox">
               <span>your address</span>
               <textarea name="address" placeholder="enter your address" id="address" cols="30" rows="10" ><?php if (isset($_POST['address'])) echo $_POST['address']; ?></textarea>
            </div>
         </div>
         <div class="box">
            <div class="inputBox">
               <span>number</span>
               <input id="number" type="text" name="number" placeholder="enter your number" value="<?php if (isset($_POST['number'])) echo $_POST['number']; ?> "/>
            </div>
            <div class="inputBox">
               <span>how much</span>
               <input id="how_much" type="number" name="how_much" placeholder="how many you want" value="<?php if (isset($_POST['how_much'])) echo $_POST['how_much']; ?> "/>
            </div>
            <div class="inputBox">
               <span>when you want</span>
               <input id="when_you_want" type="datetime-local" name="when_you_want" value="<?php if (isset($_POST['when_you_want'])) echo $_POST['when_you_want']; ?> "/>
            </div>
            <div class="inputBox">
               <span>our address</span>
               <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7967.425630364027!2d101.60530817327889!3d3.1701314407669874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4f49f18931db%3A0xca49255652f8bee2!2sDamansara%20Perdana%2C%2047820%20Petaling%20Jaya%2C%20Selangor!5e0!3m2!1sen!2smy!4v1667455762922!5m2!1sen!2smy"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
         </div>
      </div>
      <input id="submit" name="submit" type="submit" value="order now" class="btn">
   </form>
   
</section>

<!-- order section ends -->

<!-- footer section starts  -->

<section class="footer">

   <div class="icons-container">

      <div class="icons">
         <i class="fas fa-clock"></i>
         <h3>opening hours</h3>
         <p>12:00pm to 11:00pm</p>
      </div>

      <div class="icons">
         <i class="fas fa-phone"></i>
         <h3>phone</h3>
         <p>0172798448</p>
         <p>0122181009</p>
      </div>

      <div class="icons">
         <i class="fas fa-envelope"></i>
         <h3>email</h3>
         <p>aisyahkmrl@gmail.com</p>
         <p>burgerbites@gmail.com</p>
      </div>

      <div class="icons">
         <i class="fas fa-map"></i>
         <h3>address</h3>
         <p>Damansara Perdana, Petaling Jaya, Selangor</p>
      </div>

   </div>

   <div class="share">
      <a href="#" class="fab fa-facebook-f"></a>
      <a href="#" class="fab fa-twitter"></a>
      <a href="#" class="fab fa-instagram"></a>
      <a href="#" class="fab fa-linkedin"></a>
   </div>

   <div class="credit"> created by <span>Aisyah</span> | all rights reserved! </div>

</section>

<!-- footer section ends  -->

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>
   lightGallery(document.querySelector('.gallery .gallery-container'));
</script>

</body>
</html>