@extends('layouts.app')
@section('title')
    <title>Kcnews - Người dùng</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection

@section('main')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Người dùng</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Người dùng</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            @if (Session::has('success'))
                <div class="alert alert-info alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-info"></i>{{ Session::get('success') }}</h5>

                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('user.create') }}" class="btn btn-success">Thêm người dùng mới</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Họ và tên</th>
                                <th>Email</th>
                                <th>vai trò</th>


                                <th style="width: 40px">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $us)
                                <tr>
                                    <td>{{$user->firstItem() + $loop -> index }}</td>
                                    <td>{{ $us->name }}</td>
                                    <td>{{ $us->email }}</td>
                                    <td>
                                        @foreach ($us->roles as $key => $role)
                                            {{ $role->name }}
                                        @endforeach
                                    </td>

                                    <td>
                                        <div class="btn-group">
                                            <a href="" type="button" class="btn btn-info"><i
                                                    class="fa fa-eye"></i></a>
                                            <a href="{{ route('user.edit', ['user' => $us->id]) }}" type="button"
                                                class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                            <button data-url="{{ route('user.destroy', ['user' => $us->id]) }}"
                                                type="button" class="btn btn-danger btn-xoa" id="xoa"><i
                                                    class="fa fa-trash" data-target="#delete"
                                                    data-toggle="modal"></i></button>
                                    </td>
                </div>
                @endforeach


                </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
                {{ $user->render() }}
            </div>
        </div>
        <!-- /.card -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
@section('jsbackend')
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" type="text/javascript"
        charset="utf-8" async defer></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script>
        $(".btn-xoa").click(function(e) {
            var url = $(this).attr('data-url');
            if (confirm('Bạn có chắc muốn xóa người dùng này không ?')) {
                $.ajax({
                    type: "delete",
                    url: url,
                    data: {
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        window.location.reload()
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        //xử lý lỗi tại đây
                    }
                })
            }

        });
    </script>
@endsection
