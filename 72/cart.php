<?php

include "index.php";
class Cart {
    public function __construct() {
        session_start();
        
        if(empty($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }
    }

    public function addItem($item, $quantity) {
        if(!empty($_SESSION['cart'][$item])) {
            $quantity += $_SESSION['cart'][$item];
        }
        $_SESSION['cart'][$item] = $quantity;
    }

    public function getItems() {
        return $_SESSION['cart'];
    }
}

if(!empty($_GET['item']) && !empty($_GET['quantity'])){
$cart = new Cart();
$itemSelected= $_GET['item'];
$quantitySelected= $_GET['quantity'];
$cart->addItem($itemSelected, $quantitySelected);
print_r($cart->getItems());

}


echo "<br>";


?>