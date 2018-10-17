<html>

<head>
    <title>Newsfeed</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
</head>

<body class="bodybg">
    <nav class="navbar navbar-expand-md navbar-dark p-0 topnav ">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('icon/IKAMOCKUP.png') }}" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="#">Home</a></li>
                    <li class="nav-item"><a href="{{ route('login') }}">Forum</a></li>
                    <li class="nav-item"><a class="active" href="{{ route('register') }}">Newsfeed</a></li>
                    <li><a id="profile-picture" href="#profile"><img src="{{ asset('icon/default-profile-picture.png') }}"></a></li>
                </ul>
            </div>
        </div>
    </nav>
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
</body>

</html>