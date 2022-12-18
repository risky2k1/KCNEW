<!DOCTYPE html>
<html lang="en">
    @include('backend.manager.header')
   
    <body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
        <div class="wrapper">
            @include('backend.manager.navbar')
        
            @include('backend.manager.sidebar')
            <div class="content-wrapper">
            @yield('main')
            </div>
            @include('backend.manager.footer')
        </div>
        
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
        @include('backend.manager.link.js')
    </body>
</html>
