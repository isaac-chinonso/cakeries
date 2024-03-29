<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Profile;
<<<<<<< HEAD
use App\Mail\UserRegistration;
use App\Mail\UserWelcome;
=======
use App\Mail\Register;
>>>>>>> 77078cc7ac9e761d2a0be84f29240d41d2685202
use Mail;

class UserController extends Controller
{
    // Login Function
    public function signin(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect('/login')
                ->withErrors($validator)
                ->withInput($request->all());
        }

        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password'], 'role_id' => '1'])) {

            return redirect()->intended(route('admindashboard'));
        }

        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password'], 'role_id' => '2'])) {

            return redirect()->intended(route('myaccount'));
        }

        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password'], 'role_id' => '2'])) {

            return redirect()->intended(route('myaccount'));
        }
        \Session::flash('warning_message', 'These credentials do not match our records.');

        return redirect()->back();
    }

    //Save Users Function
    public function savelogin(Request $request)
    {
        // Validation
        $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'password' => 'required|min:4',
            'confirm_password' => 'required|same:password',
        ]);

        // Save Record into user DB
        $user = new User();
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->role_id = 2;

        if (User::where('email', '=', $user->email)->where('role_id', '=', '2')->exists()) {
            return redirect()->back()->with('warning_message', 'user already exist');
        } else {
            $user->save();
        }
        // Save Record into picture DB
        $profile = new Profile();
        $profile->user_id = $user->id;
        $profile->fname = $request->input('fname');
        $profile->lname = $request->input('lname');
        $profile->phone = '';
        $profile->postcode = '';
        $profile->city = '';
        $profile->country = '';
        $profile->street = '';
        $profile->fax = '';
        $profile->save();

        Auth::login($user);

        $user = Auth::user();

<<<<<<< HEAD
        $this->email = ['enquiries@cakeries.co.uk'];

        Mail::to($this->email)->send(new UserRegistration($user));

        Mail::to($user->email)->send(new UserWelcome($user));

        \Session::flash('Success_message', 'You have successfully registered');
=======
        \Session::flash('Success_message', 'You Have Successfully Registered');
>>>>>>> 77078cc7ac9e761d2a0be84f29240d41d2685202

        return redirect()->route('myaccount');
    }

    // Logout Function
    public function logout()
    {
        $user = Auth::user();

        Auth::logout();
<<<<<<< HEAD
        request()->session()->forget('cart');
=======
>>>>>>> 77078cc7ac9e761d2a0be84f29240d41d2685202
        return redirect()->route('login');
    }
}
