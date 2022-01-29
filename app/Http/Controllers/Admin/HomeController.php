<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('adminMiddle');
    }

    public function index()
    {
        $users = DB::table('users')->get();
        $orders = DB::table('orders')->get();
        $products = DB::table('products')->get();
        return view('back.home', compact('users', 'orders', 'products'));
    }
}
