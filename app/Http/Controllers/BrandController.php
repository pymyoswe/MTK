<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getNewBrand(){
        return view('admin.brand.newBrand');
    }

    public function postNewBrand(Request $request){
        $this->validate($request,[
            'name'=>'required|unique:brands'
        ]);

        $brand=new Brand();
        $brand->name=$request['name'];
        $brand->save();
        return redirect()->back()->with(['msg'=>'New Brand was successfully added!']);
    }

    public function viewAll(){
        $brand=Brand::all();
        return view('admin.brand.viewBrand')->with(['brands'=>$brand]);
    }

    public function deleteBrand($id){
        $brand=Brand::find($id);
        $brand->delete();
        return redirect()->back()->with(['msg'=>'Delete Successful!']);
    }

    public function editBrand(Request $request){
        $id=$request['id'];
        $brand=Brand::find($id);
        $brand->name=$request['name'];
        $brand->update();
        return redirect()->back()->with(['updateInfo'=>'Update Successful!']);
    }
}
