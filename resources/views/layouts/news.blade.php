@extends('layouts.app')

@section('pageTitle', 'News')

@section('content')
<div class="title text-center p-5">
    <h1 class="display-4"> News </h1>
</div>

<div class="content-separator">
    <div class="container">
        <div>
            <a href="/newsfeed">Newsfeed</a>  >  <a href="">Title</a> 
        </div>
    </div>
</div>

<div id="newsfeed-content">
    <div id="newsfeed-list" class="container">
        <div class="news-item">
            <h2>Judul Artikel</h2>
            <label for="">12 September 2018 oleh Informatika</label>
            <div class="row">
                <div class="text-center col-md-12">
                    <img src="{{ asset('icon/default-profile-picture.png') }}" alt="">
                </div>
                <div class="col-md-12">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non congue dui, sed dapibus orci. In eget leo ut purus porttitor porta. Pellentesque a lectus velit. Proin ullamcorper sem urna, id molestie justo pellentesque eget. Quisque lacinia nisl at vulputate accumsan. Nunc porta, sem sit amet tincidunt aliquam, nulla massa luctus neque, vel varius libero diam accumsan massa. Suspendisse potenti. Curabitur laoreet erat nec finibus rutrum. Phasellus efficitur quam ut lacus egestas efficitur. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean non aliquet felis.</p>
                    <p>Nam scelerisque, enim eget scelerisque porta, tortor dolor faucibus lacus, vel imperdiet nibh nisi non nisi. Donec id odio leo. Etiam a tortor sit amet sem tincidunt elementum. Vestibulum dictum ornare nisl et eleifend. Sed elementum pretium enim at porta. Duis non bibendum est. Nam tincidunt, metus pellentesque viverra consequat, metus libero elementum metus, ac placerat elit nisi blandit lectus. Integer eget viverra quam. Curabitur orci dolor, facilisis ac libero in, condimentum rutrum neque. Integer elementum ex at erat venenatis, vel sollicitudin urna convallis. Sed ac lorem dictum, vulputate lacus sed, fringilla tortor. Curabitur at magna gravida nibh blandit ornare. Donec sit amet bibendum magna. Cras nec est lorem. Vestibulum ultricies elit ut risus venenatis, quis malesuada velit efficitur. Aenean sit amet suscipit dolor, non ultrices quam.</p>
                    <p>Fusce at ultricies velit. Cras vehicula nisi lacus, nec vehicula urna maximus at. Mauris dolor odio, interdum ac purus et, finibus semper augue. Cras arcu felis, ultrices eu lacinia eu, efficitur a urna. Vestibulum molestie elit vel augue commodo aliquet. Sed id gravida massa. Aenean vitae tincidunt arcu, vel luctus neque. Maecenas lacinia leo elit, vestibulum venenatis nisi posuere quis. Sed id risus elit.</p>
                    <p>In at egestas orci. Fusce eget nisl in sem ultrices interdum. Proin eros tortor, tempus id ante nec, tincidunt tempus ex. Ut tincidunt interdum nulla, eu porta eros. Donec congue tempus lacinia. Nunc dui augue, porttitor at quam in, suscipit tristique orci. Cras convallis risus nec ante sagittis posuere.</p>
                    <p>Cras posuere semper turpis, ut suscipit sem ullamcorper ut. Aliquam quis mi nisl. Praesent imperdiet magna eget lectus accumsan sodales. Ut vel justo dignissim, ullamcorper neque mattis, dapibus nibh. Integer ac tincidunt enim. Fusce facilisis sagittis est. Cras aliquet enim quis erat gravida posuere vel id magna. Nam sit amet scelerisque leo. Donec a ullamcorper odio, sed suscipit est. Etiam ac elit sit amet lorem semper congue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus accumsan, justo vitae dictum feugiat, metus dui dignissim mauris, at rhoncus sapien massa et eros. In ut sapien ullamcorper risus fermentum ultricies in at diam. Praesent a hendrerit nunc, a fermentum mi. Ut nibh justo, vulputate id ultrices vel, pellentesque pellentesque sem.</p>
                </div>
            </div>
        </div>
        <div class="news-more">
            <div class="row">
                <h2 class="col-md-12">Baca Artikel Lain</h2>
            </div>
            <div class="row">
                <?php for ($i=0; $i < 3; $i++):?>
                <a href="#" class="news-more-item col-md-4">
                    <div class="text-center">
                        <img src="{{ asset('icon/default-profile-picture.png') }}" alt="">
                    </div>
                    <h4>Judul Artikel</h4>
                    <label for="">12 September 2018 by Informatika</label>
                </a>
                <?php endfor ?>
            </div>
        </div>
    </div>
</div>
@endsection