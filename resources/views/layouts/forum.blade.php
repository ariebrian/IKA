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
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry
                    <span class="date">9/12/2018</span> <span class="time">20:50</span>
                </div>
            </div>
        </a>
    @endforeach
</div>
@endsection