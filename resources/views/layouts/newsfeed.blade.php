@extends('layouts.app')

@section('pageTitle', 'Newsfeed')

@section('content')

<!-- Header Section -->
<div class="title text-center p-5">
    <h1 class="display-4">Newsfeed</h1>
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

<div id="newsfeed-content">
    <div id="newsfeed-list" class="container">
        <?php for($i=0; $i<3; $i++): ?>
        <div class="news-item">
            <h2>Judul Artikel</h2>
            <label for="">12 September 2018 by Informatika</label>
            <div class="row">
                <div class="image-content col-md-4">
                    <img src="{{ asset('icon/default-profile-picture.png') }}" alt="">
                </div>
                <div class="col-md-8">
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
                    <a href="#" class="float-right">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <?php endfor?>
    </div>
</div>
@endsection