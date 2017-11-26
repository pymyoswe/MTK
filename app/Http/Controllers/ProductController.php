<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Supplier;
use App\Unit;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getNewProduct(){
        $category=Category::all();
        $supplier=Supplier::all();
        $brand=Brand::all();
        $unit=Unit::all();
        return view('admin.product.newProduct')
            ->with(['categories'=>$category])
            ->with(['suppliers'=>$supplier])
            ->with(['brands'=>$brand])
            ->with(['units'=>$unit]);
    }

    public function postNewProduct(Request $request){

    }
}
