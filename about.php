<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about.jpg" alt="">
      </div>

      <div class="content">
         <h3>Why ShreeHari E-commerce?</h3>
         <p>1. Quality Assurance: At ShriHari Cow Products Store, we prioritize quality above all else, ensuring that our products meet the highest standards to satisfy our customers' needs.<br>
         2. Wide Variety: We offer an extensive range of fresh produce, milk essentials, natural herbs, and specialty ghee, providing a one-stop-shop experience for all your natural and health needs.<br>
         3. Competitive Prices: Our commitment to offering competitive prices ensures that you get the best value for your money without compromising on quality.<br>
         </p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">customer's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/abhay.jpg" alt="">
         <p>"I stumbled upon ShriHari Store online and was pleasantly surprised by their wide variety of products. The website is user-friendly, making my shopping experience a breeze. The delivery was prompt, and the items were fresh. Definitely my go-to for natural products now!".</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Abhay Padariya</h3>
      </div>

      <div class="box">
         <img src="images/rajnikant.jpg" alt="">
         <p>"Decent selection, the website is best fit for me as i am a cow lover and the products are too good to use. The quality of the groceries is top-notch, and the prices are also discountable then others."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i> 
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Rajnikant Hirapara</h3>
      </div>

      <div class="box">
         <img src="images/bhargav.jpeg" alt="">
         <p>"ShriHari Store is fantastic! I love the convenience of ordering online, and the website is so easy to use. They have everything I need, and the delivery is always on time. Fresh produce and great customer service keep me coming back."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Bhargav Bhalodiya</h3>
      </div>

      <div class="box">
         <img src="images/hit.jpg" alt="">
         <p>"Great experience. The website promised a lot, and as per the image i get the exact product with nice quality. Packaging was good,though much can be improved."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Hit Rachadiya</h3>
      </div>

      <div class="box">
         <img src="images/neel.jpg" alt="">
         <p>"Great variety and quality of products. The website layout is clean and simple to navigate. My orders have always been accurate, and the delivery service is reliable. If they add more organic options, it'd be perfect!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Neel Raiyani</h3>
      </div>

      <div class="box">
         <img src="images/vraj1.jpg" alt="">
         <p>"I can recommend ShriHari Store enough! The website is intuitive, and the range of cow products is impressive. Freshness is never compromised, and the delivery is lightning-fast. A gem for naturopaths!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Vraj Nandwana </h3>
      </div>

   </div>



<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>