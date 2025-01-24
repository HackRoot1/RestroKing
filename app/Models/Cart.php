<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function foods() {
        $this->belongsTo(Food::class, 'food_id', 'id');
    }
}
