<?php

require_once('../models/Cart.php');

class CartController {
    private $cart;

    public function __construct() {
        session_start();

        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = new Cart();
        }

        $this->cart = $_SESSION['cart'];
    }

    public function index() {
        $items = $this->cart->getItems();
        require_once('../views/cart.php');
    }

    public function addItem($item) {
        $this->cart->addItem($item);
        header('Location: /cart');
    }

    public function removeItem($index) {
        $this->cart->removeItem($index);
        header('Location: /cart');
    }

    public function updateItem($index, $newQty) {
        $this->cart->updateItem($index, $newQty);
        header('Location: /cart');
    }
}
