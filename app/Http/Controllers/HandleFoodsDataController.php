<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FoodCategories;
use Illuminate\Support\Facades\Validator;

class HandleFoodsDataController extends Controller
{
    //

    public function addFoodDataView()
    {
        $foodCategories = FoodCategories::get();
        return view('admin.add_food', compact('foodCategories'));
    }

    public function storeFood()
    {
        return view('admin.add_subcategories');
    }

    public function viewFoods()
    {
        return view('admin.add_subcategories');
    }

    public function deleteFood()
    {
        return view('admin.add_subcategories');
    }

    public function showUpdateFood()
    {
        return view('admin.add_subcategories');
    }


    public function addFoodCategoryDataView()
    {
        return view('admin.add_food_category');
    }

    public function storeFoodCategoryDataView(Request $request)
    {

        $validation = Validator::make($request->all(), [
            'category' => 'required',
        ]);

        if ($validation->fails()) {
            return back()->withErrors($validation)->withInput();
        }

        $foodCategory = new FoodCategories();
        $foodCategory->food_category = $request->category;
        $foodCategory->save();

        return redirect()->route('view.food.categories')->with('success', 'Successfully added food category');
    }

    public function viewFoodCategoriesData()
    {
        $foodCategories = FoodCategories::get();
        return view('admin.view_food_categories', compact('foodCategories'));
    }

    public function deleteFoodCategory(Request $request)
    {
        $foodCategories = FoodCategories::find($request->id);
        $foodCategories->delete();
        return redirect()->back()->with('success', 'Successfully deleted food category');
    }

    public function showUpdateFoodCategory(String $id)
    {
        $foodCategory = FoodCategories::find($id);
        return view('admin.edit_food_category', compact('foodCategory'));
    }

    public function updateFoodCategory(Request $request)
    {

        $validation = Validator::make($request->all(), [
            'id' => 'required|numeric',
            'category' => 'required',
        ]);

        if ($validation->fails()) {
            return back()->withErrors($validation)->withInput();
        }

        $foodCategory = FoodCategories::findOrFail($request->id);
        $foodCategory->food_category = $request->category;
        $foodCategory->save();
        return redirect()->route('view.food.categories')->with('success', 'Successfully updated food category');
    }
}
