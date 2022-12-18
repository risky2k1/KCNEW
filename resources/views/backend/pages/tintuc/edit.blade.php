@extends('layouts.app')
@section('title')
    <title>Kcnew - Chỉnh sửa bài viết</title>
@endsection
@section('main')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Chỉnh sửa bài viết</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Bài viết</a></li>
                        <li class="breadcrumb-item active"> Chỉnh sửa bài viết </li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            @if (Session::has('success'))
                <div class="alert alert-info alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-info"></i>{{ Session::get('success') }}</h5>

                </div>
            @endif
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
                    <h3 class="card-title"> Chỉnh sửa bài viết </h3>
                </div>

                <!-- /.card-header -->
                <!-- form start -->
                <form  method="POST"  action="{{ route('tintuc.update',['tintuc'=>$tintuc->id]) }}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label>Tên bài viết <span style="color: red"> *</span></label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        placeholder="Nhập tên bài viết" value="{{ $tintuc->title }}"
                                        onkeyup="ChangeToSlug();">
                                </div>
                                <div class="col">
                                    <label for="exampleInputPassword1">Slug <span style="color: red"> *</span></label>
                                    <input type="text" class="form-control" value="{{ $tintuc->slug }}" id="slug"
                                        name="slug" placeholder="slug">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="examleInput">Tóm tắt (Ngắn) <span style="color: red"> *</span></label>
                                <textarea name="tomtat" class="form-control" style="weight:10px" required>{{ $tintuc->tomtat }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="examleInput" class="">Danh Mục <span style="color: red">
                                            *</span></label>
                                    <select name="category" id="danhmuc" class="form-control chosse danhmuc">
                                        <option value="0" selected>-- Chọn danh mục -- </option>
                                        @foreach ($category as $cat)
                                            <option value="{{ $cat->id }}"
                                                @foreach ($properti as $pro) @if ($tintuc->id_properticategory)
                                                        @if ($pro->id_category == $cat->id)
                                                        selected
                                                        @endif
                                                    @endif @endforeach>
                                                {{ $cat->title }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="col">
                                    <label for="examleInput" class="">Thuộc tính danh Mục <span
                                            style="color: red"> *</span></label>
                                    <select name="properticategory" id="thuoctinh" class="form-control thuoctinh">



                                    </select>

                                </div>

                            </div>
                            <div class="form-group">
                                <label for="examleInput">Thêm tag cho bài viết <span style="color: red"> *</span></label>
                                <input type="text" class="form-control" value="{{ $tintuc->tag }}" name="tag" data-role="tagsinput">
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <label for="examleInput">Thêm hình ảnh <span style="color: red"> *</span></label>
                                    <input type="file" name="hinhanh" class="form-control">
                                    <img src="{{ URL::to('public/uploads/tintuc/'.$tintuc->hinhanh) }}" width="100px" height="100px" alt="">
                                </div>
                                <hr>
                                <div class="col">
                                    <label for="examleInput">Thêm video(Không bắt buộc)</label>
                                    <input type="text" value="{{ $tintuc->video }}" name="video" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="examleInput">Nội dung bài biết <span style="color: red"> *</span></label>
                            <textarea id="summernote1" name="noidung" class="form-control" required>{{ $tintuc->noidung }}</textarea>

                        </div>
                        <input type="hidden" value="{{ $tintuc->tacgia }}" name="tacgia">
                    </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-primary">Cập nhật</button>

            </div>
            </form>
        </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
<script>
    function ChangeToSlug() {
        var title, slug;

        //Lấy text từ thẻ input title 
        title = document.getElementById("title").value;

        //Đổi chữ hoa thành chữ thường
        slug = title.toLowerCase();

        //Đổi ký tự có dấu thành không dấu
        slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
        slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
        slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
        slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
        slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
        slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
        slug = slug.replace(/đ/gi, 'd');
        //Xóa các ký tự đặt biệt
        slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
        //Đổi khoảng trắng thành ký tự gạch ngang
        slug = slug.replace(/ /gi, "-");
        //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
        //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
        slug = slug.replace(/\-\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-/gi, '-');
        slug = slug.replace(/\-\-/gi, '-');
        //Xóa các ký tự gạch ngang ở đầu và cuối
        slug = '@' + slug + '@';
        slug = slug.replace(/\@\-|\-\@|\@/gi, '');
        //In slug ra textbox có id “slug”
        document.getElementById('slug').value = slug;
    }
</script>
@section('jsbackend')
    <script>
        $(document).ready(function() {
            $("#summernote").summernote();
            $("#summernote1").summernote();
        });
    </script>


    <script type="text/javascript">
        $("#danhmuc").change(function(e) {
            var action = $(this).attr('id');
            var madm = $(this).val();
            var _token = $('input[name="_token"]').val();
            var result = '';
            if (action == 'danhmuc') {
                result = 'thuoctinh';
            }
            $.ajax({
                type: "POST",
                url: "{{ url('/select-delivery') }}",
                data: {
                    action: action,
                    madm: madm,
                    _token: _token
                },

                success: function(data) {
                    $('#' + result).html(data);
                }
            });

        });
    </script>

    
@endsection
