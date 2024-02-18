<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homestay Web - About us</title>
    <?php 
      require('includes/links.php');
    ?>
  <style>
    .box{
      border-top-color: var(--teal) !important;
    }

  </style>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    
</head>
<body class="bg-light">
<!-- Header Bar Start -->
<?php 
  require('includes/header.php');
?>
<!-- Header Bar end -->

<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">ABOUT US</h2>
  <div class="h-line bg-dark"></div>
  <p class="text-center mt-3">
    Founded in 2013 by travel industry veterans Tom Kennedy (Hostelworld.com co-founder)<br> and Debbie Flynn (Irish Education Partners & A Star Hostels Group),with a vision of taking an offline <br> industry online and making homestays and private room rental a popular accommodation choice.
  </p>
</div>

<div class="container">
  <div class="row justify-content-between align-items-center">
    <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
      <h3 class="mb-3">What we're about.</h3>
      <p>We're big fans of home sharing and dedicated to offering quality rooms at wallet-friendly prices, and to giving hosts an opportunity to rent out their spare rooms on our global marketplace.
      </p>
    </div>
    <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
      <img src="images/about/about-img.jpg" class="w-100" alt="">
    </div>
  </div>
</div>

<div class="container mt-5">
  <div class="row">
    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
      <img src="images/about/hotel.svg" width="70px" alt="">
      <h5 class="mt-3">100+ ROOMS</h5>
      </div>
      
    </div>
    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
      <img src="images/about/customers.svg" width="70px" alt="">
      <h5 class="mt-3">200+ CUSTOMERS</h5>
      </div>
      
    </div>
    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
      <img src="images/about/rating.svg" width="70px" alt="">
      <h5 class="mt-3">150+ REVIEWS</h5>
      </div>
      
    </div>
    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
      <img src="images/about/staff.svg" width="70px" alt="">
      <h5 class="mt-3">200+ STAFFS</h5>
      </div>
      
    </div>
  </div>
</div>

<h3 class="my-5 text-center">MANAGEMENT TEAM</h3>

  <div class="container px-4">
    <!-- Swiper -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper mb-5">
      <div class="swiper-slide bg-white rounded overflow-hidden text-center">
        <img src="images/about/team.jpg" class="w-100" alt="">
        <h5 class="mt-2">Random Name</h5>
      </div>
      <div class="swiper-slide bg-white rounded overflow-hidden text-center">
        <img src="images/about/team.jpg" class="w-100" alt="">
        <h5 class="mt-2">Random Name</h5>
      </div>
      <div class="swiper-slide bg-white rounded overflow-hidden text-center">
        <img src="images/about/team.jpg" class="w-100" alt="">
        <h5 class="mt-2">Random Name</h5>
      </div>
      <div class="swiper-slide bg-white rounded overflow-hidden text-center">
        <img src="images/about/team.jpg" class="w-100" alt="">
        <h5 class="mt-2">Random Name</h5>
      </div>
      <div class="swiper-slide bg-white rounded overflow-hidden text-center">
        <img src="images/about/team.jpg" class="w-100" alt="">
        <h5 class="mt-2">Random Name</h5>
      </div>
      <div class="swiper-slide bg-white rounded overflow-hidden text-center">
        <img src="images/about/team.jpg" class="w-100" alt="">
        <h5 class="mt-2">Random Name</h5>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
  </div>


<!-- Footer Section -->
  <?php 
      require('includes/footer.php');
  ?>


<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    spaceBetween: 40,
    pagination: {
      el: ".swiper-pagination",
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
      },
      640: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 3,
      },
      1024: {
        slidesPerView: 3,
      },
    }
  });
</script>




</body>
</html>