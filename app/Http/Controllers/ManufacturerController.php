<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manufacturer;
use DB;

class ManufacturerController extends Controller
{
    public function createManu(){
      return view('admin.manufacturer.createManu');
    }


//for stroing the value from create manu form page
    public function storeManu(Request $request){
      $this->validate($request, [
        'manufacturerName'=>'required',
        'manufacturerDescription'=>'required',
      ]);
      $manufacturer=new Manufacturer();
      $manufacturer->manufacturerName= $request->manufacturerName; //req to cat passing value
      $manufacturer->manufacturerDescription= strip_tags($request->manufacturerDescription);
      $manufacturer->manufacturerStatus= $request->manufacturerStatus;
      $manufacturer-> save();
      //Manufacturer::create(strip_tags ( $request->all() ) );
      //would not work if you dont create protected var fillable in Manufacturer.php
      return redirect ('/manufacturer/create-manu')-> with('message', 'Manufacturer info added successfully!') ;

    }

    //for retrieving value
    public function manageManu(){
      $manus=Manufacturer::all();
      return view('admin.manufacturer.manageManu',['manus'=>$manus]);
    }

    //for editing records
    public function editManu($id){
      $manuById=Manufacturer::where('id', $id)->first();
      return view('admin.manufacturer.editManu', ['manuById'=>$manuById]);
    }
    //for updating after update btn click at edit form page
    public function updateManu(Request $request){
        //dd($request->all() );
        $manu= Manufacturer::find($request->id);
        $manu->manufacturerName=$request->manufacturerName;
        $manu->manufacturerDescription=strip_tags($request->manufacturerDescription);
        $manu->manufacturerStatus=$request->manufacturerStatus;
        $manu->save();
        return redirect('/manufacturer/manage-manu')->with('message','Manufacturer info updated successfully');
    }
    public function deleteManu($id){
      $manu=Manufacturer::find($id);
      $manu->delete();
      return redirect('/manufacturer/manage-manu')->with('message','Record row deleted successfully');
    }
}
