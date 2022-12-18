@extends('layouts.app')
@section('title')
    <title>
        Kcnews - Bài viết</title>
@endsection

@section('main')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Bài viết</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Bài viết</li>
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
            @if(auth()->user()->hasRole('Người viết bài'))
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('tintuc.create') }}" class="btn btn-success">Thêm bài viết mới mới</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">STT</th>
                                <th>Tên bài viết</th>
                                <th>Tag</th>
                                <th>Bình luận</th>
                                <th>Trạng thái</th>
                                <th style="width: 40px">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($nguoivietbai as $tin)
                                <tr>
                                    <td>{{$nguoivietbai->firstItem() + $loop -> index }}</td>
                                    <td>{{ $tin->title }}</td>
                                    
                                   
                                    <td>
                                        <p>
                                            @php
                                                $tags = $tin->tag;
                                                $tags = explode(',', $tags);
                                            @endphp
                                            @foreach ($tags as $tag)
                                                <span class="badge bg-primary">{{ $tag }}</span>
                                            @endforeach
                                        </p>
                                    </td>
                                    <td>{{ $tin->tintucComment->count() }}</td>
                                    <td>
                                        @if ($tin->trangthai == 0)
                                            <span class="badge bg-danger">Chờ duyệt</span>
                                        @elseif($tin->trangthai == 1)
                                            <span class="badge bg-primary">Đã được duyệt</span>
                                        @else
                                        <span class="badge bg-warning">Cập nhật</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ route('tintuc.show', ['tintuc' => $tin->id]) }}" type="button" class="btn btn-info"><i
                                                    class="fa fa-eye"></i></a>
                                            <a href="{{ route('tintuc.edit', ['tintuc' => $tin->id]) }}" type="button"
                                                class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                            <button href="" type="button" class="btn btn-danger xoa" id="xoa"><i
                                                    class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <form action="{{ route('tintuc.destroy', ['tintuc' => $tin->id]) }}" id="form-xoa"
                                    class="form-xoa" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button hidden type="submit"></button>

                                </form>
                            @endforeach
                           
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                        {{ $nguoivietbai->render() }}
                    </ul>
                </div>
            </div>
            <!-- /.card -->
            @endif
            @if(auth()->user()->hasRole('Người duyệt bài'))
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">STT</th>
                                <th>Tên bài viết</th>
                                <th>Tác giả</th>
                                <th>Ngày gửi bài</th>
                                <th>Trạng thái</th>
                                <th style="width: 40px">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($nguoiduyetbai))
                            @foreach ($nguoiduyetbai as $tin)
                                <tr>
                                    <td>{{$nguoiduyetbai->firstItem() + $loop -> index }}</td>
                                    <td>{{ $tin->title }}</td>
                                    <td>
                                        @foreach ($user as $u)
                                            @if ($u->id == $tin->tacgia)
                                                {{ $u->name }}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>{{ $tin->ngayguibai }}</td>
                                   
                                    <td>
                                        @if ($tin->trangthai == 0)
                                        <span class="badge bg-danger">Chờ duyệt</span>
                                    @elseif($tin->trangthai == 1)
                                        <span class="badge bg-primary">Đã được duyệt</span>
                                    @else
                                    <span class="badge bg-warning">Cập nhật</span>
                                    @endif
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ route('tintuc.show', ['tintuc' => $tin->id]) }}" type="button" class="btn btn-info"><i
                                                    class="fa fa-eye"></i></a>
                                            
                                    </td>
                                </tr>
                                
                            @endforeach
                            @else
                            <tr>
                                <td></td>
                                <td></td>
                                <td>
                                   
                                </td>
                                <td></td>
                               
                                <td>
                                   
                                </td>
                                <td>
                                    
                                        
                                </td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                        {{ $nguoiduyetbai->render() }}
                    </ul>
                </div>
            </div>

            
            <!-- /.card -->
            @endif

            @if(auth()->user()->hasRole('Chủ biên') || auth()->user()->hasRole('Admin'))
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">STT</th>
                                <th>Tên bài viết</th>
                                <th>Tác giả</th>
                                <th>Chủ biên</th>
                                <th>Ngày gửi bài</th>
                                <th>Trạng thái</th>
                                <th style="width: 40px">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($tintucs as $tin)
                                <tr>
                                    <td>{{$tintucs->firstItem() + $loop -> index }}</td>
                                    <td>{{ $tin->title }}</td>
                                    <td>
                                        @foreach ($user as $u)
                                            @if ($u->id == $tin->tacgia)
                                                {{ $u->name }}
                                            @endif
                                        @endforeach
                                    </td>
                                    
                                    <td>
                                        @foreach ($user as $u)
                                            @if ($tin->tintucCategory->chubien == $u->id)
                                                {{ $u->name }}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>{{ $tin->ngayguibai }}</td>
                                   
                                    <td>
                                        @if ($tin->trangthai == 0)
                                        <span class="badge bg-danger">Chờ duyệt</span>
                                    @elseif($tin->trangthai == 1)
                                        <span class="badge bg-primary">Đã được duyệt</span>
                                    @else
                                    <span class="badge bg-warning">Cập nhật</span>
                                    @endif
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ route('tintuc.show', ['tintuc' => $tin->id]) }}" type="button" class="btn btn-info"><i
                                                    class="fa fa-eye"></i></a>
                                            
                                    </td>
                                </tr>
                                
                            @endforeach
                           
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                        {{ $tintucs ->render() }}
                    </ul>
                </div>
            </div>

            
            <!-- /.card -->
            @endif
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
@section('jsbackend')
    <script>
        $(".xoa").click(function(e) {
            if (confirm('Bạn có chắc muốn xóa danh mục này không ?')) {
                $(".form-xoa").submit();
            }
        });
    </script>
    
@endsection
