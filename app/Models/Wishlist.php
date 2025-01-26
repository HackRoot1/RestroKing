<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    public function foodslist() {
        return $this->belongsTo(Foods::class, 'food_id', 'id');
    }
}
