<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function foodslist() {
        return $this->belongsTo(Foods::class, 'food_id');
    }
}
