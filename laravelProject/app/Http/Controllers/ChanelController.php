<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Chanel;
use App\file;
use Illuminate\Support\Facades\Input;
class ChanelController extends Controller
{


    public function index(){
        $alldata=Chanel::all();
        return view('chanel')->with('chanel',$alldata);
    }

    public function save (Request $request){
      
        $this->validate($request,[
            'name'=>'required',
            'image'=>'required',
            'startdate'=>'required',
            'description'=>'required',
            'enddate'=>'required'
        ]);


        $file = $request->file('image');
        $file->move(base_path()."/public/images/",$file->getClientOriginalName());
        $chanel = new Chanel();
        $chanel->name = $request->name;
        $chanel->description = $request->description;
        $chanel->startdate = $request->startdate;
        $chanel->enddate = $request->enddate;
        $chanel->logo = $file->getClientOriginalName();

        $chanel->save();
        $alldata=Chanel::all();
       return view('chanel')->with('chanel',$alldata);
    }
    public function edit (Request $request){
      
        $chanel =Chanel::find($request->id);
        $chanel->name = $request->name;
        $chanel->description = $request->description;
        $chanel->startdate = $request->startdate;
        $chanel->enddate = $request->enddate;
        $chanel->logo =$request->image;
        $chanel->save();
        $alldata=Chanel::all();
        return view('chanel')->with('chanel',$alldata);
    }

    public function update ($id){
        if($id != null){
            $chanel=Chanel::find($id);
            return view('updatechanel')->with('chaneldata',$chanel);
        }
    }
    public function delete ($id){
        if($id != null){
        $chanel=Chanel::find($id);
        $chanel->delete();
        $alldata=Chanel::all();
        return view('chanel')->with('chanel',$alldata);
        }
    }

    public function getall (){
        $alldata=Chanel::all();
        return  $alldata;
    }


}
