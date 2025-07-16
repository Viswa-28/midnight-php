<?php
include('config/config.php');



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<div class="form">
    <form action="" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?= htmlspecialchars($name) ?>">
    <div class="error"><?= $errors['name'] ?? '' ?></div>

    <label for="email">Email:</label>
    <input type="text" id="email" name="email" value="<?= htmlspecialchars($email) ?>">
    <div class="error"><?= $errors['email'] ?? '' ?></div>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password">
    <div class="error"><?= $errors['password'] ?? '' ?></div>

    <label for="confirm_password">Confirm Password:</label>
    <input type="password" id="confirm_password" name="confirm_password">
    <div class="error"><?= $errors['confirm_password'] ?? '' ?></div>

    <input type="submit" value="Register">
</form>

<?php
        $namepattern = "/^[a-zA-Z\s]+$/";
        $emailpattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
        $errors = [];
        $name = $email = $password = $confirm_password = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Validate name
            if (empty($_POST["name"])) {
                $errors['name'] = "Name is required.";
            } elseif (!preg_match($namepattern, $_POST["name"])) {
                $errors['name'] = "Invalid name format.";
            } else {
                $name = $_POST["name"];
            }

            // Validate email
            if (empty($_POST["email"])) {
                $errors['email'] = "Email is required.";
            } elseif (!preg_match($emailpattern, $_POST["email"])) {
                $errors['email'] = "Invalid email format.";
            } else {
                $email = $_POST["email"];
            }

            // Validate password
            if (empty($_POST["password"])) {
                $errors['password'] = "Password is required.";
            } elseif (strlen($_POST["password"]) < 6) {
                $errors['password'] = "Password must be at least 6 characters.";
            } else {
                $password = $_POST["password"];
            }

            // Validate confirm password
            if (empty($_POST["confirm_password"])) {
                $errors['confirm_password'] = "Confirm Password is required.";
            } elseif ($_POST["confirm_password"] !== $password) {
                $errors['confirm_password'] = "Passwords do not match.";
            } else {
                $confirm_password = $_POST["confirm_password"];
            }

            // If no errors, proceed with registration (e.g., save to database)
            if (empty($errors)) {
                echo "<p style='color:green;'>Registration Successful!</p>";
                $query = "INSERT INTO registration (name, email, password) VALUES ('$name', '$email', '$password')";
                $res = mysqli_query($connection, $query);
                if ($res) {
                    echo "<p style='color:green;'>User registered successfully!</p>";
                } else {
                    echo "<p style='color:red;'>Error: " . mysqli_error($connection) . "</p>";
                }
                // Registration logic here (e.g., insert into database)
            }
        }
?>

</div>
</body>
</html>