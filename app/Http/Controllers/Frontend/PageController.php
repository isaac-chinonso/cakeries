<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public  function index()
    {
        return view('frontend.index');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function testimonial()
    {
        return view('frontend.testimonial');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function allcake()
    {
        return view('frontend.allcake');
    }

    public function wedding()
    {
        return view('frontend.wedding');
    }

    public function men()
    {
        return view('frontend.men');
    }

    public function specialevent()
    {
        return view('frontend.specialevent');
    }

    public function boy()
    {
        return view('frontend.boy');
    }

    public function cupcake()
    {
        return view('frontend.cupcake');
    }

    public function girl()
    {
        return view('frontend.girl');
    }

    public function lady()
    {
        return view('frontend.lady');
    }

    public function login()
    {
        return view('frontend.login');
    }

    public function register()
    {
        return view('frontend.register');
    }

    public function singlecake()
    {
        return view('frontend.singlecake');
    }
}
