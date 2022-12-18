@extends('layouts.frontend')
@section('title')
    <title>News</title>
@endsection
@section('main')
    <!-- Main Content Section Start -->
    <div class="main-content--section pbottom--30">
        <div class="container">
            <!-- Main Content Start -->
            <div class="main--content">
                <!-- Post Items Start -->
                <div class="post--items post--items-1 pd--30-0">
                    <div class="row gutter--15">
                        <div class="col-md-6">
                            <div class="row gutter--15">
                                @foreach ($f_f_e as $f_f_e)
                                    <div class="col-xs-6 col-xss-12">
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-1 post--title-large">
                                            <div class="post--img">
                                                <a href="{{ route('bai-viet',['slug'=>$f_f_e->slug]) }}" class="thumb"><img
                                                        src="public/uploads/tintuc/{{ $f_f_e->hinhanh }}"alt="" ></a>

                                                <a href="{{ url('category/'.$f_f_e->tintucCategory->slug) }}" class="cat">{{ $f_f_e->tintucCategory->title }}</a>


                                                <a href="#" class="icon"><i class="fa fa-flash"></i></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        @foreach ($user as $u)
                                                            @if ($u->id == $f_f_e->tacgia)
                                                                <li><a href="#">{{ $u->name }}</a></li>
                                                            @endif
                                                        @endforeach

                                                        <li><a href="#">{{ $f_f_e->ngayduyet }}</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h2 class="h4"><a href="{{ route('bai-viet',['slug'=>$f_f_e->slug]) }}"
                                                                class="btn-link">{{ $f_f_e->title }}</a></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
                                    </div>
                                @endforeach


                                @foreach ($t_s_f as $t_s_f)
                                    <div class="col-sm-12 hidden-sm hidden-xs">
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-1 post--title-larger">
                                            <div class="post--img">
                                                <a href="{{ route('bai-viet',['slug'=>$t_s_f->slug]) }}" class="thumb"><img
                                                        src="public/uploads/tintuc/{{ $t_s_f->hinhanh }}" style="height:200px" alt=""></a>

                                                <a href="{{ url('category/'.$f_f_e->tintucCategory->slug) }}"
                                                    class="cat">{{ $t_s_f->tintucCategory->title }}</a>

                                                <a href="#" class="icon"><i class="fa fa-fire"></i></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        @foreach ($user as $u)
                                                            @if ($u->id == $t_s_f->tacgia)
                                                                <li><a href="#">{{ $u->name }}</a></li>
                                                            @endif
                                                        @endforeach
                                                        <li><a href="#">{{ $t_s_f->ngayduyet }}</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h2 class="h4"><a href="{{ route('bai-viet',['slug'=>$t_s_f->slug]) }}"
                                                                class="btn-link">{{ $t_s_f->title }}</a></h2>
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
                            @foreach ($e_t_z as $e_t_z)
                                <div class="post--item post--layout-1 post--title-larger">
                                    <div class="post--img">
                                        <a href="{{ route('bai-viet',['slug'=>$e_t_z->slug]) }}" class="thumb"><img
                                                src="public/uploads/tintuc/{{ $e_t_z->hinhanh }}" alt=""></a>

                                        <a href="{{ url('category/'.$e_t_z->tintucCategory->slug) }}" class="cat">{{ $e_t_z->tintucCategory->title }}</a>

                                        <a href="#" class="icon"><i class="fa fa-flash"></i></a>

                                        <div class="post--map">
                                            <p class="btn-link"><i class="fa fa-map-o"></i>Location in Google Map
                                            </p>

                                            <div class="map--wrapper">
                                                <div data-map-latitude="23.790546" data-map-longitude="90.375583"
                                                    data-map-zoom="6" data-map-marker="[[23.790546, 90.375583]]"></div>
                                            </div>
                                        </div>

                                        <div class="post--info">
                                            <ul class="nav meta">
                                                @foreach ($user as $u)
                                                    @if ($u->id == $e_t_z->tacgia)
                                                        <li><a href="#">{{ $u->name }}</a></li>
                                                    @endif
                                                @endforeach
                                                <li><a href="#">{{ $e_t_z->ngayduyet }}</a></li>
                                            </ul>

                                            <div class="title">
                                                <h2 class="h4"><a href="{{ route('bai-viet',['slug'=>$e_t_z->slug]) }}"
                                                        class="btn-link">{{ $e_t_z->title }}</a>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Post Item End -->
                            @endforeach
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
                            <!-- World News Start -->
                            <div class="col-md-6 ptop--30 pbottom--30">
                                <!-- Post Items Title Start -->
                                <div class="post--items-title" data-ajax="tab">
                                    <h2 class="h4">Tin thế giới</h2>
                                </div>
                                <!-- Post Items Title End -->

                                <!-- Post Items Start -->
                                <div class="post--items post--items-2" data-ajax-content="outer">
                                    <ul class="nav row gutter--15" data-ajax-content="inner">
                                        @foreach ($the_gioi as $tg)
                                            <li class="col-xs-12">
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-1">
                                                    <div class="post--img">
                                                        <a href="{{ route('bai-viet',['slug'=>$tg->slug]) }}" class="thumb"><img
                                                                src="public/uploads/tintuc/{{ $tg->hinhanh }}"
                                                                alt=""></a>

                                                        <a href="{{ url('category/'.$tg->tintucCategory->slug) }}"
                                                            class="cat">{{ $tg->tintucCategory->title }}</a>


                                                        <a href="#" class="icon"><i
                                                                class="fa fa-flash"></i></a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                @foreach ($user as $u)
                                                                    @if ($u->id == $tg->tacgia)
                                                                        <li><a href="#">{{ $u->name }}</a></li>
                                                                    @endif
                                                                @endforeach
                                                                <li><a href="#">{{ $tg->ngayduyet }}</a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a href="{{ route('bai-viet',['slug'=>$tg->slug]) }}"
                                                                        class="btn-link">{{ $tg->title }}</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Post Item End -->
                                            </li>
                                        @endforeach

                                        <li class="col-xs-12">
                                            <!-- Divider Start -->
                                            <hr class="divider">
                                            <!-- Divider End -->
                                        </li>
                                        @foreach ($the_gioi2 as $the_gioi2)
                                            <li class="col-xs-6">
                                                <!-- Post Item Start -->

                                                <div class="post--item post--layout-2">
                                                    <div class="post--img">
                                                        <a href="{{ route('bai-viet',['slug'=>$the_gioi2->slug]) }}" class="thumb"><img
                                                                src="public/uploads/tintuc/{{ $the_gioi2->hinhanh }}"
                                                                alt=""></a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                @foreach ($user as $u)
                                                                    @if ($u->id == $the_gioi2->tacgia)
                                                                        <li><a href="#">{{ $u->name }}</a></li>
                                                                    @endif
                                                                @endforeach
                                                                <li><a href="#">{{ $the_gioi2->ngayduyet }}</a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a href="{{ route('bai-viet',['slug'=>$the_gioi2->slug]) }}"
                                                                        class="btn-link">{{ $the_gioi2->title }}</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Post Item End -->
                                            </li>
                                        @endforeach
                                        <li class="col-xs-12">
                                            <!-- Divider Start -->
                                            <hr class="divider">
                                            <!-- Divider End -->
                                        </li>
                                        @foreach ($the_gioi3 as $the_gioi3)
                                            <li class="col-xs-6">
                                                <!-- Post Item Start -->

                                                <div class="post--item post--layout-2">
                                                    <div class="post--img">
                                                        <a href="{{ route('bai-viet',['slug'=>$the_gioi3->slug]) }}" class="thumb"><img
                                                                src="public/uploads/tintuc/{{ $the_gioi3->hinhanh }}"
                                                                alt=""></a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                @foreach ($user as $u)
                                                                    @if ($u->id == $the_gioi3->tacgia)
                                                                        <li><a href="#">{{ $u->name }}</a></li>
                                                                    @endif
                                                                @endforeach
                                                                <li><a href="#">{{ $the_gioi3->ngayduyet }}</a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a href="{{ route('bai-viet',['slug'=>$the_gioi3->slug]) }}"
                                                                        class="btn-link">{{ $the_gioi3->title }}</a>
                                                                </h3>
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
                            <!-- World News End -->

                            <!-- Technology Start -->
                            <div class="col-md-6 ptop--30 pbottom--30">
                                <!-- Post Items Title Start -->
                                <div class="post--items-title" data-ajax="tab">
                                    <h2 class="h4">Công nghệ</h2>

                           
                                </div>
                                <!-- Post Items Title End -->

                                <!-- Post Items Start -->
                                <div class="post--items post--items-3" data-ajax-content="outer">
                                    <ul class="nav" data-ajax-content="inner">
                                        @foreach ($cong_nghe as $cong_nghe)
                                            <li>
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-1">
                                                    <div class="post--img">
                                                        <a href="{{ route('bai-viet',['slug'=>$cong_nghe->slug]) }}" class="thumb"><img
                                                                src="public/uploads/tintuc/{{ $cong_nghe->hinhanh }}"
                                                                alt=""></a>
                                                        <a href="{{ url('category/'.$cong_nghe->tintucCategory->slug) }}"
                                                            class="cat">{{ $cong_nghe->tintucCategory->title }}</a>
                                                        <a href="#" class="icon"><i
                                                                class="fa fa-flash"></i></a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                @foreach ($user as $u)
                                                                    @if ($u->id == $cong_nghe->tacgia)
                                                                        <li><a href="#">{{ $u->name }}</a></li>
                                                                    @endif
                                                                @endforeach
                                                                <li><a href="#">{{ $cong_nghe->ngayduyet }}</a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a href="{{ route('bai-viet',['slug'=>$cong_nghe->slug]) }}"
                                                                        class="btn-link">{{ $cong_nghe->title }}</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Post Item End -->
                                            </li>
                                        @endforeach
                                        @foreach ($cong_nghe2 as $cong_nghe2)
                                            <li>
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img">
                                                        <a href="{{ route('bai-viet',['slug'=>$cong_nghe2->slug]) }}" class="thumb"><img
                                                                src="public/uploads/tintuc/{{ $cong_nghe2->hinhanh }}"
                                                                alt=""></a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                @foreach ($user as $u)
                                                                    @if ($u->id == $cong_nghe2->tacgia)
                                                                        <li><a href="#">{{ $u->name }}</a></li>
                                                                    @endif
                                                                @endforeach
                                                                <li><a href="#">{{ $cong_nghe2->ngayduyet }}</a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a href="{{ route('bai-viet',['slug'=>$cong_nghe2->slug]) }}"
                                                                        class="btn-link">{{ $cong_nghe2->title }}</a>
                                                                </h3>
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
                            <!-- Technology End -->

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

                            <!-- Finance Start -->
                            <div class="col-md-12 ptop--30 pbottom--30">
                                <!-- Post Items Title Start -->
                                <div class="post--items-title" data-ajax="tab">
                                    <h2 class="h4">Giáo dục</h2>

                      
                                </div>
                                <!-- Post Items Title End -->

                                <!-- Post Items Start -->
                                <div class="post--items post--items-2" data-ajax-content="outer">
                                    <ul class="nav row" data-ajax-content="inner">
                                        @foreach ($giao_duc as $giao_duc)
                                            <li class="col-md-6">
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-2">
                                                    <div class="post--img">
                                                        <a href="{{ route('bai-viet',['slug'=>$giao_duc->slug]) }}" class="thumb"><img
                                                                src="public/uploads/tintuc/{{ $giao_duc->hinhanh }}"
                                                                alt=""></a>
                                                        <a href="{{ url('properti/'.$giao_duc->tintucProperti->slug) }}"
                                                            class="cat">{{ $giao_duc->tintucProperti->title }}</a>
                                                        <a href="#" class="icon"><i
                                                                class="fa fa-star-o"></i></a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                @foreach ($user as $u)
                                                                    @if ($u->id == $giao_duc->tacgia)
                                                                        <li><a href="#">{{ $u->name }}</a></li>
                                                                    @endif
                                                                @endforeach
                                                                <li><a href="#">{{ $giao_duc->ngayduyet }}</a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a href="{{ route('bai-viet',['slug'=>$giao_duc->slug]) }}"
                                                                        class="btn-link">{{ $giao_duc->title }}</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Post Item End -->
                                            </li>
                                        @endforeach
                                        <li class="col-md-6">
                                            <ul class="nav row">
                                                <li class="col-xs-12 hidden-md hidden-lg">
                                                    <!-- Divider Start -->
                                                    <hr class="divider">
                                                    <!-- Divider End -->
                                                </li>
                                                @foreach ($giao_duc2 as $giao_duc2)
                                                    <li class="col-xs-6">
                                                        <!-- Post Item Start -->
                                                        <div class="post--item post--layout-2">
                                                            <div class="post--img">
                                                                <a href="{{ route('bai-viet',['slug'=>$giao_duc2->slug]) }}" class="thumb"><img
                                                                        src="public/uploads/tintuc/{{ $giao_duc2->hinhanh }}"
                                                                        alt=""></a>

                                                                <div class="post--info">
                                                                    <ul class="nav meta">
                                                                        @foreach ($user as $u)
                                                                            @if ($u->id == $giao_duc2->tacgia)
                                                                                <li><a href="#">{{ $u->name }}</a>
                                                                                </li>
                                                                            @endif
                                                                        @endforeach
                                                                        <li><a href="#">{{ $giao_duc2->ngayduyet }}</a></li>
                                                                    </ul>

                                                                    <div class="title">
                                                                        <h3 class="h4"><a
                                                                                href="{{ route('bai-viet',['slug'=>$giao_duc2->slug]) }}"
                                                                                class="btn-link">{{ $giao_duc2->title }}</a></h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Post Item End -->
                                                    </li>
                                                    @endforeach


                                                    <li class="col-xs-12">
                                                        <!-- Divider Start -->
                                                        <hr class="divider">
                                                        <!-- Divider End -->
                                                    </li>

                                                    @foreach ($giao_duc3 as $giao_duc3)
                                                    <li class="col-xs-6">
                                                        <!-- Post Item Start -->
                                                        <div class="post--item post--layout-2">
                                                            <div class="post--img">
                                                                <a href="{{ route('bai-viet',['slug'=>$giao_duc3->slug]) }}" class="thumb"><img
                                                                        src="public/uploads/tintuc/{{ $giao_duc3->hinhanh }}"
                                                                        alt=""></a>

                                                                <div class="post--info">
                                                                    <ul class="nav meta">
                                                                        @foreach ($user as $u)
                                                                            @if ($u->id == $giao_duc3->tacgia)
                                                                                <li><a href="#">{{ $u->name }}</a>
                                                                                </li>
                                                                            @endif
                                                                        @endforeach
                                                                        <li><a href="#">{{ $giao_duc3->ngayduyet }}</a></li>
                                                                    </ul>

                                                                    <div class="title">
                                                                        <h3 class="h4"><a
                                                                                href="{{ route('bai-viet',['slug'=>$giao_duc3->slug]) }}"
                                                                                class="btn-link">{{ $giao_duc3->title }}</a></h3>
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
                            <!-- Finance End -->

                            <!-- Politics Start -->
                            <div class="col-md-6 ptop--30 pbottom--30">
                                <!-- Post Items Title Start -->
                                <div class="post--items-title" data-ajax="tab">
                                    <h2 class="h4">Thể thao</h2>

                                
                                </div>
                                <!-- Post Items Title End -->

                                <!-- Post Items Start -->
                                <div class="post--items post--items-2" data-ajax-content="outer">
                                    <ul class="nav row gutter--15" data-ajax-content="inner">
                                        @foreach($the_thao as $thethao)
                                        <li class="col-xs-12">
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-1">
                                                <div class="post--img">
                                                    <a href="{{ route('bai-viet',['slug'=>$thethao->slug]) }}" class="thumb"><img
                                                            src="public/uploads/tintuc/{{ $thethao->hinhanh }}"
                                                            alt=""></a>
                                                    <a href="{{ url('properti/'.$thethao->tintucProperti->slug) }}" class="cat">{{ $thethao->tintucProperti->title }}</a>
                                                    <a href="#" class="icon"><i class="fa fa-fire"></i></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            @foreach ($user as $u)
                                                                            @if ($u->id == $thethao->tacgia)
                                                                                <li><a href="#">{{ $u->name }}</a>
                                                                                </li>
                                                                            @endif
                                                                        @endforeach
                                                            <li><a href="#">{{ $thethao->ngayduyet }}</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="{{ route('bai-viet',['slug'=>$thethao->slug]) }}"
                                                                    class="btn-link">{{ $thethao->title }}</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                        @endforeach
                                        <li class="col-xs-12">
                                            <!-- Divider Start -->
                                            <hr class="divider">
                                            <!-- Divider End -->
                                        </li>
                                        @foreach($the_thao2 as $thethao)
                                        <li class="col-xs-6">
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-2">
                                                <div class="post--img">
                                                    <a href="{{ route('bai-viet',['slug'=>$thethao->slug]) }}" class="thumb"><img
                                                            src="public/uploads/tintuc/{{ $thethao->hinhanh }}"
                                                            alt=""></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            @foreach ($user as $u)
                                                            @if ($u->id == $thethao->tacgia)
                                                                <li><a href="#">{{ $u->name }}</a>
                                                                </li>
                                                            @endif
                                                        @endforeach
                                                            <li><a href="#">{{ $thethao->ngayduyet }}</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="{{ route('bai-viet',['slug'=>$thethao->slug]) }}"
                                                                    class="btn-link">{{ $thethao->title }}</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                        @endforeach
                                        
                                        <li class="col-xs-12">
                                            <!-- Divider Start -->
                                            <hr class="divider">
                                            <!-- Divider End -->
                                        </li>
                                        @foreach($the_thao3 as $thethao)
                                        <li class="col-xs-6">
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-2">
                                                <div class="post--img">
                                                    <a href="{{ route('bai-viet',['slug'=>$thethao->slug]) }}" class="thumb"><img
                                                            src="public/uploads/tintuc/{{ $thethao->hinhanh }}"
                                                            alt=""></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            @foreach ($user as $u)
                                                            @if ($u->id == $thethao->tacgia)
                                                                <li><a href="#">{{ $u->name }}</a>
                                                                </li>
                                                            @endif
                                                        @endforeach
                                                            <li><a href="#">{{ $thethao->ngayduyet }}</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="{{ route('bai-viet',['slug'=>$thethao->slug]) }}"
                                                                    class="btn-link">{{ $thethao->title }}</a></h3>
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
                            <!-- Politics End -->

                            <!-- Sports Start -->
                            <div class="col-md-6 ptop--30 pbottom--30">
                                <!-- Post Items Title Start -->
                                <div class="post--items-title" data-ajax="tab">
                                    <h2 class="h4">Khoa học</h2>

                          
                                </div>
                                <!-- Post Items Title End -->

                                <!-- Post Items Start -->
                                <div class="post--items post--items-3" data-ajax-content="outer">
                                    <ul class="nav" data-ajax-content="inner">
                                        @foreach($khoa_hoc as $khoahoc)
                                        <li>
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-1">
                                                <div class="post--img">
                                                    <a href="{{ route('bai-viet',['slug'=>$khoahoc->slug]) }}" class="thumb"><img
                                                            src="public/uploads/tintuc/{{ $khoahoc->hinhanh }}"
                                                            alt=""></a>
                                                    <a href="{{ url('properti/'.$khoahoc->tintucProperti->slug) }}" class="cat">{{ $khoahoc->tintucProperti->title }}</a>
                                                    <a href="#" class="icon"><i class="fa fa-eye"></i></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            @foreach ($user as $u)
                                                            @if ($u->id == $khoahoc->tacgia)
                                                                <li><a href="#">{{ $u->name }}</a>
                                                                </li>
                                                            @endif
                                                        @endforeach
                                                            <li><a href="#">{{ $khoahoc->ngayduyet }}</li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="{{ route('bai-viet',['slug'=>$khoahoc->slug]) }}"
                                                                    class="btn-link">{{ $khoahoc->title }}</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                        @endforeach
                                        @foreach($khoa_hoc2 as $khoahoc)
                                        <li>
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-3">
                                                <div class="post--img">
                                                    <a href="{{ route('bai-viet',['slug'=>$khoahoc->slug]) }}" class="thumb"><img
                                                            src="public/uploads/tintuc/{{ $khoahoc->hinhanh }}"
                                                            alt=""></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            @foreach ($user as $u)
                                                            @if ($u->id == $thethao->tacgia)
                                                                <li><a href="#">{{ $u->name }}</a>
                                                                </li>
                                                            @endif
                                                        @endforeach
                                                            <li><a href="#">{{ $khoahoc->ngayduyet }}</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="{{ route('bai-viet',['slug'=>$khoahoc->slug]) }}"
                                                                    class="btn-link">{{ $khoahoc->title }}</a></h3>
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
                            <!-- Sports End -->
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
                        @foreach($video as $video)
                        <li class="col-md-8">
                            <!-- Post Item Start -->
                            <div class="post--item post--layout-1 post--type-video post--title-large">
                                <div class="post--img">
                                    <a href="{{ $video->video }}" class="thumb"><img
                                            src="public/uploads/tintuc/{{ $video->hinhanh }}"
                                            alt=""></a>
                                    <a href="{{ url('properti/'.$video->tintucProperti->slug) }}" class="cat">{{ $video->tintucProperti->title }}</a>
                                    <a href="#" class="icon"><i class="fa fa-eye"></i></a>
                                   
                                    <div class="post--info">
                                        <ul class="nav meta">
                                            @foreach ($user as $u)
                                                            @if ($u->id == $video->tacgia)
                                                                <li><a href="#">{{ $u->name }}</a>
                                                                </li>
                                                            @endif
                                                        @endforeach
                                            <li><a href="#">{{ $video->ngayduyet }}</a></li>
                                        </ul>

                                        <div class="title">
                                            <h2 class="h4"><a href="{{ route('bai-viet',['slug'=>$video->slug]) }}"
                                                    class="btn-link">{{ $video->title }}</a></h2>
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
                                @foreach($video2 as $video)
                                <li>
                                    <!-- Post Item Start -->
                                    <div class="post--item post--type-audio post--layout-3">
                                        <div class="post--img">
                                            <a href="{{$video->video }}" class="thumb"><img
                                                    src="public/uploads/tintuc/{{ $video->hinhanh }}"
                                                    alt=""></a>

                                            <div class="post--info">
                                                <ul class="nav meta">
                                                    @foreach ($user as $u)
                                                    @if ($u->id == $video->tacgia)
                                                        <li><a href="#">{{ $u->name }}</a>
                                                        </li>
                                                    @endif
                                                @endforeach
                                                    <li><a href="#">{{ $video->ngayduyet }}</a></li>
                                                </ul>

                                                <div class="title">
                                                    <h3 class="h4"><a href="{{ route('bai-viet',['slug'=>$video->slug]) }}"
                                                            class="btn-link">{{ $video->title }}</a></h3>
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
                            <!-- Health and fitness Start -->
                            <div class="col-md-6 ptop--30 pbottom--30">
                                <!-- Post Items Title Start -->
                                <div class="post--items-title" data-ajax="tab">
                                    <h2 class="h4">Đời sống</h2>

                                  
                                </div>
                                <!-- Post Items Title End -->

                                <!-- Post Items Start -->
                                <div class="post--items post--items-3" data-ajax-content="outer">
                                    <ul class="nav" data-ajax-content="inner">
                                        @foreach($doi_song as $doisong)
                                        <li>
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-1">
                                                <div class="post--img">
                                                    <a href="{{ route('bai-viet',['slug'=>$doisong->slug]) }}" class="thumb"><img
                                                            src="public/uploads/tintuc/{{ $doisong->hinhanh }}"
                                                            alt=""></a>
                                                    <a href="{{ url('properti/'.$doisong->tintucProperti->slug) }}" class="cat">{{ $doisong->tintucProperti->title }}</a>
                                                    <a href="#" class="icon"><i class="fa fa-star-o"></i></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            @foreach ($user as $u)
                                                                            @if ($u->id == $doisong->tacgia)
                                                                                <li><a href="#">{{ $u->name }}</a>
                                                                                </li>
                                                                            @endif
                                                                        @endforeach
                                                            <li><a href="#">{{ $doisong->ngayduyet }}</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="{{ route('bai-viet',['slug'=>$doisong->slug]) }}"
                                                                    class="btn-link">{{$doisong->title }}</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                        @endforeach
                                        @foreach($doi_song2 as $doisong)
                                        <li>
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-3">
                                                <div class="post--img">
                                                    <a href="{{ route('bai-viet',['slug'=>$doisong->slug]) }}" class="thumb"><img
                                                            src="public/uploads/tintuc/{{ $doisong->hinhanh }}"
                                                            alt=""></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            @foreach ($user as $u)
                                                            @if ($u->id == $doisong->tacgia)
                                                                <li><a href="#">{{ $u->name }}</a>
                                                                </li>
                                                            @endif
                                                        @endforeach
                                                        <li><a href="#">{{ $doisong->ngayduyet }}</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="{{ route('bai-viet',['slug'=>$doisong->slug]) }}"
                                                                class="btn-link">{{$doisong->title }}</a></h3>
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
                            <!-- Health and fitness End -->

                            <!-- Lifestyle Start -->
                            <div class="col-md-6 ptop--30 pbottom--30">
                                <!-- Post Items Title Start -->
                                <div class="post--items-title" data-ajax="tab">
                                    <h2 class="h4">Pháp luật</h2>

                                   
                                </div>
                                <!-- Post Items Title End -->

                                <!-- Post Items Start -->
                                <div class="post--items post--items-2" data-ajax-content="outer">
                                    <ul class="nav row gutter--15" data-ajax-content="inner">
                                        @foreach($phap_luat as $phapluat) 
                                        <li class="col-xs-12">
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-1">
                                                <div class="post--img">
                                                    <a href="{{ route('bai-viet',['slug'=>$phapluat->slug]) }}" class="thumb"><img
                                                            src="public/uploads/tintuc/{{ $phapluat->hinhanh }}"
                                                            alt=""></a>
                                                    <a href="{{ url('properti/'.$phapluat->tintucProperti->slug) }}" class="cat">{{ $phapluat->tintucProperti->title }}</a>
                                                    <a href="#" class="icon"><i class="fa fa-heart-o"></i></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            @foreach ($user as $u)
                                                            @if ($u->id == $phapluat->tacgia)
                                                                <li><a href="#">{{ $u->name }}</a>
                                                                </li>
                                                            @endif
                                                        @endforeach
                                                            <li><a href="#">{{ $phapluat->ngayduyet }}</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="{{ route('bai-viet',['slug'=>$phapluat->slug]) }}"
                                                                    class="btn-link">{{$phapluat->title}}</a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                        @endforeach
                                        <li class="col-xs-12">
                                            <!-- Divider Start -->
                                            <hr class="divider">
                                            <!-- Divider End -->
                                        </li>
                                        @foreach($phap_luat2 as $phapluat)
                                        <li class="col-xs-6">
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-2">
                                                <div class="post--img">
                                                    <a href="{{ route('bai-viet',['slug'=>$phapluat->slug]) }}" class="thumb"><img
                                                            src="public/uploads/tintuc/{{ $phapluat->hinhanh }}"
                                                            alt=""></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            @foreach ($user as $u)
                                                            @if ($u->id == $phapluat->tacgia)
                                                                <li><a href="#">{{ $u->name }}</a>
                                                                </li>
                                                            @endif
                                                        @endforeach
                                                            <li><a href="#">{{ $phapluat->ngayduyet }}</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="{{ route('bai-viet',['slug'=>$phapluat->slug]) }}"
                                                                    class="btn-link">{{ $phapluat->title }}</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                        @endforeach
                                        <li class="col-xs-12">
                                            <!-- Divider Start -->
                                            <hr class="divider">
                                            <!-- Divider End -->
                                        </li>
                                        @foreach($phap_luat3 as $phapluat)
                                        <li class="col-xs-6">
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-2">
                                                <div class="post--img">
                                                    <a href="{{ route('bai-viet',['slug'=>$phapluat->slug]) }}" class="thumb"><img
                                                            src="public/uploads/tintuc/{{ $phapluat->hinhanh }}"
                                                            alt=""></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            @foreach ($user as $u)
                                                            @if ($u->id == $phapluat->tacgia)
                                                                <li><a href="#">{{ $u->name }}</a>
                                                                </li>
                                                            @endif
                                                        @endforeach
                                                            <li><a href="#">{{ $phapluat->ngayduyet }}</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="{{ route('bai-viet',['slug'=>$phapluat->slug]) }}"
                                                                    class="btn-link">{{ $phapluat->title }}</a></h3>
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
                            <!-- Lifestyle End -->

                            <!-- Foods and Recipes Start -->
                            <div class="col-md-12 ptop--30 pbottom--30">
                                <!-- Post Items Title Start -->
                                <div class="post--items-title" data-ajax="tab">
                                    <h2 class="h4">Giải trí</h2>

                                  
                                </div>
                                <!-- Post Items Title End -->

                                <!-- Post Items Start -->
                                <div class="post--items" data-ajax-content="outer">
                                    <ul class="nav row gutter--15" data-ajax-content="inner">
                                        @foreach($giai_tri as $giaitri)
                                        <li class="col-md-4 col-xs-6 col-xxs-12">
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-1">
                                                <div class="post--img">
                                                    <a href="{{ route('bai-viet',['slug'=>$giaitri->slug]) }}" class="thumb"><img
                                                            src="public/uploads/tintuc/{{ $giaitri->hinhanh }}"
                                                            alt=""></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            @foreach ($user as $u)
                                                            @if ($u->id == $giaitri->tacgia)
                                                                <li><a href="#">{{ $u->name }}</a>
                                                                </li>
                                                            @endif
                                                            @endforeach
                                                            <li><a href="#">{{ $giaitri->ngayduyet }}</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="{{ route('bai-viet',['slug'=>$giaitri->slug]) }}"
                                                                    class="btn-link">{{ $giaitri->title }}</a></h3>
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
                            <!-- Foods and Recipes End -->

                            <!-- Photo Gallery Start -->
                            <div class="col-md-12 ptop--30 pbottom--30">
                                <!-- Post Items Title Start -->
                                <div class="post--items-title" data-ajax="tab">
                                    <h2 class="h4">Kinh tế</h2>

                                </div>
                                <!-- Post Items Title End -->

                                <!-- Post Items Start -->
                                <div class="post--items post--items-1" data-ajax-content="outer">
                                    <ul class="nav row gutter--15" data-ajax-content="inner">
                                        @foreach($kinh_te as $kinhte)
                                        <li class="col-md-12">
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-1 post--title-large">
                                                <div class="post--img">
                                                    <a href="{{ route('bai-viet',['slug'=>$kinhte->slug]) }}" class="thumb"><img
                                                            src="public/uploads/tintuc/{{ $kinhte->hinhanh }}"
                                                            alt=""></a>
                                                    <a href="{{ url('properti/'.$kinhte->tintucProperti->slug) }}" class="cat">{{ $kinhte->tintucProperti->title }}</a>
                                                    <a href="#" class="icon"><i class="fa fa-eye"></i></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            @foreach ($user as $u)
                                                            @if ($u->id == $kinhte->tacgia)
                                                                <li><a href="#">{{ $u->name }}</a>
                                                                </li>
                                                            @endif
                                                            @endforeach
                                                            <li><a href="#">{{ $kinhte->ngayduyet }}</a></li>
                                                        </ul>

                                                        <div class="title text-xxs-ellipsis">
                                                            <h2 class="h4"><a href="{{ route('bai-viet',['slug'=>$kinhte->slug]) }}"
                                                                    class="btn-link">{{ $kinhte->title }}</a></h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                        @endforeach
                                        @foreach($kinh_te2 as $kinhte)
                                        <li class="col-md-4 col-xs-6 col-xxs-12">
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-1">
                                                <div class="post--img">
                                                    <a href="{{ route('bai-viet',['slug'=>$kinhte->slug]) }}" class="thumb"><img
                                                            src="public/uploads/tintuc/{{ $kinhte->hinhanh }}"
                                                            alt=""></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            @foreach ($user as $u)
                                                            @if ($u->id == $kinhte->tacgia)
                                                                <li><a href="#">{{ $u->name }}</a>
                                                                </li>
                                                            @endif
                                                            @endforeach
                                                            <li><a href="#">{{ $kinhte->ngayduyet }}</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h2 class="h4"><a href="{{ route('bai-viet',['slug'=>$kinhte->slug]) }}"
                                                                class="btn-link">{{ $kinhte->title }}</a></h2>
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
                            <!-- Photo Gallery End -->
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
