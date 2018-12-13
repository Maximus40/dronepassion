<?php
include('inc/header.php');?>

<header>
  <div class="overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
  </video>
  <div class="container h-100">
    <div class="d-flex text-center h-100">
      <div class="my-auto w-100 text-white">
      </div>
    </div>
  </div>
</header>


 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/css/swiper.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/css/swiper.min.css">

<!-- Demo styles -->
<style>
    
     
    .swiper-container {
      width: 100%;
      padding-top: 50px;
      padding-bottom: 50px;
      
    }
    .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 300px;
      height: 300px;
      background:white;
    }
  </style>
</head>
<body>
<h1 class="text-center mt-2 text-primary">Collections</h1>
<div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide" >test</div>
      <div class="swiper-slide" >test</div>
      <div class="swiper-slide" >test</div>
      <div class="swiper-slide" >test</div>
      <div class="swiper-slide" >test</div>
      <div class="swiper-slide" >test</div>
      <div class="swiper-slide" ></div>
      <div class="swiper-slide" ></div>
      <div class="swiper-slide" ></div>
      <div class="swiper-slide" ></div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>
<!-- Swiper JS -->
<script src="../dist/js/swiper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.esm.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.esm.bundle.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows : true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script>
