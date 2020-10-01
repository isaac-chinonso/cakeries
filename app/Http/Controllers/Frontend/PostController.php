<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Order;
use App\Profile;
use App\Cart;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function myaccount()
    {
        return view('user.account');
    }

    public function myorder()
    {
        $user = Auth::user();
        $data['order'] = Order::where('user_id', $user->id)->get();
        return view('user.order', $data);
    }

    public function saveorder(Request $request)
    {
        $user = Auth::user();
        // Validation
        $this->validate($request, [
            'occasion' => 'required',
            'size' => 'required',
            'color' => 'required',
            'collection_date' => 'required',
            'comment' => 'required',
        ]);

        // Save Record into Order DB

        foreach ($request['product_id'] as $pi) {
            $order = new Order();
            $order->user_id = $user->id;
            $order->product_id = $pi;
            $order->occasion = $request->input('occasion');
            $order->others = $request->input('others');
            $order->size = $request->input('size');
            $order->color = $request->input('color');
            $order->collection_date = $request->input('collection_date');
            $order->comment = $request->input('comment');
            $order->status = 0;
            if (Auth::user()->profile->first()->phone == NULL) {
                return redirect()->back()->with('warning_message', 'Incomplete Profile, kindly complete your profile to continue');
            } else {
                $order->save();
            }
        }
        request()->session()->forget('cart');
        \Session::flash('Success_message', 'You Have Successfully Placed Order, We wil get in touch with you shortly');

        return redirect()->route('myorder');
    }

    // Update profile function
    public function updateprofile(Request $request)
    {
        $user = Auth::user();
        //validate post data
        $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'phone' => 'required',
            'postcode' => 'required',
            'city' => 'required',
            'country' => 'required',
            'street' => 'required',

        ]);

        $profile = Profile::where("user_id", $user->id)->first();
        $profile->fname = $request->input('fname');
        $profile->lname = $request->input('lname');
        $profile->phone = $request->input('phone');
        $profile->postcode = $request->input('postcode');
        $profile->city = $request->input('city');
        $profile->country = $request->input('country');
        $profile->street = $request->input('street');
        $profile->save();

        \Session::flash('Success_message', '✔ Profile Updated Succeffully');

        return back();
    }
}
