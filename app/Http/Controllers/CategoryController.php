<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getNewCategory(){
        return view('admin.category.newCategory');
    }

    public function postNewCategory(Request $request){
        $this->validate($request,[
           'name'=>'required|unique:categories'
        ]);

        $category=new Category();
        $category->name=$request['name'];
        $category->save();

        return redirect()->back()->with(['msg'=>'New Category was successfully added!']);
    }

    public function viewAll(){
        $category=Category::all();
        return view('admin.category.viewCategory')->with(['categories'=>$category]);
    }

    public function deleteCategory($id){
        $category=Category::find($id);
        $category->delete();
        return redirect()->back()->with(['msg'=>'Delete Successful!']);
    }

    public function editCategory(Request $request){
        $id=$request['id'];
        $category=Category::find($id);
        $category->name=$request['name'];

        $category->update();
        return redirect()->back()->with(['updateInfo'=>'Update Successful!']);
    }
}
