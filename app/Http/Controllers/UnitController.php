<?php

namespace App\Http\Controllers;

use App\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getNewUnit(){
        return view('admin.unit.newUnit');
    }

    public function postNewUnit(Request $request){
        $this->validate($request,[
            'name'=>'required|unique:units'
        ]);

        $unit=new Unit();
        $unit->name=$request['name'];
        $unit->save();
        return redirect()->back()->with(['msg'=>'New Unit measurement was successfully added!']);
    }

    public function viewAll(){
        $unit=Unit::all();
        return view('admin.unit.viewUnit')->with(['units'=>$unit]);
    }

    public function deleteUnit($id){
        $unit=Unit::find($id);
        $unit->delete();
        return redirect()->back()->with(['msg'=>'Delete Successful!']);
    }

    public function editUnit(Request $request){
        $id=$request['id'];
        $unit=Unit::find($id);
        $unit->name=$request['name'];
        $unit->update();
        return redirect()->back()->with(['updateInfo'=>'Update Successful!']);
    }
}
