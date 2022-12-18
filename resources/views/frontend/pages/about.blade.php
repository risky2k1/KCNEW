@extends('layouts.frontend')
@section('title')
    <title>Kcnews - About</title>
@endsection

@section('main')
<div class="main-content--section pbottom--30">
    <div class="container">
        <!-- Main Content Start -->
        <div class="main--content">
            <!-- Post Item Start -->
            <div class="post--item post--single pd--30-0">
                <div class="row">
                    <div class="col-md-6">
                        <div class="post--video embed-responsive embed-responsive-16by9">
                            <iframe src="https://www.youtube.com/embed/aqz-KE-bpKQ?rel=0&amp;controls=0&amp;showinfo=0&amp;wmode=transparent" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="post--info">
                            <div class="title">
                                <h2 class="h4">It is a long established fact that a reader will be distracted by the readable content</h2>
                            </div>
                        </div>

                        <div class="post--content">
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal making it look like readable english many desktop.</p>

                            <blockquote>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking.</p>

                                <footer>Semyaza, Australia</footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Post Item End -->

            <!-- Info Blocks Start -->
            <div class="info--blocks ptop--30">
                <ul class="nav row">
                    <li class="col-md-3 col-xs-6 col-xxs-12 pbottom--30">
                        <!-- Info Block Start -->
                        <div class="info--block">
                            <div class="icon text--color-1">
                                <i class="fa fa-dashboard"></i>
                            </div>

                            <div class="title">
                                <h3 class="h5">Our Goal</h3>
                            </div>

                            <div class="content">
                                <p>Aliquam quam laudantium suscipit ullam aut perferendis vel dicta blanditiis eligendi ratione consequatur, magni facilis dolor cupiditate et.</p>
                            </div>
                        </div>
                        <!-- Info Block End -->
                    </li>

                    <li class="col-md-3 col-xs-6 col-xxs-12 pbottom--30">
                        <!-- Info Block Start -->
                        <div class="info--block">
                            <div class="icon text--color-1">
                                <i class="fa fa-cog"></i>
                            </div>

                            <div class="title">
                                <h3 class="h5">Our Vission</h3>
                            </div>

                            <div class="content">
                                <p>Aliquam quam laudantium suscipit ullam aut perferendis vel dicta blanditiis eligendi ratione consequatur, magni facilis dolor cupiditate et.</p>
                            </div>
                        </div>
                        <!-- Info Block End -->
                    </li>

                    <li class="col-md-3 col-xs-6 col-xxs-12 pbottom--30">
                        <!-- Info Block Start -->
                        <div class="info--block">
                            <div class="icon text--color-1">
                                <i class="fa fa-diamond"></i>
                            </div>

                            <div class="title">
                                <h3 class="h5">Our Mission</h3>
                            </div>

                            <div class="content">
                                <p>Aliquam quam laudantium suscipit ullam aut perferendis vel dicta blanditiis eligendi ratione consequatur, magni facilis dolor cupiditate et.</p>
                            </div>
                        </div>
                        <!-- Info Block End -->
                    </li>

                    <li class="col-md-3 col-xs-6 col-xxs-12 pbottom--30">
                        <!-- Info Block Start -->
                        <div class="info--block">
                            <div class="icon text--color-1">
                                <i class="fa fa-object-group"></i>
                            </div>

                            <div class="title">
                                <h3 class="h5">Our Objectives</h3>
                            </div>

                            <div class="content">
                                <p>Aliquam quam laudantium suscipit ullam aut perferendis vel dicta blanditiis eligendi ratione consequatur, magni facilis dolor cupiditate et.</p>
                            </div>
                        </div>
                        <!-- Info Block End -->
                    </li>
                </ul>
            </div>
            <!-- Info Blocks End -->
        </div>
        <!-- Main Content End -->
    </div>
</div>

 <!-- Counter Section Start -->
 <div class="counter--section">
    <div class="row gutter--0">
        <div class="col-md-3 col-xs-6 col-xxs-12">
            <!-- Counter Item Start -->
            <div class="counter--item odd bg--color-1">
                <div class="icon">
                    <i class="fa fa-trophy"></i>
                </div>

                <div class="text">
                    <p>Awards</p>
                </div>

                <div class="num">
                    <p><span data-trigger="counterUp">200</span></p>
                </div>
            </div>
            <!-- Counter Item End -->
        </div>

        <div class="col-md-3 col-xs-6 col-xxs-12">
            <!-- Counter Item Start -->
            <div class="counter--item even bg--color-1">
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>

                <div class="text">
                    <p>Global Team Members</p>
                </div>

                <div class="num">
                    <p><span data-trigger="counterUp">600</span></p>
                </div>
            </div>
            <!-- Counter Item End -->
        </div>

        <div class="col-md-3 col-xs-6 col-xxs-12">
            <!-- Counter Item Start -->
            <div class="counter--item odd bg--color-1">
                <div class="icon">
                    <i class="fa fa-copy"></i>
                </div>

                <div class="text">
                    <p>Print Versions</p>
                </div>

                <div class="num">
                    <p><span data-trigger="counterUp">8000</span></p>
                </div>
            </div>
            <!-- Counter Item End -->
        </div>

        <div class="col-md-3 col-xs-6 col-xxs-12">
            <!-- Counter Item Start -->
            <div class="counter--item even bg--color-1">
                <div class="icon">
                    <i class="fa fa-smile-o"></i>
                </div>

                <div class="text">
                    <p>Subscribes</p>
                </div>

                <div class="num">
                    <p><span data-trigger="counterUp">2,000,000</span></p>
                </div>
            </div>
            <!-- Counter Item End -->
        </div>
    </div>
</div>
<!-- Counter Section End -->

<!-- Single Image Section Start -->
<div class="single-img--section ptop--30">
    <div class="container">
        <img src="{{ url('public/frontend') }}/img/about-img/peoples.jpg" alt="" class="center-block">
    </div>
</div>
<!-- Single Image Section End -->
@endsection