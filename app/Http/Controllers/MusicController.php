<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMusicRequest;
use App\Http\Requests\UpdateMusicRequest;
use App\Models\Music;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = Auth::id();
        $user = Auth::user();

        if($user->isAdmin()) {
            $musics = Music::all();
        } else {
            $musics = Music::where('user_id', $userId)->get();
        }

        return view('musics.index', ['musics' => $musics]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('musics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMusicRequest $request)
    {
        $validatedData = $request->validated();
        
        $userId = Auth::id();
        
        $validatedData['user_id'] = $userId;
        // dd($validatedData['user_id']);
        Music::create($validatedData);
        Session::Flash('success', 'Music created successfully');
        return redirect()->route('musics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Music $music)
    {
        return view('musics.show', compact('music'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $music = Music::findOrFail($id);
        return view('musics.edit', compact('music'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMusicRequest $request, Music $music)
    {
        $validatedData = $request->validated();
        $userId = Auth::id();

        $user = Auth::user();
        if($userId === $music->user_id || $user->isAdmin()) {
            $music->update($validatedData);
            Session::flash('success', 'Music updated successfully');
            return redirect()->route('musics.show', $music);
        } else {
            return redirect()->route('musics.index', $music);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function trash($id){
        $userId = Auth::id();
        $music = Music::findOrFail($id);
        
        $user = Auth::user();
        if($userId === $music->user_id || $user->isAdmin()) {
            Music::Destroy($id);
            return redirect() -> route('musics.index');
        } else {
            return redirect()->route('musics.index', $music);
        }
    }
    

    public function destroy(Music $music)
    {
        //
    }

}
