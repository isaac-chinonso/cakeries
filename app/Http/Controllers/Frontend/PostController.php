<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Order;
use App\Profile;
<<<<<<< HEAD
use App\Contact;
use Mail;
use App\Mail\UserContact;
use App\Mail\UserOrder;
use App\Mail\UserOrderNotification;
=======
use App\Cart;
>>>>>>> 77078cc7ac9e761d2a0be84f29240d41d2685202

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
<<<<<<< HEAD
            'flavour' => 'required',
            'filling' => 'required',
=======
>>>>>>> 77078cc7ac9e761d2a0be84f29240d41d2685202
            'collection_date' => 'required',
            'collection_type' => 'required',
        ]);

        // Save Record into Order DB
<<<<<<< HEAD
=======

>>>>>>> 77078cc7ac9e761d2a0be84f29240d41d2685202
        foreach ($request['product_id'] as $pi) {
            $order = new Order();
            $order->user_id = $user->id;
            $order->product_id = $pi;
            $order->occasion = $request->input('occasion');
<<<<<<< HEAD
            $order->other_occasion = $request->input('other_occasion');
            $order->size = $request->input('size');
            $order->other_size = $request->input('other_size');
            $order->color = $request->input('color');
            $order->flavour = $request->input('flavour');
            $order->other_flavour = $request->input('other_flavour');
            $order->filling = $request->input('filling');
            $order->other_filling = $request->input('other_filling');
=======
            $order->others = $request->input('others');
            $order->size = $request->input('size');
            $order->color = $request->input('color');
>>>>>>> 77078cc7ac9e761d2a0be84f29240d41d2685202
            $order->collection_date = $request->input('collection_date');
            $order->collection_type = $request->input('collection_type');
            $order->comment = $request->input('comment');
            $order->status = 0;
            if (Auth::user()->profile->first()->phone == NULL) {
<<<<<<< HEAD
                return redirect()->back()->with('warning_message', 'Incomplete profile, kindly complete your profile to continue');
=======
                return redirect()->back()->with('warning_message', 'Incomplete Profile, kindly complete your profile to continue');
>>>>>>> 77078cc7ac9e761d2a0be84f29240d41d2685202
            } else {
                $order->save();
            }
        }
        request()->session()->forget('cart');
<<<<<<< HEAD

        $this->email = ['enquiries@cakeries.co.uk'];

        Mail::to($this->email)->send(new UserOrder($user));

        Mail::to($user->email)->send(new UserOrderNotification($user));

        \Session::flash('Success_message', 'You have successfully placed order, we wil get in touch with you shortly');
=======
        \Session::flash('Success_message', 'You Have Successfully Placed Order, We wil get in touch with you shortly');
>>>>>>> 77078cc7ac9e761d2a0be84f29240d41d2685202

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

<<<<<<< HEAD
        \Session::flash('Success_message', '✔ Profile updated succeffully');

        return back();
    }
    public function weddingorder()
    {
        return view('user.order_wedding');
    }

    public function saveweddingorder(Request $request)
    {
        // Validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);

        // Save Record into Contact DB
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->phone = $request->input('phone');
        $contact->message = $request->input('message');
        $contact->status = 1;
        $contact->save();

        $this->email = ['enquiries@cakeries.co.uk'];

        Mail::to($this->email)->send(new UserContact($contact));

        \Session::flash('Success_message', 'Thank you for your message, we will get in touch with you shortly');

        return redirect()->route('myaccount');
    }
=======
        \Session::flash('Success_message', '✔ Profile Updated Succeffully');

        return back();
    }
>>>>>>> 77078cc7ac9e761d2a0be84f29240d41d2685202
}
