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
    if(isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $query = "SELECT * FROM registration WHERE email='$email' AND password='$password'";
        $result = mysqli_query($connection, $query);
        if($result){
           while($row=mysqli_fetch_array($result)){
             $usermail = $row['email'];
             $userpassword = $row['password'];
             if($email == $usermail && $password == $userpassword){
                $_SESSION['email'] = $email;
                header("Location: index.php");
                exit();
             } else {
                echo "<script>alert('Invalid email or password');</script>";
             }

           }
        }
    }




    ?>

    
</body>
</html>