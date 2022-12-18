@extends('layouts.frontend')
@section('title')
    <title>Kcnew - {{ $title->title }}</title>
@endsection
@section('main')
    <!-- Main Breadcrumb Start -->
    <div class="main--breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="home-1.html" class="btn-link"><i class="fa fm fa-home"></i>Home</a></li>
                <li class="active"><span>{{ $title->title }}</span></li>
            </ul>
        </div>
    </div>
    <!-- Main Breadcrumb End -->

    <!-- Main Content Section Start -->
    <div class="main-content--section pbottom--30">
        <div class="container">
            <!-- Main Content Start -->
            <div class="main--content">
                <!-- Post Items Start -->
                <div class="post--items post--items-1 pd--30-0">
                    <div class="row gutter--15">
                        <div class="col-md-3">
                            <div class="row gutter--15">
                                @foreach($tintuc1 as $tintuc)
                                <div class="col-md-12 col-xs-6 col-xxs-12">
                                    <!-- Post Item Start -->
                                    <div class="post--item post--layout-1 post--title-large">
                                        <div class="post--img">
                                            <a href="{{ route('bai-viet',['slug'=>$tintuc->slug]) }}" class="thumb"><img src="public/uploads/tintuc/{{ $tintuc->hinhanh }}" alt="" width="281px" height="193px"></a>
                                            <a href="{{ url('properti/'.$tintuc->tintucProperti->slug) }}" class="cat">{{ $tintuc->tintucProperti->title }}</a>
                                            <a href="#" class="icon"><i class="fa fa-flash"></i></a>

                                            <div class="post--info">
                                                <ul class="nav meta">
                                                    <li><a href="#">{{ $tintuc->tintucUser->title }}</a></li>
                                                    <li><a href="#">{{ $tintuc->ngayduyet }}</a></li>
                                                </ul>

                                                <div class="title">
                                                    <h2 class="h4"><a href="{{ route('bai-viet',['slug'=>$tintuc->slug]) }}" class="btn-link">{{ $tintuc->title }}</a></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Post Item End -->
                                </div>
                                @endforeach
                             
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <!-- Post Item Start -->
                            <div class="post--item post--layout-1 post--title-larger">
                                <div class="post--img">
                                    <a href="{{ route('bai-viet',['slug'=>$xemnhieunhat->slug]) }}" class="thumb"><img src="public/uploads/tintuc/{{ $xemnhieunhat->hinhanh }}" alt=""></a>
                                    <a href="{{ url('properti/'.$xemnhieunhat->tintucProperti->slug) }}" class="cat">{{ $xemnhieunhat->tintucProperti->title }}</a>
                                    <a href="#" class="icon"><i class="fa fa-star-o"></i></a>

                                    <div class="post--info">
                                        <ul class="nav meta">
                                            <li><a href="#">{{ $xemnhieunhat->tintucUser->name }}</a></li>
                                            <li><a href="#">{{ $xemnhieunhat->ngayduyet }}</a></li>
                                        </ul>

                                        <div class="title">
                                            <h2 class="h4"><a href="{{ route('bai-viet',['slug'=>$xemnhieunhat->slug]) }}" class="btn-link">{{ $xemnhieunhat->title }}</a></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Post Item End -->
                        </div>

                        <div class="col-md-3">
                            <div class="row gutter--15">
                                @foreach($tintuc2 as $tintuc)
                                <div class="col-md-12 col-xs-6 col-xxs-12">
                                    <!-- Post Item Start -->
                                    <div class="post--item post--layout-1 post--title-large">
                                        <div class="post--img">
                                            <a href="{{ route('bai-viet',['slug'=>$tintuc->slug]) }}" class="thumb"><img src="public/uploads/tintuc/{{ $tintuc->hinhanh }}" alt="" width="281px" height="193px"></a>
                                            <a href="{{ url('properti/'.$tintuc->tintucProperti->slug) }}" class="cat">{{ $tintuc->tintucProperti->title }}</a>
                                            <a href="#" class="icon"><i class="fa fa-flash"></i></a>

                                            <div class="post--info">
                                                <ul class="nav meta">
                                                    <li><a href="#">{{ $tintuc->tintucUser->title }}</a></li>
                                                    <li><a href="#">{{ $tintuc->ngayduyet }}</a></li>
                                                </ul>

                                                <div class="title">
                                                    <h2 class="h4"><a href="{{ route('bai-viet',['slug'=>$tintuc->slug]) }}" class="btn-link">{{ $tintuc->title }}</a></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Post Item End -->
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Post Items End -->
            </div>
            <!-- Main Content End -->

            <div class="row">
                <!-- Main Content Start -->
                <div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
                    <div class="sticky-content-inner">
                        <div class="row">
                            <!-- Theatre and Art Start -->
                            <div class="col-md-6 ptop--30 pbottom--30">
                                <!-- Post Items Title Start -->
                                <div class="post--items-title" data-ajax="tab">
                                    <h2 class="h4">{{ $c1->title }}</h2>

                                
                                </div>
                                <!-- Post Items Title End -->

                                <!-- Post Items Start -->
                                <div class="post--items post--items-2" data-ajax-content="outer">
                                    <ul class="nav" data-ajax-content="inner">
                                        @foreach($w1 as $tintuc)
                                        <li>
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-1">
                                                <div class="post--img">
                                                    <a href="{{ route('bai-viet',['slug'=>$tintuc->slug]) }}" class="thumb"><img src="public/uploads/tintuc/{{ $tintuc->hinhanh }}" alt=""></a>
                                                    <a href="{{ url('properti/'.$tintuc->tintucProperti->slug) }}" class="cat">{{ $tintuc->tintucProperti->title }}</a>
                                                    <a href="#" class="icon"><i class="fa fa-flash"></i></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">{{ $tintuc->tintucUser->name }}</a></li>
                                                            <li><a href="#">{{ $tintuc->ngayduyet }}</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="news-single-v1.html" class="btn-link">{{ $tintuc->title }}</a></h3>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="post--content">
                                                    <p>{!! $tintuc->tomtat !!}.</p>
                                                </div>

                                                <div class="post--action">
                                                    <a href="{{ route('bai-viet',['slug'=>$tintuc->slug]) }}">Tiếp tục đọc... </a>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                        <li>
                                            <!-- Divider Start -->
                                            <hr class="divider">
                                            <!-- Divider End -->
                                        </li>
                                        @endforeach
                                    </ul>

                                  
                                </div>
                                <!-- Post Items End -->
                            </div>
                            <!-- Theatre and Art End -->

                            <!-- Festival Start -->
                            <div class="col-md-6 ptop--30 pbottom--30">
                                <!-- Post Items Title Start -->
                                <div class="post--items-title" data-ajax="tab">
                                    <h2 class="h4">{{ $c2->title }}</h2>
                                </div>
                                <!-- Post Items Title End -->

                                <!-- Post Items Start -->
                                <div class="post--items post--items-3" data-ajax-content="outer">
                                    <ul class="nav" data-ajax-content="inner">
                                        @foreach($w2 as $tintuc)
                                        <li>
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-1">
                                                <div class="post--img">
                                                    <a href="{{ route('bai-viet',['slug'=>$tintuc->slug]) }}" class="thumb"><img src="public/uploads/tintuc/{{ $tintuc->hinhanh }}" alt=""></a>
                                                    <a href="{{ url('properti/'.$tintuc->tintucProperti->slug) }}" class="cat">{{ $tintuc->tintucProperti->title }}</a>
                                                    <a href="#" class="icon"><i class="fa fa-heart-o"></i></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">{{ $tintuc->tintucUser->name }}</a></li>
                                                            <li><a href="#">{{ $tintuc->ngayduyet }}</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="{{ route('bai-viet',['slug'=>$tintuc->slug]) }}" class="btn-link">{{ $tintuc->title }}</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                        @endforeach
                                        @foreach($w3 as $tintuc)
                                        <li>
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-3">
                                                <div class="post--img">
                                                    <a href="{{ route('bai-viet',['slug'=>$tintuc->slug]) }}" class="thumb"><img src="public/uploads/tintuc/{{ $tintuc->hinhanh}}" alt=""></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">{{ $tintuc->tintucUser->name }}</a></li>
                                                            <li><a href="#">{{ $tintuc->ngayduyet }}</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="{{ route('bai-viet',['slug'=>$tintuc->slug]) }}" class="btn-link">{{ $tintuc->title }}</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                        @endforeach
                                     
                                    </ul>
                                </div> 
                                <!-- Post Items End -->
                            </div>
                            <!-- Festival End -->

                            <!-- Ad Start -->
                            <div class="col-md-12 ptop--30 pbottom--30">
                                <!-- Advertisement Start -->
                                <div class="ad--space">
                                    <a href="https://masterisehomes.com/the-rivus/?utm_source=adtima&utm_medium=impression&utm_campaign=rivus-adtima-impression-phase1-na-cpd-8B115F30-mastheadtoppc">
                                        <img src="{{ url('public/frontend') }}/img/ads-img/728X90_banner2.png" alt=""
                                            class="center-block">
                                    </a>
                                </div>
                                <!-- Advertisement End -->
                            </div>
                            <!-- Ad End -->

                            <!-- Celebrity Life and Style Start -->
                            <div class="col-md-12 ptop--30 pbottom--30">
                                <!-- Post Items Title Start -->
                                <div class="post--items-title" data-ajax="tab">
                                    <h2 class="h4">{{ $w4->tintucProperti->title }}</h2>
                                </div>
                                <!-- Post Items Title End -->

                                <!-- Post Items Start -->
                                <div class="post--items post--items-2" data-ajax-content="outer">
                                    <ul class="nav row" data-ajax-content="inner">
                                       
                                        <li class="col-md-12">
                                            <!-- Post Item Start -->
                                            <div class="post--item">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="post--img">
                                                            <a href="{{ route('bai-viet',['slug'=>$w4->slug]) }}" class="thumb"><img src="public/uploads/tintuc/{{ $w4->hinhanh }}" alt=""></a>
                                                            <a href="{{ url('properti/'.$w4->tintucProperti->slug) }}" class="cat">{{ $w4->tintucProperti->title }}</a>
                                                            <a href="#" class="icon"><i class="fa fa-star-o"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">{{ $w4->tintucUser->name }}</a></li>
                                                                <li><a href="#">{{ $w4->ngayduyet }}</a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a href="{{ route('bai-viet',['slug'=>$w4->slug]) }}" class="btn-link">{{ $w4->title }}.</a></h3>
                                                            </div>
                                                        </div>

                                                        <div class="post--content">
                                                            <p>{!! $w4->tomtat !!}.</p>
                                                        </div>

                                                        <div class="post--action">
                                                            <a href="news-single-v1.html">Chi tiết...</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                        


                                        <li class="col-md-12">
                                            <!-- Divider Start -->
                                            <hr class="divider">
                                            <!-- Divider End -->
                                        </li>
                                        @foreach($w5 as $tintuc)
                                        <li class="col-md-6">
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-4">
                                                <div class="post--img">
                                                    <a href="{{ route('bai-viet',['slug'=>$tintuc->slug]) }}" class="thumb"><img src="public/uploads/tintuc/{{ $tintuc->hinhanh }}" alt=""></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">{{ $tintuc->tintucUser->name }}</a></li>
                                                            <li><a href="#">{{ $tintuc->ngayduyet }}</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="{{ route('bai-viet',['slug'=>$tintuc->slug]) }}" class="btn-link">{{ $tintuc->title }}</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                        @endforeach
                                 
                                    </ul>

                             
                                </div>
                                <!-- Post Items End -->
                            </div>
                            <!-- Celebrity Life and Style End -->

                            <!-- Movies Start -->
                            <div class="col-md-6 ptop--30 pbottom--30">
                                <!-- Post Items Title Start -->
                                <div class="post--items-title" data-ajax="tab">
                                    <h2 class="h4">{{ $w6->tintucProperti->title }}</h2>

                                   
                                </div>
                                <!-- Post Items Title End -->

                                <!-- Post Items Start -->
                                <div class="post--items post--items-2" data-ajax-content="outer">
                                    <ul class="nav" data-ajax-content="inner">
                                        @foreach($w7 as $tintuc)
                                        <li>
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-1">
                                                <div class="post--img">
                                                    <a href="{{ route('bai-viet',['slug'=>$tintuc->slug]) }}" class="thumb"><img src="public/uploads/tintuc/{{ $tintuc->hinhanh }}" alt=""></a>
                                                    <a href="{{ url('properti/'.$tintuc->tintucProperti->slug) }}" class="cat">{{ $tintuc->tintucProperti->title }}</a>
                                                    <a href="#" class="icon"><i class="fa fa-flash"></i></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">{{ $tintuc->tintucUser->name }}</a></li>
                                                            <li><a href="#">{{ $tintuc->ngayduyet }}</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="news-single-v1.html" class="btn-link">{{ $tintuc->title }}</a></h3>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="post--content">
                                                    <p>{!! $tintuc->tomtat !!}.</p>
                                                </div>

                                                <div class="post--action">
                                                    <a href="{{ route('bai-viet',['slug'=>$tintuc->slug]) }}">Continue Reading... </a>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                        <li>
                                            <!-- Divider Start -->
                                            <hr class="divider">
                                            <!-- Divider End -->
                                        </li>
                                        @endforeach
                                        
                                    </ul>

                              
                                </div>
                                <!-- Post Items End -->
                            </div>
                            <!-- Movies End -->

                            <!-- Music Start -->
                            <div class="col-md-6 ptop--30 pbottom--30">
                                <!-- Post Items Title Start -->
                                <div class="post--items-title" data-ajax="tab">
                                    <h2 class="h4">{{ $w8->tintucProperti->title }}</h2>
                                </div>
                                <!-- Post Items Title End -->

                                <!-- Post Items Start -->
                                <div class="post--items post--items-2" data-ajax-content="outer">
                                    <ul class="nav" data-ajax-content="inner">
                                        @foreach($w9 as $tintuc)
                                        <li>
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-1">
                                                <div class="post--img">
                                                    <a href="{{ route('bai-viet',['slug'=>$tintuc->slug]) }}" class="thumb"><img src="public/uploads/tintuc/{{ $tintuc->hinhanh }}" alt=""></a>
                                                    <a href="{{ url('properti/'.$tintuc->tintucProperti->slug) }}" class="cat">{{ $tintuc->tintucProperti->title }}</a>
                                                    <a href="#" class="icon"><i class="fa fa-flash"></i></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">{{ $tintuc->tintucUser->name }}</a></li>
                                                            <li><a href="#">{{ $tintuc->ngayduyet }}</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="news-single-v1.html" class="btn-link">{{ $tintuc->title }}</a></h3>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="post--content">
                                                    <p>{!! $tintuc->tomtat !!}.</p>
                                                </div>

                                                <div class="post--action">
                                                    <a href="{{ route('bai-viet',['slug'=>$tintuc->slug]) }}">Continue Reading... </a>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                        <li>
                                            <!-- Divider Start -->
                                            <hr class="divider">
                                            <!-- Divider End -->
                                        </li>
                                        @endforeach
                                      
                                    </ul>

                                   
                                </div>
                                <!-- Post Items End -->
                            </div>
                            <!-- Music End -->
                        </div>
                    </div>
                </div>
                <!-- Main Content End -->

                <!-- Main Sidebar Start -->
                @include('frontend.manager.mainsidebar')
                <!-- Main Sidebar End -->
            </div>

            <!-- Main Content Start -->
            <div class="main--content pd--30-0">
                <!-- Post Items Title Start -->
                <div class="post--items-title" data-ajax="tab">
                    <h2 class="h4">Audio &amp; Videos</h2>

                 
                </div>
                <!-- Post Items Title End -->

                <!-- Post Items Start -->
                <div class="post--items post--items-4" data-ajax-content="outer">
                    <ul class="nav row" data-ajax-content="inner">
                        @foreach($w10 as $w10)
                        <li class="col-md-8">
                            <!-- Post Item Start -->
                            <div class="post--item post--layout-1 post--type-video post--title-large">
                                <div class="post--img">
                                    <a href="{{ $w10->video }}" class="thumb"><img src="public/uploads/tintuc/{{ $w10->hinhanh }}" alt=""></a>
                                    <a href="{{ url('properti/'.$w10->tintucProperti->slug) }}" class="cat">{{ $w10->tintucProperti->title }}</a>
                                    <a href="#" class="icon"><i class="fa fa-eye"></i></a>

                                    <div class="post--info">
                                        <ul class="nav meta">
                                            <li><a href="#">{{ $w10->tintucUser->name }}</a></li>
                                            <li><a href="#">{{ $w10->ngayduyet }}</a></li>
                                        </ul>

                                        <div class="title">
                                            <h2 class="h4"><a href="{{ route('bai-viet',['slug'=>$w10->slug]) }}" class="btn-link">{{ $w10->title }}</a></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Post Item End -->

                            <!-- Divider Start -->
                            <hr class="divider hidden-md hidden-lg">
                            <!-- Divider End -->
                        </li>
                        @endforeach
                        
                        <li class="col-md-4">
                            <ul class="nav">
                                @foreach($w11 as $tintuc)
                                <li>
                                    <!-- Post Item Start -->
                                    <div class="post--item post--type-audio post--layout-3">
                                        <div class="post--img">
                                            <a href="{{ $tintuc->video }}" class="thumb"><img src="public/uploads/tintuc/{{ $tintuc->hinhanh }}" alt=""></a>

                                            <div class="post--info">
                                                <ul class="nav meta">
                                                    <li><a href="#">{{ $tintuc->tintucUser->name }}</a></li>
                                                    <li><a href="#">{{ $tintuc->ngayduyet }}</a></li>
                                                </ul>

                                                <div class="title">
                                                    <h3 class="h4"><a href="{{ route('bai-viet',['slug'=>$tintuc->slug]) }}" class="btn-link">Long established fact that a reader will be distracted by the readable</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Post Item End -->
                                </li>
                                @endforeach
                            </ul>
                        </li>
                       
                    </ul>

                   
                </div>
                <!-- Post Items End -->
            </div>
            <!-- Main Content End -->
                
            <!-- Advertisement Start -->
            <div class="ad--space pd--30-0">
                <a href="https://burine.vn/">
                    <img src="{{ url('public/frontend') }}/img/ads-img/970x90_banner_burine.png" alt="" class="center-block">
                </a>
            </div>
            <!-- Advertisement End -->

            <div class="row">
                <!-- Main Content Start -->
                <div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
                    <div class="sticky-content-inner">
                        <div class="row">
                            <!-- Awards Start -->
                            <div class="col-md-12 ptop--30 pbottom--30">
                                <!-- Post Items Title Start -->
                                <div class="post--items-title" data-ajax="tab">
                                    <h2 class="h4">{{ $w12->tintucProperti->title }}</h2>

                                </div>
                                <!-- Post Items Title End -->

                                <!-- Post Items Start -->
                                <div class="post--items" data-ajax-content="outer">
                                    <ul class="nav row gutter--15" data-ajax-content="inner">
                                        @foreach($w13 as $tintuc)
                                        <li class="col-md-4 col-xs-6 col-xxs-12">
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-1">
                                                <div class="post--img">
                                                    <a href="{{ route('bai-viet',['slug'=>$tintuc->slug]) }}" class="thumb"><img src="public/uploads/tintuc/{{ $tintuc->hinhanh }}" alt=""></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">{{ $tintuc->tintucUser->name }}</a></li>
                                                            <li><a href="#">{{ $tintuc->ngayduyet }}</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="{{ route('bai-viet',['slug'=>$tintuc->slug]) }}" class="btn-link">{{ $tintuc->title }}</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                        @endforeach
                                       
                                    </ul>

                                    <!-- Preloader Start -->
                                    <div class="preloader bg--color-0--b" data-preloader="1">
                                        <div class="preloader--inner"></div>
                                    </div>
                                    <!-- Preloader End -->
                                </div>
                                <!-- Post Items End -->
                            </div>
                            <!-- Awards End -->

                            <!-- Books and Magazine Start -->
                            <div class="col-md-12 ptop--30 pbottom--30">
                                <!-- Post Items Title Start -->
                                <div class="post--items-title" data-ajax="tab">
                                    <h2 class="h4">{{ $w16->tintucProperti->title }}</h2>

                                   
                                </div>
                                <!-- Post Items Title End -->

                                <!-- Post Items Start -->
                                <div class="post--items post--items-2" data-ajax-content="outer">
                                    <ul class="nav" data-ajax-content="inner">
                                        @foreach($w17 as $tintuc)
                                        <li>
                                            <!-- Post Item Start -->
                                            <div class="post--item">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="post--img">
                                                            <a href="{{ route('bai-viet',['slug'=>$tintuc->slug]) }}" class="thumb"><img src="public/uploads/tintuc/{{ $tintuc->hinhanh }}" alt=""></a>
                                                            <a href="{{ url('properti/'.$tintuc->tintucProperti->slug) }}" class="cat">{{ $tintuc->tintucProperti->title }}</a>
                                                            <a href="#" class="icon"><i class="fa fa-star-o"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">{{ $tintuc->tintucUser->name }}</a></li>
                                                                <li><a href="#">{{ $tintuc->ngayduyet }}</a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a href="{{ route('bai-viet',['slug'=>$tintuc->slug]) }}" class="btn-link">{{ $tintuc->title }}.</a></h3>
                                                            </div>
                                                        </div>

                                                        <div class="post--content">
                                                            <p>{{ $tintuc->tomtat }}.</p>
                                                        </div>

                                                        <div class="post--action">
                                                            <a href="{{ route('bai-viet',['slug'=>$tintuc->slug]) }}">Chi tiết.</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>

                                     
                                        <li>
                                            <!-- Divider Start -->
                                            <hr class="divider">
                                            <!-- Divider End -->
                                        </li>
                                        @endforeach
                                    
                                    </ul>

                                   
                                </div>
                                <!-- Post Items End -->
                            </div>
                            <!-- Books and Magazine End -->

                            <!-- Photo Gallery Start -->
                         

                       
                        </div>
                    </div>
                </div>
                <!-- Main Content End -->

                <!-- Main Sidebar Start -->
                @include('frontend.manager.binhchon')
                <!-- Main Sidebar End -->
            </div>
        </div>
    </div>
    <!-- Main Content Section End -->
@endsection