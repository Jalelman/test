<?php

class Cart {
    private $items = array();

    public function addItem($item) {
        $this->items[] = $item;
    }

    public function removeItem($index) {
        unset($this->items[$index]);
        $this->items = array_values($this->items);
    }

    public function updateItem($index, $newQty) {
        $this->items[$index]['qty'] = $newQty;
    }

    public function getItems() {
        return $this->items;
    }
}
