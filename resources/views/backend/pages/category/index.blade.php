@extends('layouts.app')
@section('title')
    <title>Kcnews - Danh mục</title>
@endsection

@section('main')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh mục</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Danh mục</li>
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
                    <a href="{{ route('danhmuc.create') }}" class="btn btn-success">Thêm danh mục mới</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">STT</th>
                                <th>Tên danh mục</th>
                                <th>Người quản lý</th>
                                <th>Các thuộc tính</th>
                                {{-- <th>Số lượng thuộc tính</th> --}}

                                <th style="width: 40px">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($category as $cat)
                                <tr>
                                    <td>{{$category->firstItem() + $loop -> index }}</td>
                                    <td>{{ $cat->title }}</td>
                                    <td>
                                        @foreach ($user as $u)
                                            @if ($u->id == $cat->chubien)
                                                {{ $u->name }}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($properti as $pro)
                                            @if ($pro->id_category == $cat->id)
                                                <span class="badge bg-primary">{{ $pro->title }}</span>
                                            @endif
                                        @endforeach

                                    </td>
                                    {{-- <td>Update software</td> --}}
                                    <td>
                                        <div class="btn-group">

                                            <a href="{{ route('danhmuc.edit', ['danhmuc' => $cat->id]) }}" type="button"
                                                class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                            
                                                    <form action="{{ route('danhmuc.destroy', ['danhmuc' => $cat->id]) }}" id="form-xoa"
                                                        class="form-xoa" method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button  type="submit" onclick="return confirm('Bạn có chắc muốn xóa danh mục này không ?');" class="btn btn-danger xoa" id="xoa"><i
                                                            class="fa fa-trash"></i></button>
                    
                                                    </form>
                                    </td>
                                </tr>
                               
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                        {{ $category->render() }}
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