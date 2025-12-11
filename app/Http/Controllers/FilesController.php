<?php

namespace App\Http\Controllers;
use App\Models\Files;
use Illuminate\Http\Request;

class FilesController extends Controller
{
    public function create(Request $request){
        // $request->validate([
        //     "senger"=> "requirde",
        //     "song" => "nullable|audio|mimes:mp3|min:12288",
        // ]);
        $filePath = null;
        if($request->hasFile('song')){
            $filePath = $request->file("song")->store('songs' , 'public');
        }
        $newsond = new Files();
        $newsond->senger = $request->senger;
        $newsond->songs = $request->song;
        $newsond->save();
        return redirect('songs');
        // return redirect("/");
        // compact($newsond)s
    }
    public function read(){
        $sound = Files::all();
        return view('file/read' , compact('sound'));
       }
}
