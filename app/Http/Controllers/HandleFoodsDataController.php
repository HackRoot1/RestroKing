<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Foods;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\FoodCategories;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Drivers\Gd\Driver;

class HandleFoodsDataController extends Controller
{

    // Customers Data 

    public function viewCustomers() {
        $customers = User::where('role', 'customer')->get();
        return view('admin.view_customers', compact('customers'));
    }
    
    public function viewCustomerDetails(String $id) {
        $customerDetail = User::findOrFail($id);
        return view('admin.view_cutomer_details', compact('customerDetail'));
    }

    // Food Data
    public function addFoodDataView()
    {
        $foodCategories = FoodCategories::get();
        return view('admin.add_food', compact('foodCategories'));
    }

    public function storeFood(Request $request)
    {

        $rules = [
            'foodName' => 'required',
            'foodDescription' => 'required',
            'foodCategory' => 'required',
            'foodIngredients' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'badge' => 'required',
        ];

        if ($request->hasFile('foodImage')) {
            $rules['foodImage'] = 'image|mimes:jpeg,png,jpg,gif,svg|max:2048';
        }

        $validation = Validator::make($request->all(), $rules);

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
        $food->save();

        if ($request->hasFile('foodImage')) {

            // checking if already image available or not 
            if (isset($food->image)) {
                $image_path = public_path('/images/foods/' . $food->image);
                $image_thumb_path = public_path('/images/foods/thumb/' . $food->image);
                if (file_exists($image_thumb_path)) {
                    @unlink($image_path);
                    @unlink($image_thumb_path);
                }
            }

            // uploading image in main folder
            $image = $request->file('foodImage');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/images/foods/'), $imageName);

            // converting image as thumbnail
            $manager = new ImageManager(Driver::class);
            $img = $manager->read(public_path('/images/foods/' . $imageName));
            $img->cover(150, 150);

            $thumbPath = public_path('/images/foods/thumb');
            if (!file_exists($thumbPath)) {
                mkdir($thumbPath, 0755, true); // Create thumbnail directory if it doesn't exist
            }

            $img->save($thumbPath . '/' . $imageName);
            // thumbnail done 

            // updating image 
            if (isset($food->image)) {
                $food->image()->update([
                    'image' => $imageName,
                ]);
            } else {
                $food->image()->create([
                    'image' => $imageName,
                ]);
            }
        }

        return redirect()->route('view.foods')->with('success', 'Successfully Added Food Item');
    }

    public function viewFoods()
    {
        // $foods = Foods::get();
        $foods = Foods::with('categories')->with('image')->get();
        return view('admin.view_food', compact('foods'));
    }

    public function deleteFood(Request $request)
    {
        $food = Foods::find($request->id);
        $food->image()->delete();
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

        $rules = [
            'foodId' => 'required|numeric',
            'foodName' => 'required',
            'foodDescription' => 'required',
            'foodCategory' => 'required',
            'foodIngredients' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'badge' => 'required',
        ];

        if ($request->hasFile('foodImage')) {
            $rules['foodImage'] = 'image|mimes:jpeg,png,jpg,gif,svg|max:2048';
        }

        $validation = Validator::make($request->all(), $rules);

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
        $food->save();

        if ($request->hasFile('foodImage')) {

            // checking if already image available or not 
            if (isset($food->image)) {
                $image_path = public_path('/images/foods/' . $food->image);
                $image_thumb_path = public_path('/images/foods/thumb/' . $food->image);
                if (file_exists($image_thumb_path)) {
                    @unlink($image_path);
                    @unlink($image_thumb_path);
                }
            }

            // uploading image in main folder
            $image = $request->file('foodImage');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/images/foods/'), $imageName);

            // converting image as thumbnail
            $manager = new ImageManager(Driver::class);
            $img = $manager->read(public_path('/images/foods/' . $imageName));
            $img->cover(150, 150);

            $thumbPath = public_path('/images/foods/thumb');
            if (!file_exists($thumbPath)) {
                mkdir($thumbPath, 0755, true); // Create thumbnail directory if it doesn't exist
            }

            $img->save($thumbPath . '/' . $imageName);
            // thumbnail done 

            // updating image 
            if (isset($food->image)) {
                $food->image()->update([
                    'image' => $imageName,
                ]);
            } else {
                $food->image()->create([
                    'image' => $imageName,
                ]);
            }
        }

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
