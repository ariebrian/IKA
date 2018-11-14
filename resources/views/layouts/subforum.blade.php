@extends('layouts.app')

@section('pageTitle', 'Subforum')

@section('content')
<div class="title text-center p-5">
    <h1 class="display-4">Judul Forum</h1>
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
                    <h3>Rafid</h3>
                </div>
                <label class="col-md-2 text-center align-middle" for="">22/10/2018 19:00</label>
            </div>
            <div class="row">
                <div class="text-center col-md-12">
                </div>
                <div class="col-md-11 offset-1">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non congue dui, sed dapibus orci. In eget leo ut purus porttitor porta. Pellentesque a lectus velit. Proin ullamcorper sem urna, id molestie justo pellentesque eget. Quisque lacinia nisl at vulputate accumsan. Nunc porta, sem sit amet tincidunt aliquam, nulla massa luctus neque, vel varius libero diam accumsan massa. Suspendisse potenti. Curabitur laoreet erat nec finibus rutrum. Phasellus efficitur quam ut lacus egestas efficitur. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean non aliquet felis.</p>
                    <p>Nam scelerisque, enim eget scelerisque porta, tortor dolor faucibus lacus, vel imperdiet nibh nisi non nisi. Donec id odio leo. Etiam a tortor sit amet sem tincidunt elementum. Vestibulum dictum ornare nisl et eleifend. Sed elementum pretium enim at porta. Duis non bibendum est. Nam tincidunt, metus pellentesque viverra consequat, metus libero elementum metus, ac placerat elit nisi blandit lectus. Integer eget viverra quam. Curabitur orci dolor, facilisis ac libero in, condimentum rutrum neque. Integer elementum ex at erat venenatis, vel sollicitudin urna convallis. Sed ac lorem dictum, vulputate lacus sed, fringilla tortor. Curabitur at magna gravida nibh blandit ornare. Donec sit amet bibendum magna. Cras nec est lorem. Vestibulum ultricies elit ut risus venenatis, quis malesuada velit efficitur. Aenean sit amet suscipit dolor, non ultrices quam.</p>
                    <p>Fusce at ultricies velit. Cras vehicula nisi lacus, nec vehicula urna maximus at. Mauris dolor odio, interdum ac purus et, finibus semper augue. Cras arcu felis, ultrices eu lacinia eu, efficitur a urna. Vestibulum molestie elit vel augue commodo aliquet. Sed id gravida massa. Aenean vitae tincidunt arcu, vel luctus neque. Maecenas lacinia leo elit, vestibulum venenatis nisi posuere quis. Sed id risus elit.</p>
                    <p>In at egestas orci. Fusce eget nisl in sem ultrices interdum. Proin eros tortor, tempus id ante nec, tincidunt tempus ex. Ut tincidunt interdum nulla, eu porta eros. Donec congue tempus lacinia. Nunc dui augue, porttitor at quam in, suscipit tristique orci. Cras convallis risus nec ante sagittis posuere.</p>
                    <p>Cras posuere semper turpis, ut suscipit sem ullamcorper ut. Aliquam quis mi nisl. Praesent imperdiet magna eget lectus accumsan sodales. Ut vel justo dignissim, ullamcorper neque mattis, dapibus nibh. Integer ac tincidunt enim. Fusce facilisis sagittis est. Cras aliquet enim quis erat gravida posuere vel id magna. Nam sit amet scelerisque leo. Donec a ullamcorper odio, sed suscipit est. Etiam ac elit sit amet lorem semper congue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus accumsan, justo vitae dictum feugiat, metus dui dignissim mauris, at rhoncus sapien massa et eros. In ut sapien ullamcorper risus fermentum ultricies in at diam. Praesent a hendrerit nunc, a fermentum mi. Ut nibh justo, vulputate id ultrices vel, pellentesque pellentesque sem.</p>
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
        <div class="post-item">
            <div id="user-info" class="row">
                <div id="user-photo" class="col-md-1 align-middle">
                    <img src="{{ asset('icon/default-profile-picture.png') }}" alt="">
                </div>
                <div id="user-name" class="col-md-9 align-middle">
                    <h3>Rafid</h3>
                </div>
                <label class="col-md-2 text-center align-middle" for="">22/10/2018 19:00</label>
            </div>
            <div class="row">
                <div class="text-center col-md-12">
                </div>
                <div class="col-md-11 offset-1">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non congue dui, sed dapibus orci. In eget leo ut purus porttitor porta. Pellentesque a lectus velit. Proin ullamcorper sem urna, id molestie justo pellentesque eget. Quisque lacinia nisl at vulputate accumsan. Nunc porta, sem sit amet tincidunt aliquam, nulla massa luctus neque, vel varius libero diam accumsan massa. Suspendisse potenti. Curabitur laoreet erat nec finibus rutrum. Phasellus efficitur quam ut lacus egestas efficitur. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean non aliquet felis.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 offset-10 reply-button">
                    <a href="#"><div class="">Balas</div></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection