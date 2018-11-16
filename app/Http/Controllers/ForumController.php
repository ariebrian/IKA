<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Forum;
use App\Reply;
use App\User;
use App\Mahasiswa;

class ForumController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forums = Forum::with('user')->paginate(5);
        // dd($forums);
        return view('layouts.forum',['forums'=>$forums]);
    }

    /**
     * Show details of one forum.
     * 
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $forum = Forum::with('user')->where('id',$id)->first();
        // dd($forum);
        // $creator = User::where('id',$forum->user_id)->first();
        // $replies = DB::select('select * from replies where forum_id = ?', [$forum->id]);
        $replies = Reply::with('user')->where('forum_id',$forum->id)->paginate(8);
        // dd($replies);
        $count = DB::table('replies')->where('forum_id',[$forum->id])->count();
        $data = [
            'forum' => $forum,
            'replies' => $replies,
            'counts' => $count,
        ];
        // dd($data);
        return view('layouts.subforum', $data);
        
    }

    public function add()
    {
        return view('layouts.addforum');
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $forum = new Forum;

        $forum->title = $request->judul;
        $forum->description = $request->deskripsi;
        $forum->user_id = $user->id;
        $forum->first_post = " ";

        $forum->save();

        // dd($forum);
        
        return redirect()->action(
            'ForumController@show', ['id' => $forum->id]
        );
    }

    public function delete($id)
    {
        Forum::find($id)->delete();

        return redirect()->routes('forum');
    }
}
