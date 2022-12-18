<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ==== Document Title ==== -->
    <title>Kcnews - 404</title>
    
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
        <!-- 404 Section Start -->
        <div class="f0f--section pd--100-0" data-bg-img="{{ url('public/frontend') }}/img/404-img/bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-6 col-sm-offset-0 col-xs-8 col-xs-offset-2 col-xxs-12">
                        <!-- 404 Content Start -->
                        <div class="f0f--content">
                            <div class="title">
                                <h1 class="h1">404</h1>
                            </div>

                            <div class="sub-title">
                                <h2 class="h5">Ooops ! It's looking like you may have taken a wrong turn. you can search instead.</h2>
                            </div>

                            <!-- Search Widget Start -->
                            <div class="search--widget">
                                <form action="#" data-form="validate">
                                    <div class="input-group">
                                        <input type="search" name="search" placeholder="Search..." class="form-control" required>

                                        <div class="input-group-btn">
                                            <button type="submit" class="btn-link"><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Search Widget End -->

                            <div class="note">
                                <p>Get back to home by cliccking th Back to Home button.</p>
                            </div>

                            <div class="action">
                                <a href="home-1.html" class="btn btn-primary">Back To Home</a>
                            </div>
                        </div>
                        <!-- 404 Content End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- 404 Section End -->
    </div>


</body>
   @include('frontend.manager.link.js')
</html>
