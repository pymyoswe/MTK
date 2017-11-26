<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Supplier;
use App\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $category=Category::all();
        $brand=Brand::all();
        $supplier=Supplier::all();
        $unit=Unit::all();
        return view('admin.home')
            ->with(['category'=>$category])
            ->with(['brand'=>$brand])
            ->with(['supplier'=>$supplier])
            ->with(['unit'=>$unit]);
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('/');
    }
}
