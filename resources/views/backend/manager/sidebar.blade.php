<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/home') }}" class="brand-link">
        <img src="{{ url('public/backend') }}/dist/img/KCN.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">KCNews</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ url('public/backend') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                <span class="account-position">@foreach (Auth::user()->roles as $key =>$role)
                    {{ $role->name }}
                   @endforeach    </span>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <form action="{{ url('timkiembaiviet') }}" method="POST" data-widget="sidebar-search">
            @csrf
        <div class="form-inline">
            <div class="input-group" >
                <input class="form-control form-control-sidebar" name="search" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button type="submit" class=" btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div></form>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               @if(auth()->user()->hasRole('Người duyệt bài')|auth()->user()->hasRole('Chủ biên'))
                <li class="nav-item">
                    <a href="{{ url('dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                @endif

                @if(auth()->user()->hasRole('Chủ biên')|auth()->user()->hasRole('Người duyệt bài')|auth()->user()->hasRole('Người viết bài'))
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Tin tức
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @if(auth()->user()->hasRole('Chủ biên'))
                        <li class="nav-item">
                            <a href="{{ route('danhmuc.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh mục</p>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="{{ route('thuoctinhdanhmuc.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thuộc tính danh mục</p>
                            </a>
                        </li>
                        @endif
                        
                        <li class="nav-item">
                            <a href="{{ route('tintuc.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Bài viết</p>
                            </a>
                        </li>
                        
                    </ul>
                   
                </li>
                @endif
                @if(auth()->user()->hasRole('Chủ biên')|auth()->user()->hasRole('Admin'))
                <li class="nav-item">
                    <a href="{{ route('user.index') }}" class="nav-link">
                        <i class="fa fa-users"></i>
                        <p>
                             Người dùng
                        </p>
                    </a>
                </li>
                @endif
                @if(auth()->user()->hasRole('Chủ biên'))
                <li class="nav-item">
                    <a href="{{ route('binhluan.index') }}" class="nav-link">
                        <i class="fa fa-users"></i>
                        <p>
                             Bình luận
                        </p>
                    </a>
                </li>
                @endif
                
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
