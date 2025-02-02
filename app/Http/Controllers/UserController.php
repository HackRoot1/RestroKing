<?php

namespace App\Http\Controllers;

use App\Models\Foods;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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
        $user = User::find(Auth::user()->id);
        return view('profile', compact('user'));
    }

    public function updateProfileView()
    {
        $user = User::find(Auth::id());
        return view('update-profile-details', compact('user'));
    }

    public function updateProfile(Request $request)
    {

        $validations = Validator::make($request->all(), [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'contact_no' => 'required|digits:10',
        ]);

        if ($validations->fails()) {
            return back()->withErrors($validations)->withInput();
        }

        $user = User::where('email', $request->email)->first();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->contact_no = $request->contact_no;
        $user->save();

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
