<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chanel;
class ChanelController extends Controller
{
    public function save (Request $request){

        $chanel = new Chanel();
        $chanel->name = $request->name;
        $chanel->description = $request->description;
        $chanel->startdate = $request->startdate;
        $chanel->enddate = $request->enddate;
        $chanel->save();


        $alldata=Chanel::all();
        return view('chanel')->with('chanel',$alldata);

    }
    public function edit (Request $request){

        $id= $request->id;
        $name=$request->name;
        $description=$request->description;
        $startdate=$request->startdate;
        $enddate=$request->startdate;
        $data=Chanel::find($id);
        $data->name = $name;
        $data->description =$description;
        $data->startdate =$startdate;
        $data->enddate =$enddate;
        $data->save();

        
        $alldata=Chanel::all();
        return view('chanel')->with('chanel',$alldata);
    }

    public function update ($id){
        $chanel=Chanel::find($id);
        return view('updatechanel')->with('chaneldata',$chanel);

    }
    public function delete ($id){
        $chanel=Chanel::find($id);
        $chanel->delete();
      //  return redirect()->back();
    }
}
