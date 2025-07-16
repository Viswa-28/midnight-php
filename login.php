<?php
include('config/config.php');
// session_start();
?>



<!DOCTYPE html>
<html lang="en">
<?php
include('head.php');
?>
<body>

<?php
    if(isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $query = "SELECT * FROM registration WHERE email='$email' AND password='$password'";
        $result = mysqli_query($connection, $query);
        if($result){
           while($row=mysqli_fetch_array($result)){
             $userMail = $row['email'];
             $userPassword = $row['password'];
             if($email == $userMail && $password == $userPassword){
                echo "<p style='color: green;'>Login successful !!!</p>";
                header("Location:index.php");
             } elseif($email == $userMail && $password != $userPassword) {
                echo "<p style='color: red;'>Incorrect password !!!</p>";
                header("Location:login.php");
             } elseif($email != $userMail && $password == $userPassword) {
                echo "<p style='color: red;'>Invalid email !!!</p>";
             } elseif($email == $userMail && $password == $userPassword && $row['status'] == 'admin') {
                  echo "<p style='color: green;'>Admin login successful !!!</p>";
                  header("Location:admin.php");
             }
             else {
                echo "<p style='color: red;'>Invalid email or password !!!</p>";
             }
           }
        }
    }




    ?>

    
</body>
</html>