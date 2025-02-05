<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    
    public function foodslist() {
        return $this->belongsTo(Foods::class, 'food_id');
    }
    
    public function userData() {
        return $this->belongsTo(User::class, 'user_id');
    }

    
}
