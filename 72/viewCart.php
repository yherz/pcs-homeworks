<?php
session_start();
include_once "cart.php";
if(!empty($_SESSION['cart'])){
echo"<h1>Your Cart</h1>";
echo"<ul>";
foreach($_SESSION['cart'] as $key=>$value){
    echo"<li>item: $key quantity: $value</li>";
}
echo"</ul>";

}
else{echo"your cart is empty!";}
?>
