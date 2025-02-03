<?php

namespace Database\Seeders;

use App\Models\Foods;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(database_path('json/foods.json'));
        $foods = collect(json_decode($json, true));

        $foods->each(function ($food) {
            Foods::create($food);
        });
    }
}
