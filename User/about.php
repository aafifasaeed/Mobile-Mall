<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Welcome to Mobile Mall, your one-stop destination for a diverse galaxy of mobile choices. Explore the constellations of top brands like Apple, Samsung, Nokia, Oppo, and more, all under one virtual roof. We pride ourselves on offering a celestial collection, ensuring you find the perfect phone to suit your needs and style at best prices.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">client's reviews</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/mark.jpg" alt="">
         <p>Mobile Mall delivered beyond my expectations. Their diverse phone selection is top-notch. Delivery was fast and efficient. Kudos for a stellar shopping experience!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Mark Lee</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/jihyo.jpg" alt="">
         <p>Mobile Mall's Wishlist Rewards program is a game-changer.Ordering my Samsung phone was easy, and the prices are unbeatable. I will definetely order again in Future.Great Service!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Park Jihyo</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/jennie.jpg" alt="">
         <p>Mobile Mall is my tech haven. The sleek design and pre-order option keep me ahead. Recently got the latest Apple release seamlessly. A must-visit for staying on the cutting edge!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Jennie Kim</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/larry.jpg" alt="">
         <p>Mobile Mall is a tech enthusiast's paradise! The website is so user friendly.If you're searching for a seamless and delightful shopping experience, look no further. 5 stars!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Larry Merritt</h3>
      </div>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>