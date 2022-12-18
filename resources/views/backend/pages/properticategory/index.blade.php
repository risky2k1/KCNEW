@extends('layouts.app')
@section('title')
    <title>Kcnews - Thuộc tính danh mục</title>
@endsection

@section('main')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Thuộc tính danh mục</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Thuộc tính danh mục</li>
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
                    <a href="{{ route('thuoctinhdanhmuc.create') }}" class="btn btn-success">Thêm thuộc tính danh mục mới</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">STT</th>
                                <th>Tên Thuộc tính</th>
                                <th>Danh mục</th>
                                <th>Số lượng bài viết</th>


                                <th style="width: 40px">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($properti as $pro)
                                <tr>
                                    <td>{{$properti->firstItem() + $loop -> index }}</td>
                                    <td>{{ $pro->title }}</td>
                                    
                                    <td>
                                        @foreach ($category as $cat)
                                            @if ($cat->id == $pro->id_category)
                                                {{ $cat->title }}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>{{ $pro->propertiTintuc->count() }}</td>
                                    <td>
                                        <div class="btn-group">
                                            
                                            <a href="{{ route('thuoctinhdanhmuc.edit', ['thuoctinhdanhmuc' => $pro->id]) }}" type="button"
                                                class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                <form action="{{ route('thuoctinhdanhmuc.destroy', ['thuoctinhdanhmuc'=>$pro->id]) }}" id="form-xoa" class="form-xoa" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                <button type="submit" class="btn btn-danger xoa" id="xoa"><i
                                                    class="fa fa-trash"
                                                   ></i></button></form>
                                    </td>
                                </tr>
                                
                                    {{-- <button hidden type="submit"></button> --}}
                                   
                                
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                        {{ $properti->render() }}
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

