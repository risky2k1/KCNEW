<?php
use Carbon\Carbon;
$now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
$duocduyet = 1;
$category = DB::table('categories')
    ->take(12)
    ->get();
$tintucmoi = DB::table('tintucs')->where('trangthai',$duocduyet)->orderBy('created_at','DESC')->take(5)->get();
// $sword = DB::table('categories')->where('title','!=','Thế giới')->take(10)->get();
?>

<!-- Header Section Start -->

<header class="header--section header--style-3">
    <!-- Header Topbar Start -->
    <div class="header--topbar bg--color-1">
        <div class="container">
            <div class="float--left float--xs-none text-xs-center">
                <!-- Header Topbar Info Start -->
                <ul class="header--topbar-info nav">
                    <li><i class="fa fm fa-map-marker"></i>Long Xuyên</li>
                    <li><i class="fa fm fa-mixcloud"></i>21<sup>0</sup> C</li>
                    <li><i class="fa fm fa-calendar"></i>To day({{ $now }})</li>
                </ul>
                <!-- Header Topbar Info End -->
            </div>

            <div class="float--right float--xs-none text-xs-center">
                <!-- Header Topbar Action Start -->
                <ul class="header--topbar-action nav">
                    @if (Auth::check())
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fm fa-user-o"></i>{{ Auth::user()->name }}</a>
                            <ul class="dropdown-menu">
                                <li><a href="" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">Đăng xuất</a></li>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                    </form> 
                            </ul>
                        </li>
                                    
                    @else
                        <li><a href="{{ route('login') }}"><i class="fa fm fa-user-o"></i>Đăng nhập/Đăng ký</a></li>
                    @endif

                </ul>
                <!-- Header Topbar Action End -->

                <!-- Header Topbar Language Start -->
                
                <!-- Header Topbar Language End -->

                <!-- Header Topbar Social Start -->
                <ul class="header--topbar-social nav hidden-sm hidden-xxs">
                    <li><a href="https://www.facebook.com/ngoccam651"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCk8UM8PAAV6PTn3eNuMthRQ"><i class="fa fa-youtube-play"></i></a></li>
                </ul>
                <!-- Header Topbar Social End -->
            </div>
        </div>
    </div>
    <!-- Header Topbar End -->

    <!-- Header Mainbar Start -->
    <div class="header--mainbar">
        <div class="container">
            <!-- Header Logo Start -->
            <div class="header--logo float--left float--sm-none text-sm-center" >
                <h1 class="h1">
                    <a href="{{ url('/') }}" class="btn-link" >
                        <video autoplay loop muted plays-inline width="60%">
                            <source src="{{ url('public/frontend') }}/img/KCN (online-video-cutter.com).mp4"   style="video/mp4" >
                        </video>
                        <span class="hidden">Kcnew - logo</span>
                    </a>
                </h1>
            </div>
            <!-- Header Logo End -->

            <!-- Header Ad Start -->
            <div class="header--ad float--right float--sm-none hidden-xs"  style="width:60% ;margin-top:60px">
                <a href="https://masterisehomes.com/the-rivus/?utm_source=adtima&utm_medium=impression&utm_campaign=rivus-adtima-impression-phase1-na-cpd-8B115F30-mastheadtoppc">
                    <img src="{{ url('public/frontend') }}/img/ads-img/728x90_baner1.png"  alt="Advertisement">
                </a>
            </div>
            <!-- Header Ad End -->
        </div>
    </div>
    <!-- Header Mainbar End -->

    <!-- Header Navbar Start -->
    <div class="header--navbar navbar bd--color-1 bg--color-0" data-trigger="sticky">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#headerNav"
                    aria-expanded="false" aria-controls="headerNav">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div id="headerNav" class="navbar-collapse collapse float--left">
                <!-- Header Menu Links Start -->
                <ul class="header--menu-links nav navbar-nav" data-trigger="hoverIntent">


                    @foreach ($category as $cat)
                        <li><a href="{{ route('danh-muc',['slug'=>$cat->slug]) }}">{{ $cat->title }}</a></li>
                    @endforeach





                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Trang<i
                                class="fa flm fa-angle-down"></i></a>

                        <ul class="dropdown-menu">

                            <li><a href="{{ url('about') }}">About</a></li>

                            <li><a href="{{ url('/new/coming') }}">Coming Soon</a></li>
                            <li><a href="{{ url('/error/404') }}">404</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- Header Menu Links End -->
            </div>

            <!-- Header Search Form Start -->
            <form method="POST" action="{{ url('search') }}" class="header--search-form float--right" data-form="validate">
                @csrf
                <input type="search" name="search" placeholder="Search..." class="header--search-control form-control"
                    required>

                <button type="submit" class="header--search-btn btn"><i
                        class="header--search-icon fa fa-search"></i></button>
            </form>
            <!-- Header Search Form End -->
        </div>
    </div>
    <!-- Header Navbar End -->
</header>
<!-- Header Section End -->

<!-- Posts Filter Bar Start -->
<div class="posts--filter-bar style--3 hidden-xs">
    <div class="container">
        <ul class="nav">
            <li>
                <a href="{{ url('tintucmoinhat') }}">
                    <i class="fa fa-star-o"></i>
                    <span>Tin tức mới nhất</span>
                </a>
            </li>
         
            <li>
                <a href="{{ url('tinnong') }}">
                    <i class="fa fa-fire"></i>
                    <span>Tin nóng</span>
                </a>
            </li>
            <li>
                <a href="{{ url('xemnhieunhat') }}">
                    <i class="fa fa-eye"></i>
                    <span>Xem nhiều nhất</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- Posts Filter Bar End -->

<!-- News Ticker Start -->
<div class="news--ticker">
    <div class="container">
        <div class="title">
            <h2>Tin mới cập nhật</h2>
            <
        </div>

        <div class="news-updates--list" data-marquee="true">
            <ul class="nav">
                @foreach($tintucmoi as $tintuc)
                <li>
                    <h3 class="h3"><a href="{{ route('bai-viet',['slug'=>$tintuc->slug]) }}">{{ $tintuc->title }}.</a></h3>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
<!-- News Ticker End -->
