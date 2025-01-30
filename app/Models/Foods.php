<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Foods extends Model
{
    public function categories() {
        return $this->belongsTo(FoodCategories::class, 'category');
    }
}
