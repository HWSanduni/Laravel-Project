<?php

namespace App\Http\Controllers;
use App\Episode;
use App\Chanel;
use Illuminate\Http\Request;

class EpisodeController extends Controller
{

    public function index(){
     $episodedata=Episode::all();
     return view('viewepisode')->with('viewepisode',$episodedata);
    }
    
    public function get(){
        $alldata=Chanel::all();
        return view('episode')->with('episode',$alldata);
    }

    public function save (Request $request){
        $this->validate($request,[
            'name'=>'required',
            'image'=>'required',
            'chanelid'=>'required',
            'startdate'=>'required',
            'description'=>'required',
            'enddate'=>'required'
        ]);


        $file = $request->file('image');
        $file->move(base_path()."/public/images/",$file->getClientOriginalName());
        $episode = new Episode();
        $episode->name = $request->name;
        $episode->chanel_id = $request->chanelid;
        $episode->description = $request->description;
        $episode->startdate = $request->startdate;
        $episode->enddate = $request->enddate;
        $episode->logo = $file->getClientOriginalName();
        $episode->save();

        $alldata=Episode::all();
        return view('viewepisode')->with('viewepisode',$alldata);

    }
    public function edit (Request $request){
        $episode =Episode::find($request->id);
        $episode->name = $request->name;
        $episode->chanel_id = $request->chanelid;
        $episode->description = $request->description;
        $episode->startdate = $request->startdate;
        $episode->enddate = $request->enddate;
        $episode->logo =$request->image;
        $episode->save();
        $alldata=Episode::all();
        return view('viewepisode')->with('viewepisode',$alldata);
    }

    public function update ($id){
        if($id != null){
        $episode=Episode::find($id);
        $chaneldata=Chanel::find($episode->chanel_id);
        $episode->chanel_Name = $chaneldata->name;
        return view('updateepisode')->with('episodedata',$episode);
        }
    }
    public function delete ($id){
        if($id != null){
        $episode=Episode::find($id);
        $episode->delete();
        $episodedata=Episode::all();
        return view('viewepisode')->with('viewepisode',$episodedata);
        }
    }

    public function getall (){
        $alldata=Episode::all();
        return  $alldata;
    }
}
