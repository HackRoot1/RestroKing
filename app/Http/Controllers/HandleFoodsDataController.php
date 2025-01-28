<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HandleFoodsDataController extends Controller
{
    //

    public function addFoodDataView() {
        return view('admin.add_subcategories');
    }

    public function storeFood() {
        return view('admin.add_subcategories');
    }

    public function viewFoods() {
        return view('admin.add_subcategories');
    }

    public function deleteFood() {
        return view('admin.add_subcategories');
    }

    public function showUpdateFood() {
        return view('admin.add_subcategories');
    }
}
