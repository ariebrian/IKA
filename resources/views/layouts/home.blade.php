@extends('layouts.app')

@section('pageTitle', 'Beranda')

@section('content')
<div class="title text-center p-5">
    <h1 class="display-4">Keluarga HIMATIF FMIPA Unpad</h1>
</div>

<!-- Search Section-->
<div class="search-containter">
<<<<<<< HEAD
    <center>
        <div class="col-5 card">
            <div id="custom-search-input">
                <div class="input-group">
                    <input type="text" class="search-query form-control" placeholder="Search" />
                    <span class="input-group-btn">
                        <button type="button" disabled>
                            <span class="fa fa-search yellow"></span>
                        </button>
                    </span>
                </div>
=======
    <div class="container">
        <div id="custom-search-input">
            <div class="input-group">
                <input type="text" class="search-query form-control" placeholder="Cari" />
                <span class="input-group-btn">
                    <button type="button" disabled>
                        <span class="fa fa-search"></span>
                    </button>
                </span>
>>>>>>> 84452d92daf6da3365cb723710bdde1f24f45978
            </div>
        </div>
    </div>
</div>

<!-- Profile List Section -->
<div class="profile-list">
    <div class="container">
        <div class="row text-center">
            @foreach($mahasiswa as $mhs)
            <div class="col-md-2 p-2">
                <a href="/profile/{{$mhs->user_id}}">
                    <div class="profile-item">                    
                        <div class="profile-image">
                            <img src="{{ asset('icon/profile.png') }}" alt="">
                        </div>
                        <label for="name" class="profile-name">{{$mhs->nama}}</label><br>
                        <label for="id_number">{{$mhs->no_identitas}}</label>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
