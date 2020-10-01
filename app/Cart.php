<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{

    public $items;
    public $totalQuantity;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQuantity = $oldCart->totalQuantity;
        }
    }

    public function add($item)
    {
        $currentItem = [
            'id' => $item->id,
            'quantity' => 0,
            'item' => $item
        ];

        if ($this->items) {
            if (array_key_exists($item->id, $this->items)) {
                $currentItem = $this->items[$item->id];
            }
        }

        $currentItem['quantity']++;

        $this->items[$item->id] = $currentItem;
        $this->totalQuantity++;
    }

    public function removeItem($id)
    {
        $this->totalQuantity = $this->items[$id]['quantity'];
        unset($this->items[$id]);
    }
}
