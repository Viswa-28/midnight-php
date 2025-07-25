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



  <main>
    .
    <div class="breadcrumb">
      <a href="./index.php" class="home-link">
        <i class="bi bi-house-door-fill"></i> Home
      </a>
      <span class="separator">/</span>
      <span class="current-page">Noir Muse</span>
    </div>

    <div class="product">
      <div class="left">
        <img src="./images/second-two.png" alt="">
      </div>
      <div class="right">
        <h2>Noir Muse</h2>
        <div class="star-container">
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
        </div>
        <p class="fs-25">Rs. 2000</p>
        <p>Step into sophistication with the Midnight Suit, a masterpiece of timeless fashion crafted for the modern
          gentleman.</p>
        <h3 class="product-size">Size</h3>
        <div class="size-container">
          <div class="size active">
            <p>small</p>
          </div>
          <div class="size">
            <p>Medium</p>
          </div>
          <div class="size">
            <p>large</p>
          </div>
          <div class="size">
            <p>X-large</p>
          </div>

        </div>
        <div class="cart">
          <div class="count">
            <i class="bi bi-dash"></i>
            <p class="value">1</p>
            <i class="bi bi-plus"></i>
          </div>
          <a href="./cart.php">
            <div class="primary-btn">
              Buy Now
            </div>
          </a>
        </div>
        <!-- <p class="fs-25">Rs. 9999</p> -->

      </div>
    </div>



    <section class="also-like-section">
      <h2 class="section-title">You Might Also Like</h2>
      <div class="also-like-grid">
        <!-- Card 1 -->
        <div class="product-card">
          <img src="./images/look1.jpg" alt="Velvet Night Suit">
          <div class="product-info">
            <h3>Velvet Night Suit</h3>
            <p>Rs. 7,499</p>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="product-card">
          <img src="./images/look2.jpg" alt="Royal Blue Blazer">
          <div class="product-info">
            <h3>Royal Blue Blazer</h3>
            <p>Rs. 5,899</p>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="product-card">
          <img src="./images/look3.jpg" alt="Noir Street Jacket">
          <div class="product-info">
            <h3>Noir Street Jacket</h3>
            <p>Rs. 6,200</p>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="product-card">
          <img src="./images/look4.jpg" alt="Urban Midnight Coat">
          <div class="product-info">
            <h3>Urban Midnight Coat</h3>
            <p>Rs. 8,000</p>
          </div>
        </div>

        <!-- Card 5 -->
        <div class="product-card">
          <img src="./images/look5.jpg" alt="Dark Aura Shirt">
          <div class="product-info">
            <h3>Dark Aura Shirt</h3>
            <p>Rs. 3,299</p>
          </div>
        </div>

        <!-- Card 6 -->
        <div class="product-card">
          <img src="./images/look6.jpg" alt="Shadowline Suit">
          <div class="product-info">
            <h3>Shadowline Suit</h3>
            <p>Rs. 9,100</p>
          </div>
        </div>
      </div>
    </section>


    <!-- Rating and Review Section -->
    <section class="rating-review">
      <h2 class="section-title">Customer Reviews for Noir Muse</h2>

      <div class="review-grid">
        <!-- Review 1 -->
        <div class="review-card">
          <div class="review-header">
            <h3>Noir Muse</h3>
            <div class="stars">★★★★☆</div>
          </div>
          <p class="review-text">"Elegant and bold. Loved the material and finish!"</p>
          <div class="review-author">— Aisha K., <span class="date">June 2025</span></div>
        </div>

        <!-- Review 2 -->
        <div class="review-card">
          <div class="review-header">
            <h3>Noir Muse</h3>
            <div class="stars">★★★★★</div>
          </div>
          <p class="review-text">"Perfect for a night out. The details are stunning!"</p>
          <div class="review-author">— Riya M., <span class="date">May 2025</span></div>
        </div>

        <!-- Review 3 -->
        <div class="review-card">
          <div class="review-header">
            <h3>Noir Muse</h3>
            <div class="stars">★★★★☆</div>
          </div>
          <p class="review-text">"Received so many compliments! Premium feel."</p>
          <div class="review-author">— Sneha J., <span class="date">April 2025</span></div>
        </div>

        <!-- Review 4 -->
        <div class="review-card">
          <div class="review-header">
            <h3>Noir Muse</h3>
            <div class="stars">★★★☆☆</div>
          </div>
          <p class="review-text">"Nice but delivery was delayed. Product is good."</p>
          <div class="review-author">— Divya S., <span class="date">March 2025</span></div>
        </div>
      </div>
    </section>




  </main>









  <!-- footer -->


 <?php include 'footer.php';?>
  <!-- footer end -->







  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="./jquery-ui-1.14.1.custom/jquery-ui-1.14.1.custom/jquery-ui.min.js"></script>
  <script src="./js/product.js"></script>
</body>

</html>