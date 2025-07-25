<!DOCTYPE html>
<html lang="en">
<?php
include('head.php');
?>


<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Dashboard</h2>
        <ul>
            <li><a href="./admin.php">Home</a></li>
            <li><a href="./user.php">Users</a></li>
            <li><a href="./products.php">Products</a></li>
            <li><a href="./settings.php">Settings</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Top Bar -->
        <div class="top-bar">
            <div class="search-bar">
                <input type="text" placeholder="Search...">
            </div>
            <div class="user-info">
                <span>User</span>
            </div>
        </div>

        <!-- Dashboard Data -->
        <div class="dashboard">
            <h3>Dashboard Overview</h3>
            <div class="card-container">
                <div class="card">
                    <h4>Total Users</h4>
                    <p>120</p>
                </div>
                <div class="card">
                    <h4>Total Orders</h4>
                    <p>45</p>
                </div>
                <div class="card">
                    <h4>Total Sales</h4>
                    <p>$1500</p>
                </div>
            </div>
        </div>
    </div>


    

    <script src="script.js"></script>
</body>
</html>
