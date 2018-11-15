@extends('layouts.app')

@section('pageTitle', 'Beranda')

@section('content')
<div class="title text-center p-5">
    <h1>
        {{ date('H') >= 6 && date('H') < 12 ? 'Selamat Pagi' : 
            date('H') >= 12 && date('H') < 16 ? 'Selamat Siang' :
            date('H') >= 16 && date('H') < 18 ? 'Selamat Sore' : 'Selamat Malam' }}, {{ Auth::user()->nama }}
    </h1>
    <h1 class="display-4">Keluarga HIMATIF FMIPA Unpad</h1>
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

<!-- Profile List Section -->
<div class="profile-list">
    <div class="container">
        <div class="row text-center">
            @foreach($mahasiswa as $mhs)
            <div class="col-4 col-md-2 p-2">
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
