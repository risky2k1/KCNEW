@extends('layouts.app')
@section('title')
    <title>Kcnew - Chi tiết bài viết</title>
@endsection
@section('main')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Chi tiết viết</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Bài viết</a></li>
                        <li class="breadcrumb-item active">Chi tiết viết</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            
                <span id="success">
                    

                </span>
            
            @if ($errors->any())
                <div class="alert alert-warning alert-dismissible">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Chi tiết viết</h3>
                </div>

                    <div class="card-body">
                        <img src="{{ URL::to('public/uploads/tintuc/'.$tin->hinhanh) }}" width="100%" height="450px" alt="">
                        <h4>{{ $tin->title }}</h4>
                        <span>@foreach($user as  $u)
                            @if($tin->tacgia == $u->id)
                            Tác giả: {{ $u->name }}
                            @endif
                        @endforeach</span>
                        <br>
                        <span>Ngày gửi bài: {{ $tin->ngayguibai }}</span>
                        <div>
                            <p>{!! $tin->noidung !!}</p>
                        </div>
                    </div>

            </div>
            <!-- /.card-body -->
            @if(auth()->user()->hasRole('Người duyệt bài')|| auth()->user()->hasRole('Chủ biên') ||auth()->user()->hasRole('Admin'))
            <div class="card-footer">
                <button id="duyet" href="" onclick="return confirm('bạn có chắc duyệt bài viết này không?')" type="submit" name="submit" class="btn btn-primary">Duyệt</button>
                <a href="{{ url('tuchoi/'.$tin->id) }}" onclick="return confirm('bạn có chắc từ chối bài viết này không?')" type="submit" name="submit" class="btn btn-danger">Từ chối</a>
                <a href="{{ route('tintuc.index') }}" type="submit" name="submit" class="btn btn-warning">Quay lại</a>

            </div>
            @endif
            @if(auth()->user()->hasRole('Người viết bài') )
            <div class="card-footer">
                <a href="{{ route('tintuc.index') }}" type="submit" name="submit" class="btn btn-warning">Quay lại</a>

            </div>
            @endif
        </div>
        </div>
    </section>
    <!-- /.content -->
@endsection

@section('jsbackend')
    <script type="text/javascript">
        $("#duyet").click(function (e) { 
            var mabaiviet = $(this).attr('id');
            var _token  = $('input[name="_token"]').val();
           
            $.ajax({
                type: "POST",
                url: "{{ url('duyet/'.$tin->id) }}",
                data: {mabaiviet:mabaiviet ,_token:_token},
                
                success: function (data) {
                    $('#success').html(data);
                }
            });
            
        });
    </script>
@endsection

