<?php

$xemnhieu = DB::table('tintucs')
    ->orderBy('luotxem', 'DESC')
    ->take(4)
    ->get();

$user = DB::table('users')->get();
?>

<div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" data-sticky-content="true">
    <div class="sticky-content-inner">
        <!-- Widget Start -->
        <div class="widget">
            <!-- Ad Widget Start -->
            <div class="ad--widget">
                <div class="row">
                    <div class="col-sm-12">
                        <a href="https://mwc.com.vn/products/giay-sandal-nu-mwc-nusd--2887?c=N%C3%82U">
                            <img src="{{ url('public/frontend') }}/img/ads-img/300x250_banner_mwc.jpg" alt="">
                        </a>
                    </div>

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
            <div class="widget--title">
                <h2 class="h4">Kết nối với chúng tôi</h2>
                <i class="icon fa fa-share-alt"></i>
            </div>

            <!-- Social Widget Start -->
            <div class="social--widget style--2">
                <ul class="nav row gutter--20">
                    <li class="col-md-12 facebook">
                        <a href="https://www.facebook.com/ngoccam651">
                            <span class="icon">
                                <i class="fa fa-facebook"></i>
                                <span>Share</span>
                            </span>

                            <span class="text">
                                <span>Facebook</span>
                                <span>3.12 k</span>
                            </span>
                        </a>
                    </li>

                    <li class="col-md-12 twitter">
                        <a href="#">
                            <span class="icon">
                                <i class="fa fa-twitter"></i>
                                <span>Tweet</span>
                            </span>

                            <span class="text">
                                <span>Twitter</span>
                                <span>869</span>
                            </span>
                        </a>
                    </li>

                    <li class="col-md-12 google-plus">
                        <a href="#">
                            <span class="icon">
                                <i class="fa fa-google-plus"></i>
                                <span>Share</span>
                            </span>

                            <span class="text">
                                <span>Google+</span>
                                <span>639</span>
                            </span>
                        </a>
                    </li>

                   
                </ul>
            </div>
            <!-- Social Widget End -->
        </div>
        <!-- Widget End -->

        <!-- Widget Start -->
        <div class="widget">
            <div class="widget--title">
                <h2 class="h4">Nhận tin tức mới</h2>
                <i class="icon fa fa-envelope-open-o"></i>
            </div>

            <!-- Subscribe Widget Start -->
            <div class="subscribe--widget">
                <div class="content">
                    <p>Đăng ký bản tin của chúng tôi để nhận tin tức mới nhất, tin tức phổ biến và cập nhật độc quyền.
                    </p>
                </div>

                <form
                    action="https://themelooks.us13.list-manage.com/subscribe/post?u=79f0b132ec25ee223bb41835f&id=f4e0e93d1d"
                    method="post" name="mc-embedded-subscribe-form" target="_blank" data-form="mailchimpAjax">
                    <div class="input-group">
                        <input type="email" name="EMAIL" placeholder="E-mail address" class="form-control"
                            autocomplete="off" required>

                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-lg btn-default active"><i
                                    class="fa fa-paper-plane-o"></i></button>
                        </div>
                    </div>

                    <div class="status"></div>
                </form>
            </div>
            <!-- Subscribe Widget End -->
        </div>
        <!-- Widget End -->

        <!-- Widget Start -->
        <div class="widget">
            <div class="widget--title">
                <h2 class="h4">Tin tức nổi bật</h2>
                <i class="icon fa fa-newspaper-o"></i>
            </div>

            <!-- List Widgets Start -->
            <div class="list--widget list--widget-1">
                <!-- Post Items Start -->
                <div class="post--items post--items-3" data-ajax-content="outer">
                    <ul class="nav" data-ajax-content="inner">
                        @foreach ($xemnhieu as $xuhuong)
                            <li>
                                <!-- Post Item Start -->
                                <div class="post--item post--layout-3">
                                    <div class="post--img">
                                        <a href="{{ url('/bai-viet-' . $xuhuong->slug) }}" class="thumb"><img
                                                src="public/uploads/tintuc/{{ $xuhuong->hinhanh }}" alt=""></a>

                                        <div class="post--info">
                                            <ul class="nav meta">
                                                @foreach ($user as $u)
                                                    @if ($u->id == $xuhuong->tacgia)
                                                        <li><a href="#">{{ $u->name }}</a>
                                                        </li>
                                                    @endif
                                                @endforeach
                                                <li><a href="#">{{ $xuhuong->ngayduyet }}</a></li>
                                            </ul>

                                            <div class="title">
                                                <h3 class="h4"><a href="{{ url('/' . $xuhuong->slug) }}"
                                                        class="btn-link">{{ $xuhuong->title }}</a></h3>
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
            <!-- List Widgets End -->
        </div>
        <!-- Widget End -->

        <!-- Widget Start -->
        <div class="widget">
            <div class="widget--title">
                <h2 class="h4">Quảng cáo</h2>
                <i class="icon fa fa-bullhorn"></i>
            </div>

            <!-- Ad Widget Start -->
            <div class="ad--widget">
                <a href="https://mwc.com.vn/products/giay-sandal-nu-mwc-nusd--2887?c=N%C3%82U">
                    <img src="{{ url('public/frontend') }}/img/ads-img/300x250_banner_mwc2.jpg" alt="">
                </a>
            </div>
            <!-- Ad Widget End -->
        </div>
        <!-- Widget End -->
    </div>
</div>
