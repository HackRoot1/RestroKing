<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Foods;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\FoodCategories;
use Illuminate\Support\Facades\Validator;

class HandleFoodsDataController extends Controller
{

    // Customers Data 

    public function viewCustomers() {
        $customers = User::where('role', 'customer')->get();
        return view('admin.view_customers', compact('customers'));
    }


    // Food Data
    public function addFoodDataView()
    {
        $foodCategories = FoodCategories::get();
        return view('admin.add_food', compact('foodCategories'));
    }

    public function storeFood(Request $request)
    {

        $validation = Validator::make($request->all(), [
            'foodName' => 'required',
            'foodDescription' => 'required',
            'foodCategory' => 'required',
            'foodIngredients' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'badge' => 'required',
        ]);

        if ($validation->fails()) {
            return back()->withErrors($validation)->withInput();
        }

        $slug = Str::slug($request->foodName, '-');

        $food = new Foods();
        $food->name = $request->foodName;
        $food->slug = $slug;
        $food->description = $request->foodDescription;
        $food->category = $request->foodCategory;
        $food->ingredient = $request->foodIngredients;
        $food->price = $request->price;
        $food->discount = $request->discount;
        $food->badge = $request->badge;
        $food->image = 'demo.png';
        $food->save();

        return redirect()->route('view.foods')->with('success', 'Successfully Added Food Item');
    }

    public function viewFoods()
    {
        // $foods = Foods::get();
        $foods = Foods::with('categories')->get();
        return view('admin.view_food', compact('foods'));
    }

    public function deleteFood(Request $request)
    {
        $food = Foods::find($request->id);
        $food->delete();
        return redirect()->back()->with('success', 'Successfully deleted food category');
    }

    public function showUpdateFood(String $id)
    {
        $foodData = Foods::with('categories')->find($id);
        $foodCategories = FoodCategories::get();
        return view('admin.edit_food', compact('foodData', 'foodCategories'));
    }

    public function updateFood(Request $request) {
        $validation = Validator::make($request->all(), [
            'foodId' => 'required|numeric',
            'foodName' => 'required',
            'foodDescription' => 'required',
            'foodCategory' => 'required',
            'foodIngredients' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'badge' => 'required',
        ]);

        if ($validation->fails()) {
            return back()->withErrors($validation)->withInput();
        }

        $slug = Str::slug($request->foodName, '-');

        $food = Foods::findOrFail($request->foodId);
        $food->name = $request->foodName;
        $food->slug = $slug;
        $food->description = $request->foodDescription;
        $food->category = $request->foodCategory;
        $food->ingredient = $request->foodIngredients;
        $food->price = $request->price;
        $food->discount = $request->discount;
        $food->badge = $request->badge;
        $food->image = 'demo.png';
        $food->save();

        return redirect()->route('view.foods')->with('success', 'Successfully Updated Food Item');
    }

    // Food Category
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
