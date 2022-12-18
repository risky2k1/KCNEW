@extends('layouts.app')
@section('title')
    <title>Kcnew - Thuộc tính danh mục</title>
@endsection
@section('main')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Thêm thuộc tính danh mục</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Thuộc tính danh mục</a></li>
                        <li class="breadcrumb-item active">Thêm thuộc tính danh mục</li>
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
                    <h3 class="card-title">Thêm thuộc tính danh mục</h3>
                </div>

                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="{{ route('thuoctinhdanhmuc.store') }}">

                    @csrf
                    <div class="card-body">
                        <div class="form-group">

                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label>Tên thuộc tính</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        placeholder="Nhập tên thuộc tính" onkeyup="ChangeToSlug();">

                                </div>
                                <div class="col">
                                    <label for="exampleInputPassword1">Slug</label>
                                    <input type="text" class="form-control" id="slug" name="slug" placeholder="slug">
                                </div>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="row">

                                <label for="examleInput">Danh mục</label>
                                <select name="category" id="danhmuc" class="form-control">
                                    <option value="0" selected>-- Chọn danh mục -- </option>
                                    @foreach ($category as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->title }}</option>
                                    @endforeach
                                </select>

                            </div>

                        </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" name="submit" class="btn btn-primary">Thêm</button>

                    </div>
                </form> <button id="btnthem" type="submit" name="submit" value="1" class="btn btn-outline-info"><i class="mdi mdi-save"
                        ></i> Lưu và tiếp tục thêm</button>
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
    <script type="text/javascript">
        $("#btnthem").click(function(e) {
            var title = $("#title").val();
            var slug = $("#slug").val();
            var danhmuc = $("#danhmuc").val();
            var _token = $('input[name="_token"]').val();
           
            $.ajax({
                type: "POST",
                url: "{{ url('tieptucthem') }}",
                data: { title:title, slug:slug, danhmuc:danhmuc, _token:_token },
               
                success: function (data) {
                    $('#success').html(data);
                }
            });




        });
    </script>
@endsection
