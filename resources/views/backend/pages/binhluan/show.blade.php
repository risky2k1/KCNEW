@extends('layouts.app')
@section('title')
    <title>Kcnews - Bình luận</title>
@endsection

@section('main')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Bình luận</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Bình luận</li>
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

                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>

                                <th>Người đăng</th>
                                <th>Bình luận</th>
                                <th>Trạng thái</th>
                                <th style="width: 40px">Hành động</th>
                                {{-- 1: bình thường ;  2: bị report --}}



                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($binhluan as $binhluan)
                                <tr>

                                    <td>{{ $binhluan->commentUser->name }}</td>
                                    <td>
                                        {{ $binhluan->noidung }}

                                    </td>
                                    <td>
                                        @if ($binhluan->trangthai == 1)
                                            <span class="badge bg-primary">Bình thường </span>
                                        @else
                                            <span class="badge bg-danger">Bị report</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group">

                                            <a href="{{ route('trolai',['binhluan'=>$binhluan->id]) }}" class="btn btn-success"><i
                                                    class="fa fa-check"></i></a>
                                            <form action="{{ route('binhluan.destroy', ['binhluan' => $binhluan->id]) }}"
                                                id="form-xoa" class="form-xoa" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit"
                                                    onclick="return confirm('Bạn có chắc muốn xóa bình luận này không ?');"
                                                    class="btn btn-danger xoa" id="xoa"><i
                                                        class="fa fa-trash"></i></button>

                                            </form>
                                        </div>
                                    </td>


                                    {{-- <td>Update software</td> --}}

                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
                <div class="card-footer">
                    <a href="{{ route('binhluan.index') }}" type="submit" name="submit" class="btn btn-warning">Quay
                        lại</a>

                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">

                    </ul>
                </div>
            </div>
            <!-- /.card -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection


