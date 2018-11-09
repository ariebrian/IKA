<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Forum;
use App\Reply;

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
        $forums = DB::select('select * from forums');
        return view('layouts.forum',['forums'=>$forums]);
    }

    /**
     * Show details of one forum.
     * 
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $forum = Forum::find($id);
        // $replies = Reply::where('forum_id', [$forum->id])->get();
        // $count = Reply::where('forum_id', [$forum->id])->count();
        $replies = DB::select('select * from replies where forum_id = ?', [$forum->id]);
        $count = DB::table('replies')->where('forum_id',[$forum->id])->count();
        $data = [
            'forum' => $forum,
            'replies' => $replies,
            'counts' => $count,
        ];
        dd($data);
        
    }
}
