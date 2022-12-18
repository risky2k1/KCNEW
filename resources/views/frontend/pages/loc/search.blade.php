@extends('layouts.frontend')
@section('title')
    <title>Kcnew - {{ $title }}</title>
@endsection
@section('main')
    <!-- Main Breadcrumb Start -->
    <div class="main--breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="home-1.html" class="btn-link"><i class="fa fm fa-home"></i>Home</a></li>
                <li class="active"><span>{{ $title }}</span></li>
            </ul>
        </div>
    </div>
    <!-- Main Breadcrumb End -->

    <!-- Main Content Section Start -->
    <div class="main-content--section pbottom--30">
        <div class="container">
        

           
                
           

            <div class="row">
                <!-- Main Content Start -->
                <div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
                    <div class="sticky-content-inner">
                        <div class="row">
                       
                               

                            <!-- Books and Magazine Start -->
                            <div class="col-md-12 ptop--30 pbottom--30">
                                <!-- Post Items Title Start -->
                                <div class="post--items-title" data-ajax="tab">
                                    <h2 class="h4">{{ $tintuc->count() }} {{ $title }} {{ $s }}</h2>

                                   
                                </div>
                                <!-- Post Items Title End -->

                                <!-- Post Items Start -->
                                <div class="post--items post--items-2" data-ajax-content="outer">
                                    <ul class="nav" data-ajax-content="inner">
                                        @foreach($tintuc as $tintuc)
                                        <li>
                                            <!-- Post Item Start -->
                                            <div class="post--item">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="post--img">
                                                            <a href="{{ route('bai-viet',['slug'=>$tintuc->slug]) }}" class="thumb"><img src="public/uploads/tintuc/{{ $tintuc->hinhanh }}" alt=""></a>
                                                            <a href="{{ url('properti/'.$tintuc->tintucProperti->slug) }}" class="cat">{{ $tintuc->tintucProperti->title }}</a>
                                                            {{-- <a href="#" class="icon"><i class="fa fa-eye"></i></a> --}}
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">{{ $tintuc->tintucUser->name }}</a></li>
                                                                <li><a href="#">{{ $tintuc->ngayduyet }}</a></li>
                                                                <li><span><i class="fa fm fa-eye"></i>{{ $tintuc->luotxem }}</span></li>
                                                            </ul>
                                                            

                                                            <div class="title">
                                                                <h2 class="h3" style="color:black"><a href="{{ route('bai-viet',['slug'=>$tintuc->slug]) }}" class="btn-link">{{ $tintuc->title }}.</a></h3>
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