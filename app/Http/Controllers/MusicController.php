<?php

namespace App\Http\Controllers;

use App\Models\music;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has("search")){
            $music = music::where('name','LIKE','%'.$request->search.'%')->get();

        }
        else{
            $music = music::all(); 
        }
        
        return view('list',['Musics'=>$music]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $music = music::all();
        return view('add',['musics'=>$music]);
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        music::create([
            'name'=>request('name'),
            "music"=>$request->file('music')->store('post-music'),
            'image' => $request->file('image')->store('post-image'),
            "composer"=>request('composer'),
            "lyric"=>request('lyric'),
            'user_id' => auth()->id()

        ]);
        return redirect('/list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\music  $music
     * @return \Illuminate\Http\Response
     */
    public function show(music $id)
    {
        $music = music::find($id);
        return view ('detail',['musics'=>$music]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\music  $music
     * @return \Illuminate\Http\Response
     */
    public function edit(music $id)
    {
        $music = music::find($id);
        return view ('edit',['musics'=>$music]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\music  $music
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        
        music::find($id)->update([
            'name'=>request('name'),
            "music"=>$request->file('music')->store('post-music'),
            'image' => $request->file('image')->store('post-image'),
            "composer"=>request('composer'),
            "lyric"=>request('lyric'),
            'user_id' => auth()->id()

        ]);
        return redirect('/list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\music  $music
     * @return \Illuminate\Http\Response
     */
    public function destroy(music $id)
    {
        $film = music::find($id);
        $film->each->delete();
        return redirect("/list");
    }
}
