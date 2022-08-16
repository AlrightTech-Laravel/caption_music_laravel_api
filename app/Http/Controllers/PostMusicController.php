<?php

namespace App\Http\Controllers;

use App\Models\PostMusic;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class PostMusicController extends Controller
{
    public function index()

    {
        return view('add_music');
    }

    public function post(Request $request)

    {
        $posts_music = new PostMusic;

    $posts_music->title = $request->title;

    if ($request->hasFile('featured_mp3')) {
        $music_file = $request->file('featured_mp3');
        $filename = $music_file->getClientOriginalExtension();
        $location = public_path('audio/' . $filename);
        $music_file->move($location,$filename);

        $posts_music->mp3 = $filename;
    }

    $posts_music->save();

    Session::flash('success', 'Upload with success!');
    return redirect()->back();

    return redirect()->route('view-musics.show', $posts_music->id);

    }

    public function viewMusic()

    {
        $viewMusic = PostMusic::all();
        return view('view_musics', compact('viewMusic'));
    }
}
