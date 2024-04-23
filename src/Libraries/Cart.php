<?php

namespace App\Libraries;

use App\Libraries\Config;

class Cart
{
    protected $config;
    protected $cartName;

    public function __construct()
    {
        $this->config = new Config;
        $this->cartName = $this->config->get('Cart.name');
        $this->createCart();
    }

    protected function createCart()
    {
        if (!isset($_SESSION[$this->cartName])) {
            $_SESSION[$this->cartName] = [];
        }
    }

    public function addItem($id, $name, $price, $quantity = 1)
    {
        $item = [
            'id' => $id,
            'name' => $name,
            'price' => $price,
            'quantity' => $quantity
        ];
        if ($this->itemExists($id)) {
            $this->updateQuantity($id, $quantity);
        } else {
            $_SESSION[$this->cartName][$id] = $item;
        }
    }

    public function removeItem($id)
    {
        if ($this->itemExists($id)) {
            unset($_SESSION[$this->cartName][$id]);
        }
    }

    public function clear()
    {
        $_SESSION[$this->cartName] = [];
    }

    public function getContent()
    {
        return $_SESSION[$this->cartName];
    }

    public function getTotalItems()
    {
        return count($_SESSION[$this->cartName]);
    }

    public function getTotalPrice()
    {
        $totalPrice = 0;
        foreach ($_SESSION[$this->cartName] as $item) {
            $totalPrice += $item['price'] * $item['quantity'];
        }
        return $totalPrice;
    }

    protected function itemExists($id)
    {
        return isset($_SESSION[$this->cartName][$id]);
    }

    protected function updateQuantity($id, $quantity)
    {
        $_SESSION[$this->cartName][$id]['quantity'] += $quantity;
    }
}
