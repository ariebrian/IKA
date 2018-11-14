@extends('layouts.app')

@section('pageTitle', 'Subforum')

@section('content')
<div class="title text-center p-5">
    <h1 class="display-4">{{$forum->title}}</h1>
</div>

<div class="content-separator"></div>

<div id="forum-content">
    <div class="container">
        <div id="first-post" class="post-item">
            <div id="user-info" class="row">
                <div id="user-photo" class="col-md-1 align-middle">
                    <img src="{{ asset('icon/default-profile-picture.png') }}" alt="">
                </div>
                <div id="user-name" class="col-md-9 align-middle">
                    <h3>{{$forum->forum}}</h3>
                </div>
                <label class="col-md-2 text-center align-middle" for="">22/10/2018 19:00</label>
            </div>
            <div class="row">
                <div class="text-center col-md-2">
                </div>
                <div class="col-md-11 offset-1">
                    <p>{{$forum->description}}</p>  
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 offset-10 reply-button">
                    <a href="#"><div class="">Balas</div></a>
                </div>
            </div>
        </div>
        <div class="pagination-container row">
            <label class="col-md-9"for="pagination">Halaman 1 dari 10</label>
            <nav class="col-md-3">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="active page-item">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        @foreach($replies as $reply)
        <div class="post-item">
            <div id="user-info" class="row">
                <div id="user-photo" class="col-md-1 align-middle">
                    <img src="{{ asset('icon/default-profile-picture.png') }}" alt="">
                </div>
                <div id="user-name" class="col-md-9 align-middle">
                    <h3>{{$reply->user()}}</h3>
                </div>
                <label class="col-md-2 text-center align-middle" for="">22/10/2018 19:00</label>
            </div>
            <div class="row">
                <div class="text-center col-md-12">
                </div>
                <div class="col-md-11 offset-1">
                    <p>{{$reply->reply}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 offset-10 reply-button">
                    <a href="#"><div class="">Balas</div></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection