<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ==== Document Title ==== -->
    <title>Kcnews - Coming soon</title>
    
    <!-- ==== Document Meta ==== -->
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">

    @include('frontend.manager.link.css')
</head>
<body>

    <!-- Preloader Start -->
    <div id="preloader">
        <div class="preloader bg--color-1--b" data-preloader="1">
            <div class="preloader--inner"></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Coming Soon Section Start -->
        <div class="coming-soon--section pd--100-0" data-bg-img="{{ url('public/frontend') }}/img/coming-soon-img/bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-md-offset-5 col-sm-8 col-sm-offset-4 col-xs-10 col-xs-offset-1 col-xxs-12">
                        <!-- Coming Soon Content Start -->
                        <div class="coming-soon--content">
                            <div class="logo">
                                <img src="{{ url('public/frontend') }}/img/coming-soon-img/logo.png" alt="">
                            </div>

                            <div class="title">
                                <h1 class="h2">Launching Soon!</h1>
                            </div>

                            <div class="countdown" data-countdown="2017/12/31"></div>

                            <div class="sub-title">
                                <h2 class="h4">Get me notified when site goes live</h2>
                            </div>

                            <div class="content">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy.</p>
                            </div>

                            <!-- Subscribe Widget Start -->
                            <div class="subscribe--widget">
                                <form action="https://themelooks.us13.list-manage.com/subscribe/post?u=79f0b132ec25ee223bb41835f&id=f4e0e93d1d" method="post" name="mc-embedded-subscribe-form" target="_blank" data-form="mailchimpAjax">
                                    <div class="input-group">
                                        <input type="email" name="EMAIL" placeholder="E-mail address" class="form-control" autocomplete="off" required>

                                        <div class="input-group-btn">
                                            <button type="submit" class="btn btn-lg btn-primary">Notify Me</button>
                                        </div>
                                    </div>

                                    <div class="status"></div>
                                </form>
                            </div>
                            <!-- Subscribe Widget End -->

                            <div class="social">
                                <p>Follow us on below social media</p>

                                <ul class="nav">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Coming Soon Content End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Coming Soon Section End -->
    </div>

</body>
@include('frontend.manager.link.js')
</html>
