<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Foods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Drivers\Gd\Driver;

class UserController extends Controller
{
    public function home()
    {
        // $foods = Foods::get();
        return view('home');
    }

    public function loginView()
    {
        return view('login');
    }

    public function loginAuth(Request $request)
    {
        $validations = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if ($validations->fails()) {
            return back()->withErrors($validations)->withInput();
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'customer'])) {
            return redirect()->route('home');
        } else {
            flash()->error('Incorrect email or password.');
            return back()->withErrors('error', 'Incorrect email or password.');
        }
    }

    public function registerView()
    {
        return view('register');
    }

    public function registerStore(Request $request)
    {
        $validations = Validator::make($request->all(), [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'email|unique:users',
            'password' => 'required|min:6',
        ]);

        if ($validations->fails()) {
            return back()->withErrors($validations)->withInput();
        }

        $user = new User();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        if ($user) {
            return redirect()->route('login.view');
        } else {
            return back()->withErrors('error', 'please try again');
        }
    }

    public function profileView()
    {
        $user = User::with('userImage')->find(Auth::user()->id);
        return view('profile', compact('user'));
    }

    public function updateProfileView()
    {
        $user = User::find(Auth::id());
        return view('update-profile-details', compact('user'));
    }

    public function updateProfile(Request $request)
    {

        $rules = [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'contact_no' => 'required|digits:10',
        ];

        if ($request->hasFile('profileImage')) {
            $rules['profileImage'] = 'image|mimes:jpeg,png,jpg,gif,svg|max:2048';
        }

        $validations = Validator::make($request->all(), $rules);

        if ($validations->fails()) {
            return back()->withErrors($validations)->withInput();
        }



        $user = User::where('email', $request->email)->first();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->contact_no = $request->contact_no;
        $user->save();


        if ($request->hasFile('profileImage')) {

            // checking if already image available or not 
            if (isset($user->userImage->image)) {
                $image_path = public_path('/images/user/' . $user->userImage->image);
                $image_thumb_path = public_path('/images/user/thumb/' . $user->userImage->image);
                if (file_exists($image_thumb_path)) {
                    @unlink($image_path);
                    @unlink($image_thumb_path);
                }
            }

            // uploading image in main folder
            $image = $request->file('profileImage');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/images/user/'), $imageName);

            // converting image as thumbnail
            $manager = new ImageManager(Driver::class);
            $img = $manager->read(public_path('/images/user/' . $imageName));
            $img->cover(150, 150);

            $thumbPath = public_path('/images/user/thumb');
            if (!file_exists($thumbPath)) {
                mkdir($thumbPath, 0755, true); // Create thumbnail directory if it doesn't exist
            }

            $img->save($thumbPath . '/' . $imageName);
            // thumbnail done 

            // updating image 
            if (isset($user->userImage->image)) {
                $user->userImage()->update([
                    'image' => $imageName,
                ]);
            } else {
                $user->userImage()->create([
                    'image' => $imageName,
                ]);
            }
        }

        if ($user) {
            return redirect()->route('profile.view')->with('success', 'Successfully updated profile information');
        }

        return back()->with('error', 'Please fill correct Information');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.view');
    }
}
