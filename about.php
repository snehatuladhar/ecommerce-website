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
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

   

      <div class="content">
         <h3>why choose us?</h3>
         <p>Welcome to Shopper Stop Nepal, where we celebrate the beauty, elegance, and individuality of women through our exquisite range of accessories. We are passionate about empowering women to express their unique style and enhance their confidence with our carefully curated collection.

At our store we understand that accessories are more than just adornments; they are an extension of one's personality and a reflection of their inner self. That's why we strive to bring you a diverse selection of high-quality, fashionable accessories that cater to every taste, occasion, and mood.

Our team of dedicated designers and trendsetters scours the fashion world to handpick the finest pieces, ensuring that each item we offer is crafted with precision and attention to detail. From statement necklaces and elegant earrings to trendy handbags and chic scarves, our range covers a wide spectrum of styles, from timeless classics to contemporary must-haves.

We believe that every woman deserves to feel empowered and beautiful, regardless of age, size, or background. That's why inclusivity and diversity are at the heart of our brand. Our accessories are designed to complement all skin tones, body types, and personal styles, allowing every woman to find something that resonates with her and makes her feel truly special
Thank you for joining us on this journey of self-expression, empowerment, and style. Explore our collection and find the perfect accessories to celebrate your unique beauty. Feel confident, be bold, and embrace your individuality.
<br>
Happy shopping!
<br>
Sneha Tuladhar
Founder/CEO, <br>Shopper Stop Nepal</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>
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