<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    public function foods() {
        return $this->belongsTo(Foods::class, 'food_id', 'id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
