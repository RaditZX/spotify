<?php

namespace App\Http\Controllers;

use App\Models\music;
use App\Models\playlist;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        {
            if($request->has("search")){
                $music = playlist::where('name','LIKE','%'.$request->search.'%')->get();
    
            }
            else{
                $music = playlist::all(); 
            }
            
            return view('playlist',['Musics'=>$music]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $music = playlist::all();
        return view('playlistadd',['musics'=>$music]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        playlist::create([
            'playlistname'=>request('playlistname'),
         
            'imageplaylist' => $request->file('imageplaylist')->store('post-image'),
            'music_id' => request('music_id'),
            'user_id' => auth()->id()

        ]);
        return redirect('/playlist');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function show(music $id )
    {
     
        $music = playlist::find($id);
        $playlist = music::find($id);
        return view ('detail1',['musics'=>$music,
        'playlists'=>$playlist
    ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function edit(playlist $playlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, playlist $playlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function destroy(playlist $playlist)
    {
        //
    }
}
