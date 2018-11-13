@extends('layouts.app')

@section('pageTitle', 'Beranda')

@section('content')
<div class="title text-center p-5">
    <h1 class="display-4">Keluarga HIMATIF FMIPA Unpad</h1>
    <div class="profile-tab row">
        <div class="col-md-3 offset-md-3"><a href="#">Dosen</a></div>
        <div class="col-md-3"><a href="#">Mahasiswa</a></div>
    </div>

</div>
<div class="search-containter">
    <center>
        <div class="col-4">
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
<div class="profile-list">
    <div class="container">
        <div class="row text-center">
            <?php for ($i=0; $i < 16; $i++):?>
            <div class="col-md-3 p-2">
                <a href="">
                    <div class="profile-item">                    
                        <div class="profile-image">
                            <img src="{{ asset('icon/profile.png') }}" alt="">
                        </div>
                        <label for="name" class="profile-name">Firmansyah Yanuar</label><br>
                        <label for="id_number">140810170051</label>
                    </div>
                </a>
            </div>
            <?php endfor ?>
        </div>
    </div>
</div>
@endsection
