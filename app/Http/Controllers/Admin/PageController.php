<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;

class PageController extends Controller
{
    public function admindashboard()
    {
        $user = Auth::user();
    	$data['allusers'] = User::where('role_id', '=', 2)->count();
        return view('admin.dashboard', $data);
    }

    public function admincategories()
    {
        return view('admin.categories');
    }

    public function adminusers()
    {
        $data['allusers'] = User::where('role_id', '=', 2)->get();
        return view('admin.users', $data);
    }

    public function adminorder()
    {
        return view('admin.order');
    }

    public function adminproduct()
    {
        return view('admin.product');
    }
}
