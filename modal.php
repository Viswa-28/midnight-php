 <!DOCTYPE html>
 <html lang="en">
<?php
include('head.php');
?>
 <body>
    <div class="modal">
        <div class="inner-modal">
            <div class="close-modal">
                <i class="bi bi-x"></i>
            </div>
            <div class="modal-content">
                <h2>login</h2>
                <form action="./login.php" method="post">
                    <label for="email" >Email:</label>
                    <input type="email"  id="email" name="email" required>
                    <label for="password">Password:</label>
                    <input type="password"  id="password" name="password" required>
                    <button type="submit" name="login">Sign Up</button>
                    <a href="./register.php" class="register-link">Register</a>
                </form>
            </div>

        </div>
    </div>
 </body>
 </html>