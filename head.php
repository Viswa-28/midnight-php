<?php 
$page=basename($_SERVER['PHP_SELF']);

?>


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
if($page=='index.php'){
  echo '<title>Home-Midnight Vogue</title>';
} elseif($page=='product.php') {
  echo '<title>Product-Midnight Vogue</title>'; 
} elseif($page=='cart.php') {
  echo '<title>Cart-Midnight Vogue</title>';    
}
?>
  <!-- <link rel="shortcut icon" href=
   "./images/favicon.png" type="image/x-icon"> -->
<link rel="shortcut icon" href="./images/favicon-suit.png" type="image/x-icon"> 
 <?php
if($page=='index.php'){
  echo '<link rel="stylesheet" href="./css/style.css">';
  echo '<link rel="stylesheet" href="./css/common.css">';
}
elseif($page=='product.php') {
  echo '<link rel="stylesheet" href="./css/product.css">';
    echo '<link rel="stylesheet" href="./css/common.css">';
}
elseif($page=='cart.php') {
  echo '<link rel="stylesheet" href="./css/cart.css">';
    echo '<link rel="stylesheet" href="./css/common.css">';
}
elseif($page=="register.php") {
  echo '<link rel="stylesheet" href="./css/register.css">';
    echo '<link rel="stylesheet" href="./css/common.css">';
}
elseif($page=="registration.php") {
  echo '<link rel="stylesheet" href="./css/register.css">';
    echo '<link rel="stylesheet" href="./css/common.css">';
}
elseif($page=="login.php") {
  echo '<link rel="stylesheet" href="./css/login.css">';
    // echo '<link rel="stylesheet" href="./css/common.css">';
}
 ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>