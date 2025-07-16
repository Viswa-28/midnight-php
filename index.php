<?php
include('config/config.php');
session_start();
?>



<!DOCTYPE html>
<html lang="en">
    <?php
    include('head.php');
    ?>



<body>
 
    
  <?php
    include('modal.php');
  include('navbar.php');
    ?>




  <!-- banner -->

  <div class="banner">
    <div class="banner-content">
      <h1>Discover the Latest Trends</h1>
      <p>Unveil the essence of elegance after dark. Midnight Vogue blends high fashion with the allure of midnight—where
        bold silhouettes, shimmering accents, and timeless style meet. Embrace the night. Own the spotlight.

      </p>
      <div class="btn-container">
        <button class="primary-btn">Shop Now</button>
      </div>
    </div>
    <div class="banner-image">
      <img src="./images/banner-img.png" alt="Fashion Banner">


    </div>


  </div>

  <!-- banner-end -->

  <section class="second">
    <h2 class="section-title">New Arrival</h2>
    <div class="card-container">
      <a href="">

        <div class="card" style="background-image: url('./images/second-one.png');">
        <div class="overlay">
          <div class="image-name">Midnight Elegance</div>
        </div>
      </div>
      </a>

      <a href="./product.php">
        <div class="card" style="background-image: url('./images/second-two.png');">
          <div class="overlay">
            <div class="image-name">Noir Muse</div>
          </div>
        </div>
      </a>

      <a href="">
        <div class="card" style="background-image: url('./images/second-three.png');">
        <div class="overlay">
          <div class="image-name">Glam After Dark</div>
        </div>
      </div>
      </a>
    </div>
  </section>



  <section class="third">
    <div class="tabs">
      <div class="btn men-btn secondary-btn active  ">Men</div>
      <div class="btn women-btn secondary-btn">Women</div>
    </div>

    <div class="tab-content">
      <div class="men-card  active">
        <div class="card ">
          <img src="./images/men-1.avif" alt="">
          <p>Black suit</p>


        </div>
        <div class="card active ">
          <img src="./images/men-2.avif" alt="">
          <p>Black shirt</p>
        </div>
        <div class="card active ">
          <img src="./images/men-3.avif" alt="">
          <p>black shoe</p>
        </div>
        <div class="card active ">
          <img src="./images/men-4.avif" alt="">
          <p>perfume</p>
        </div>
      </div>
      <div class="women-card ">
        <div class="card w-card">

          <img src="./images/women-1.png" alt="">
          <p>Black Dress</p>
        </div>
        <div class="card w-card">
          <img src="./images/women-2.png" alt="">
          <p> shoes</p>
        </div>
        <div class="card  w-card">
          <img src="./images/women-3.png" alt="">
          <p>Bag</p>
        </div>
        <div class="card w-card">
          <img src="./images/women-4.png" alt="">
          <p>Accessories</p>
        </div>
      </div>




    </div>




  </section>



  <section class="accordian">
    <h2 class="section-title">Frequently Asked Questions</h2>
    <div class="accordian-container">

      <div class="accordian-item ">
        <div class="question">
          <p>How do I find my size?</p>
          <i class="bi bi-chevron-down"></i>
        </div>
        <div class="answer ">
          <p>We recommend measuring your bust, waist, and hips, then comparing those measurements with the chart. If
            you're between sizes, we suggest sizing up for a more comfortable fit. Still unsure? Contact our support
            team.</p>
        </div>
      </div>

      <div class="accordian-item">
        <div class="question">
          <p>Do you offer custom tailoring?</p>
          <i class="bi bi-chevron-down"></i>
        </div>
        <div class="answer">
          <p>Yes! Selected items offer custom size options. You’ll find a “Customize” option on eligible product pages. We also offer alterations in select locations..</p>
        </div>
      </div>
      <div class="accordian-item">
        <div class="question">
          <p>Can I return the dress if it doesn't fit?</p>
          <i class="bi bi-chevron-down"></i>
        </div>
        <div class="answer">
          <p>Yes, you can return the dress within 14 days of delivery, provided it is unused and in original condition
            with tags attached.</p>
        </div>
      </div>

    </div>
  </section>




  <section class="form">
    <h2 class="section-title">Get In Touch</h2>
    <form id="contactForm">
      <div class="first-form">
        <input type="text" placeholder="First Name" class="fname">

        <input type="text" placeholder="Last name" class="lname">
      </div>
     <div class="error-cont">
       <p class="fname-error error"></p>
      <p class="lname-error error"></p>
     </div>

      <input type="text" placeholder="Email Address" class="email">
      <p class="email-error error"></p>

      <textarea class="message" cols="30" rows="10" placeholder="Message"></textarea>
       <p class="message-error error"></p>
      <button type="submit" class="primary-btn form-btn">Submit</button>
    </form>
  </section>


  <!-- footer -->


 <?php
    include('footer.php');
        ?>


  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="./jquery-ui-1.14.1.custom/jquery-ui-1.14.1.custom/jquery-ui.min.js"></script>
  <script src="./js/script.js"></script>
</body>

</html>