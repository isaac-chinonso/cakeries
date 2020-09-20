<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        return view('user.order');
    }
}
