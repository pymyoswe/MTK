<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Supplier;
use App\Unit;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Echo_;

class PurchaseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getNewPurchase(){
        $category=Category::all();
        $supplier=Supplier::all();
        $brand=Brand::all();
        $unit=Unit::all();
        return view('admin.purchase.newPurchase')
            ->with(['categories'=>$category])
            ->with(['suppliers'=>$supplier])
            ->with(['brands'=>$brand])
            ->with(['units'=>$unit]);
    }

    public function addToPurchaseCart(Request $request){
        echo $request['date'];
        echo $request['company'];
        echo $request['category'];
        echo $request['brand'];
        echo $request['product'];
        echo $request['unit'];
        echo $request['quantity'];
        echo $request['price'];
    }
}
