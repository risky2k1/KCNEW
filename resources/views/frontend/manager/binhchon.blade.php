<?php 
    $luachon = DB::table('tintucs')->orderBy('luotxem','ASC')->take(4)->get();
    $user = DB::table('users')->get();
    $binhluan = DB::table('binhluans')->take(4)->get();
?>

<div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" data-sticky-content="true">
    <div class="sticky-content-inner">
        <!-- Widget Start -->
        <div class="widget">
            <div class="widget--title" data-ajax="tab">
                <h2 class="h4">Bình chọn</h2>

                <div class="nav">
                    <a href="#" class="prev btn-link" data-ajax-action="load_prev_poll_widget">
                        <i class="fa fa-long-arrow-left"></i>
                    </a>

                    <span class="divider">/</span>

                    <a href="#" class="next btn-link" data-ajax-action="load_next_poll_widget">
                        <i class="fa fa-long-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Poll Widget Start -->
            <div class="poll--widget" data-ajax-content="outer">
                <ul class="nav" data-ajax-content="inner">
                    <li class="title">
                        <h3 class="h4">
                            Theo bạn thì giải vô địch bóng đá nào hay nhất từ ​​trước đến nay?</h3>
                    </li>

                    <li class="options">
                        <form action="#">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="option-1">
                                    <span>Brazil 2014</span>
                                </label>

                                <p>65%<span style="width: 65%;"></span></p>
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="option-2">
                                    <span>South Africa 2010</span>
                                </label>

                                <p>28%<span style="width: 28%;"></span></p>
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="option-2">
                                    <span>Germany 2006</span>
                                </label>

                                <p>07%<span style="width: 07%;"></span></p>
                            </div>

                            <button type="submit" class="btn btn-primary">Vote Now</button>
                        </form>
                    </li>
                </ul>

                <!-- Preloader Start -->
                <div class="preloader bg--color-0--b" data-preloader="1">
                    <div class="preloader--inner"></div>
                </div>
                <!-- Preloader End -->
            </div>
            <!-- Poll Widget End -->
        </div>
        <!-- Widget End -->

        <!-- Widget Start -->
        <div class="widget">
            <div class="widget--title" data-ajax="tab">
                <h2 class="h4">Bình chọn</h2>

                <div class="nav">
                    <a href="#" class="prev btn-link" data-ajax-action="load_prev_poll_widget">
                        <i class="fa fa-long-arrow-left"></i>
                    </a>

                    <span class="divider">/</span>

                    <a href="#" class="next btn-link" data-ajax-action="load_next_poll_widget">
                        <i class="fa fa-long-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Poll Widget Start -->
            <div class="poll--widget" data-ajax-content="outer">
                <ul class="nav" data-ajax-content="inner">
                    <li class="title">
                        <h3 class="h4">
                            Bạn có nghĩ rằng chi phí gửi tiền đến điện thoại di động nên giảm?</h3>
                    </li>

                    <li class="options">
                        <form action="#">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="option-1">
                                    <span>Yes</span>
                                </label>

                                <p>65%<span style="width: 65%;"></span></p>
                            </div>

                            <div class="radio">
                                <label>
                                    <input type="radio" name="option-1">
                                    <span>No</span>
                                </label>

                                <p>28%<span style="width: 28%;"></span></p>
                            </div>

                            <div class="radio">
                                <label>
                                    <input type="radio" name="option-1">
                                    <span>Average</span>
                                </label>

                                <p>07%<span style="width: 07%;"></span></p>
                            </div>

                            <button type="submit" class="btn btn-primary">Vote Now</button>
                        </form>
                    </li>
                </ul>

                <!-- Preloader Start -->
                <div class="preloader bg--color-0--b" data-preloader="1">
                    <div class="preloader--inner"></div>
                </div>
                <!-- Preloader End -->
            </div>
            <!-- Poll Widget End -->
        </div>
        <!-- Widget End -->

        <!-- Widget Start -->
        <div class="widget">
            <!-- Ad Widget Start -->
            <div class="ad--widget">
                <div class="row">
                    <div class="col-sm-6">
                        <a href="https://docbao.qdnd.vn/readding">
                            <img src="{{ url('public/frontend') }}/img/ads-img/150x150_banner_baoin.jpg" alt="">
                        </a>
                    </div>

                    <div class="col-sm-6">
                        <a href="https://baomoi.com/chu-tich-ho-chi-minh/top/114.epi">
                            <img src="{{ url('public/frontend') }}/img/ads-img/150x150_banner_hcm_02-min.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <!-- Ad Widget End -->
        </div>
        <!-- Widget End -->

        <!-- Widget Start -->
        <div class="widget">
            <div class="widget--title" data-ajax="tab">
                <h2 class="h4">Ý KIẾN NGƯỜI ĐỌC</h2>
            </div>

            <!-- List Widgets Start -->
            <div class="list--widget list--widget-2" data-ajax-content="outer">
                <!-- Post Items Start -->
                <div class="post--items post--items-3">
                    <ul class="nav" data-ajax-content="inner">
                        @foreach($binhluan as $binhluan)
                        <li>
                            <!-- Post Item Start -->
                            <div class="post--item post--layout-3">
                                <div class="post--img">
                                    <span class="thumb"><img
                                            src="{{ url('public/frontend') }}/img/widgets-img/readers-opinion-01.png"
                                            alt=""></span>

                                    <div class="post--info">
                                        <div class="title">
                                            <h3 class="h4">{{ $binhluan->noidung }}</h3>
                                        </div>

                                        <ul class="nav meta">
                                            <li><span>@foreach($user as $u)
                                                @if($u->id == $binhluan->id_user)
                                                    {{ $u->name }}
                                                @endif
                                            @endforeach</span></li>
                                            <li><span>16 April 2017</span></li>
                                        </ul>
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
            <!-- List Widgets End -->
        </div>
        <!-- Widget End -->

        <!-- Widget Start -->
        <div class="widget">
            <div class="widget--title" data-ajax="tab">
                <h2 class="h4">Lựa chọn của biên tập viên</h2>

             
            </div>

            <!-- List Widgets Start -->
            <div class="list--widget list--widget-1" data-ajax-content="outer">
                <!-- Post Items Start -->
                <div class="post--items post--items-3">
                    <ul class="nav" data-ajax-content="inner">
                        @foreach($luachon as $luachon)
                        <li>
                            <!-- Post Item Start -->
                            <div class="post--item post--layout-3">
                                <div class="post--img">
                                    <a href="{{ route('bai-viet', ['slug' => $luachon->slug]) }}" class="thumb"><img
                                            src="public/uploads/tintuc/{{ $luachon->hinhanh }}"
                                            alt=""></a>

                                    <div class="post--info">
                                        <ul class="nav meta">
                                            @foreach ($user as $u)
                                            @if ($u->id == $luachon->tacgia)
                                                <li><a href="#">{{ $u->name }}</a>
                                                </li>
                                            @endif
                                            @endforeach
                                            <li><a href="#">{{ $luachon->ngayduyet }}</a></li>
                                        </ul>

                                        <div class="title">
                                            <h3 class="h4"><a href="{{ route('bai-viet', ['slug' => $luachon->slug]) }}"
                                                    class="btn-link">{{ $luachon->title }}</a></h3>
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
            <!-- List Widgets End -->
        </div>
        <!-- Widget End -->
    </div>
</div>