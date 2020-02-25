<?php

namespace App\Http\Controllers;
use App\Episode;
use Illuminate\Http\Request;

class EpisodeController extends Controller
{
    public function save (Request $request){
        
        $episode = new Episode();
        $episode->name = $request->name;
        $episode->description = $request->description;
        $episode->startdate = $request->startdate;
        $episode->enddate = $request->enddate;
        $episode->save();


        $alldata=Episode::all();
        return view('episode')->with('episode',$alldata);

    }
    public function edit (Request $request){

        // $id= $request->id;
        // $name=$request->name;
        // $description=$request->description;
        // $startdate=$request->startdate;
        // $enddate=$request->startdate;
        // $data=Chanel::find($id);
        // $data->name = $name;
        // $data->description =$description;
        // $data->startdate =$startdate;
        // $data->enddate =$enddate;
        // $data->save();

    }

    public function update ($id){
        $episode=Episode::find($id);
        return view('updatechanel')->with('episodedata',$episode);

    }
    public function delete ($id){
        $episode=Episode::find($id);
        $episode->delete();
     
    }

    public function getall (){
        $alldata=Episode::all();
        return  $alldata;
    }
}
