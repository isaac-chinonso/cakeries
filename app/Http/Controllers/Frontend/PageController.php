<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class PageController extends Controller
{
    public  function index()
    {
        $data['product'] = Product::where('status', 2)->paginate(7);
        return view('frontend.index', $data);
    }

    public function productdetails(Request $request, $slug)
    {
        $data['proddetail'] = Product::where('slug', $slug)->first();
        $data['similarprod'] = Product::where('status', '!=', 0)->where('category_id', $data['proddetail']->category_id)->where('id', '!=',$data['proddetail']->id)->inRandomOrder()->limit(4)->get();
        return view('frontend.singlecake', $data);
    }

    public function placeorder()
    {
        $products = request()->session()->get('cart');
        return view('user.place-order',compact('products'));
    }

    public function allcake()
    {
        $data['product'] = Product::where('status', 2)->paginate(7);
        return view('frontend.allcake', $data);
    }

    public function wedding()
    {
        $data['productcat'] = Product::where('category_id', 1)->where('status', '!=',0)->inRandomOrder()->limit(20)->get();
        return view('frontend.categories.wedding', $data);
    }

    public function men()
    {
        $data['productcat'] = Product::where('category_id', 2)->where('status', '!=',0)->inRandomOrder()->limit(20)->get();
        return view('frontend.categories.men', $data);
    }

    public function specialevent()
    {
        $data['productcat'] = Product::where('category_id', 3)->where('status', '!=',0)->inRandomOrder()->limit(20)->get();
        return view('frontend.categories.specialevent', $data);
    }

    public function boy()
    {
        $data['productcat'] = Product::where('category_id', 4)->where('status', '!=',0)->inRandomOrder()->limit(20)->get();
        return view('frontend.categories.boy', $data);
    }

    public function cupcake()
    {
        $data['productcat'] = Product::where('category_id', 5)->where('status', '!=',0)->inRandomOrder()->limit(20)->get();
        return view('frontend.categories.cupcake', $data);
    }

    public function girl()
    {
        $data['productcat'] = Product::where('category_id', 6)->where('status', '!=',0)->inRandomOrder()->limit(20)->get();
        return view('frontend.categories.girl', $data);
    }

    public function lady()
    {
        $data['productcat'] = Product::where('category_id', 7)->where('status', '!=',0)->inRandomOrder()->limit(20)->get();
        return view('frontend.categories.lady', $data);
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function testimonial()
    {
        return view('frontend.testimonial');
    }

    public function flavour()
    {
        return view('frontend.flavour');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function login()
    {
        return view('frontend.login');
    }

    public function register()
    {
        return view('frontend.register');
    }
}
