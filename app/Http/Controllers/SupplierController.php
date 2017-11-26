<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getNewSupplier(){
        return view('admin.supplier.newSupplier');
    }

    public function postNewSupplier(Request $request){
        $this->validate($request,[
            'name'=>'required|unique:suppliers',
            'phone'=>'required|min:6',
            'address'=>'required'
        ]);

        $supplier=new Supplier();
        $supplier->name=$request['name'];
        $supplier->phone=$request['phone'];
        $supplier->address=$request['address'];
        $supplier->save();
        return redirect()->back()->with(['msg'=>'New Supplier was successfully added!']);
    }

    public function viewAll(){
        $supplier=Supplier::all();
        return view('admin.supplier.viewSupplier')->with(['suppliers'=>$supplier]);
    }

    public function deleteSupplier($id){
        $supplier=Supplier::find($id);
        $supplier->delete();
        return redirect()->back()->with(['msg'=>'Delete Successful!']);
    }

    public function getEditSupplier($id){
        $supplier=Supplier::find($id);
        return view('admin.supplier.updateSupplier')->with(['supplier'=>$supplier]);
    }

    public function updateSupplier(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'phone'=>'required|min:6',
            'address'=>'required'
        ]);

        $id=$request['id'];
        $supplier=Supplier::find($id);
        $supplier->name=$request['name'];
        $supplier->phone=$request['phone'];
        $supplier->address=$request['address'];

        $supplier->update();
        return redirect()->back()->with(['updateInfo'=>'Update Successful']);
    }


}
