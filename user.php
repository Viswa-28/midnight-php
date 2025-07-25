    <?php
// include('head.php');

include('./config/config.php');

$query = "SELECT * FROM registration ";
// print_r($query);

$result = mysqli_query($connection, $query);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Users</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <!-- <th>Password</th>
            <th>Status</th> -->
        </tr>
        <?php
        if($result){
            while($user = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$user['id']."</td>";
                echo "<td>".$user['name']."</td>";
                echo "<td>".$user['email']."</td>";
                // echo "<td>".$user['password']."</td>";
                // echo "<td>".$user['status']."</td>";
                echo "</tr>";

            }
            $user['id'] = 1;
            $user['id']++;

        }
        ?>
    </table>
    
</body>
</html>

   

  
 