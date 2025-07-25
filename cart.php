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
    <!-- navbar-end -->
    <main>
        <div class="breadcrumb">
            <a href="./product.php
            " class="home-link">
                Noir Muse
            </a>
            <span class="separator">/</span>
            <span class="current-page">Cart</span>
        </div>
        <div class="cart">
            <div class="cart-container">
                <div class="cart-header">
                    <h2>Cart</h2>
                </div>
                <div class="cart-body">
                    <div class="cart-left">
                        <div class="cart-item">
                            <img src="./images/second-two.png" alt="">
                            <div class="cart-details">
                                <h3>Noir Muse</h3>
                                <p>Size : large</p>
                                <p>Color : Black</p>

                                <h5 class="total-amount">Rs. 2000</h5>
                            </div>

                        </div>
                        <div class="cart-count">
                            <i class="bi bi-trash"></i>
                            <div class="count">
                                <i class="bi bi-dash"></i>
                                <p>1</p>
                                <i class="bi bi-plus"></i>
                            </div>
                        </div>
                    </div>
                    <div class="cart-right">
                        <div class="order-summary">
                            <h2>Order Summary</h2>
                            <div class="summary-row">
                                <p>Subtotal</p>
                                <p class="Subtotal">2000</p>
                            </div>
                            <div class="summary-row">
                                <p>Shipping</p>
                                <p>Free</p>
                            </div>
                            <div class="summary-row Discount">
                                <p>Discount</p>
                                <p>- Rs. 500</p>
                            </div>
                            <hr>
                            <div class="summary-row total">
                                <p>Total</p>
                                <p class="total-val">Rs. 2000</p>
                            </div>
                            <div class="promo">
                                <input type="text" placeholder=" Apply First500 " value="First500">
                                <button class="primary-btn">Apply</button>
                            </div>
                            <button class="primary-btn checkout-btn">Checkout</button>
                            
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="checkout">
            <h1>Order successful</h1>
            <p>Thank you for your order! Your items will be shipped soon.</p>
            <div class="btn-container">
                <a href="./index.php">
                    <button class="primary-btn">Continue Shopping</button>
                </a>
        </div>

    </main>













    <!-- footer -->


   <?php
    include('footer.php');
    ?>
    <!-- footer-end -->







    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="./jquery-ui-1.14.1.custom/jquery-ui-1.14.1.custom/jquery-ui.min.js"></script>
    <script src="./js/cart.js"></script>
</body>

</html>