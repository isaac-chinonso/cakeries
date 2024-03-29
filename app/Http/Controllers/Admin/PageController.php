<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Category;
<<<<<<< HEAD
use App\Contact;
=======
>>>>>>> 77078cc7ac9e761d2a0be84f29240d41d2685202
use App\Product;
use App\Order;

class PageController extends Controller
{
    public function admindashboard()
    {
        $user = Auth::user();
        $data['allusers'] = User::where('role_id', '=', 2)->count();
        $data['allcategory'] = Category::where('status', '=', 1)->count();
        $data['allproduct'] = Product::where('status', '!=',0)->count();
        $data['allorder'] = Order::all()->count();
        return view('admin.dashboard', $data);
    }

    public function admincategories()
    {
        $data['categories'] = Category::where('status', '=', 1)->get();
        return view('admin.categories', $data);
    }

    public function adminusers()
    {
        $data['allusers'] = User::where('role_id', '=', 2)->get();
        return view('admin.users', $data);
    }

    public function adminorder()
    {
        $data['allorder'] = Order::all();
        return view('admin.order', $data);
    }

<<<<<<< HEAD
    public function admincontact()
    {
        $data['allwedding'] = Contact::all();
        return view('admin.wedding_order', $data);
    }

=======
>>>>>>> 77078cc7ac9e761d2a0be84f29240d41d2685202
    public function adminproduct()
    {
        $data['categories'] = Category::all();
        $data['products'] = Product::where('status', '=', 1)->get();
        return view('admin.product', $data);
    }

    public function archivedproduct()
    {
        $data['categories'] = Category::all();
        $data['products'] = Product::where('status', '=', 0)->get();
        return view('admin.archivedproduct', $data);
    }

    public function featuredproduct()
    {
        $data['categories'] = Category::all();
        $data['products'] = Product::where('status', '=', 2)->get();
        return view('admin.featuredproduct', $data);
    }


    
}
