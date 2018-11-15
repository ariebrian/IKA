@extends('layouts.app')

@section('pageTitle', 'Forum')

@section('content')
<div class="title text-center p-5">
    <h1 class="display-4">Forum</h1>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
        been the
        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
        of type
        and scrambled it to make a type specimen book. It has survived not only five centuries, but
        also
        the leap into electronic typesetting, remaining essentially unchanged. It was popularised
        in the
        1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more
        recently with
        desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
</div>
<div class="search-containter card">
    <center>
        <div class="col-5">
            <div id="custom-search-input">
                <div class="input-group">
                    <input type="text" class="search-query form-control" placeholder="Search" />
                    <span class="input-group-btn">
                        <button type="button" disabled>
                            <span class="fa fa-search yellow"></span>
                        </button>
                    </span>
                </div>
            </div>
        </div>
    </center>
</div>
<div class="forum-list">
    <div class="header-container row">
        <div id="forum-title" class="col-md-6">Forum Title</div>
        <div id="forum-stats" class="col-md-3">Stats</div>
        <div id="forum-last-post" class="col-md-3">Last Post</div>
    </div>
    @foreach ($forums as $forum)
        <a href="#">
            <div class="forum-item row">
                <div class="forum-title col-md-6">
                    <h5>{{ $forum->title }}</h5>
                    <label>{{ $forum->description }}</label>
                </div>
                <div class="forum-stats col-md-3">
                    <b>Replies:</b> 34<br>
                    <b>Views:</b> 123
                </div>
                <div class="forum-last-post col-md-3">
                    <p>{{$forum->first_post}}</p>
                    <span class="date">9/12/2018</span> <span class="time">20:50</span>
                </div>
            </div>
        </a>
    @endforeach

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