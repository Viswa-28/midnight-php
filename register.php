<?php
include('config/config.php');
// Start session to use later (e.g., for flash messages)
// session_start();



$name = $email = $password = $confirm_password = "";
$errors = [];

// Form submission handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitize and validate name
    if (empty($_POST["name"])) {
        $errors['name'] = "Name is required.";
    } else {
        $name = htmlspecialchars($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $errors['name'] = "Only letters and white space allowed.";
        }
    }

    // Validate email
    if (empty($_POST["email"])) {
        $errors['email'] = "Email is required.";
    } else {
        $email = htmlspecialchars($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Invalid email format.";
        }
    }

    // Validate password
    if (empty($_POST["password"])) {
        $errors['password'] = "Password is required.";
    } else {
        $password = $_POST["password"];
        if (strlen($password) < 6) {
            $errors['password'] = "Password must be at least 6 characters.";
        }
    }

    // Confirm password
    if (empty($_POST["confirm_password"])) {
        $errors['confirm_password'] = "Please confirm your password.";
    } else {
        $confirm_password = $_POST["confirm_password"];
        if ($password !== $confirm_password) {
            $errors['confirm_password'] = "Passwords do not match.";
        }
    }

    if (empty($errors)) {
        $query = "INSERT INTO registration (name, email, password) VALUES ('$name', '$email', '$password')";
        echo $query;
        $res = mysqli_query($connection, $query);
        if ($res) {
            echo "<p style='color: green;'>Registration successful !!!</p>";
            header("Location:index.php");
        } else {
            // $errors['db'] = "Database error: " . mysqli_error($connection);
            echo "<p style='color: red;'>Registration not done properly !!!</p>";
        }
    }
}

?>

<!DOCTYPE html>
<html>
<?php
include('head.php');
?>

<body>

    <h2 style="text-align:center;">Register</h2>
    <form method="post" action="">
        <label>Name:</label><br>
        <input type="text" name="name" value="<?= htmlspecialchars($name) ?>">
        <div class="error"><?= $errors['name'] ?? '' ?></div>

        <label>Email:</label><br>
        <input type="text" name="email" value="<?= htmlspecialchars($email) ?>">
        <div class="error"><?= $errors['email'] ?? '' ?></div>

        <label>Password:</label><br>
        <input type="password" name="password">
        <div class="error"><?= $errors['password'] ?? '' ?></div>

        <label>Confirm Password:</label><br>
        <input type="password" name="confirm_password">
        <div class="error"><?= $errors['confirm_password'] ?? '' ?></div>

        <input type="submit" value="Register">
    </form>



</body>

</html>