@extends('layouts.app')

@section('pageTitle', 'Forum')

@section('content')
<div class="title text-center p-5">
    <h1 class="display-4">Forum</h1>
</div>
<!-- Search Section-->
<div class="search-containter">
    <div class="container">
        <div id="custom-search-input">
            <div class="input-group">
                <input type="text" class="search-query form-control" placeholder="Cari" />
                <span class="input-group-btn">
                    <button type="button" disabled>
                        <span class="fa fa-search"></span>
                    </button>
                </span>
            </div>
        </div>
    </div>
</div>
<div class="forum-list">
    <div class="header-container row">
        <div id="forum-title" class="col-md-6">Forum Title</div>
        <div id="forum-stats" class="col-md-3">Forum Creator</div>
        <div id="forum-last-post" class="col-md-3">Date Created</div>
    </div>
    <center>
    {{$forums->links()}}
    </center>
    @foreach ($forums as $forum)
        <a href="/forum/{{$forum->id}}" target="_blank">
            <div class="forum-item row">
                <div class="forum-title col-md-6">
                    <h5>{{ $forum->title }}</h5>
                    <label>{{ $forum->description }}</label>
                </div>
                <div class="forum-stats col-md-3">
                    <b>{{$forum->user->nama}}</b><br>
                    <b>{{$forum->user->no_identitas}}</b>
                </div>
                <div class="forum-last-post col-md-3">
                    <p>{{$forum->first_post}}</p>
                    <span class="date">{{Carbon\Carbon::parse($forum->created_at)->format('d F Y')}}</span>
                </div>
            </div>
        </a>
    @endforeach
    <center>
    {{$forums->links()}}
    </center>
    <div class="btn-group-sm hidden" id="mini-fab">
        <div class="btn-group">
            <a href="{{ route('addforum') }}" class="btn btn-success btn-fab" id="main">
            <i class="material-icons">
                <svg style="width:40px;height:40px" viewBox="0 0 24 24">
                    <path fill="#393636" d="M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z" />
                </svg>
            </i>
            </a>
        </div>
    </div>
</div>
@endsection