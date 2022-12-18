@extends('layouts.app')
@section('title')
    <title>Kcnew - Thêm bài viết</title>

@endsection
@section('main')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Thêm bài viết</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Bài viết</a></li>
                        <li class="breadcrumb-item active">Thêm bài viết mới</li>
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
                    <h3 class="card-title">Thêm bài viết mới</h3>
                </div>

                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="{{ route('tintuc.store') }}" enctype="multipart/form-data" id="formtao">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label>Tên bài viết <span style="color: red"> *</span></label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        placeholder="Nhập tên bài viết" onkeyup="ChangeToSlug();">
                                </div>
                                <div class="col">
                                    <label for="exampleInputPassword1">Slug <span style="color: red"> *</span></label>
                                    <input type="text" class="form-control" id="slug" name="slug" placeholder="slug">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">  
                                        <label for="examleInput">Tóm tắt (Ngắn) <span style="color: red"> *</span></label>
                                        <textarea id="tomtat" name="tomtat" class="form-control" style="weight:10px" required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col"> 
                                    <label for="examleInput" class="">Danh Mục <span style="color: red"> *</span></label>
                                    <select name="category" id="danhmuc" class="form-control chosse danhmuc">
                                        <option value="0" selected>-- Chọn danh mục -- </option>
                                        @foreach ($category as $cat)
                                            <option value="{{ $cat->id }}">{{ $cat->title }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="col">
                                    <label for="examleInput" class="">Thuộc tính danh Mục <span style="color: red"> *</span></label>
                                    <select name="properticategory" id="thuoctinh" class="form-control thuoctinh">
                                       
                                       

                                    </select>
                                    
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="examleInput">Thêm tag cho bài viết <span style="color: red"> *</span></label>
                                <input type="text" class="form-control" name="tag" id="tag" data-role="tagsinput">
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col">         
                                    <label for="examleInput">Thêm hình ảnh <span style="color: red"> *</span></label>
                                    <input type="file" id="hinhanh" name="hinhanh" class="form-control">
                                </div>
                                <hr>
                                <div class="col">      
                                    <label for="examleInput">Thêm video(Không bắt buộc)</label>
                                    <input type="text" id="video" name="video" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="examleInput">Nội dung bài biết <span style="color: red"> *</span></label>
                            <textarea id="summernote1" name="noidung" class="form-control" required></textarea>

                        </div>
                        <input type="hidden" id="tacgia" value="{{ Auth::user()->id }}" name="tacgia">
                    </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer clearfix">
                <button type="submit" name="submit" class="btn btn-primary">Thêm</button>
                <button type="submit" name="submit" id="tao" value="1" class="btn btn-outline-info"><i class="mdi mdi-save"></i>
                    Lưu và tiếp tục thêm</button>
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
        $("#danhmuc").change(function (e) { 
            var action  = $(this).attr('id');
            var madm  = $(this).val();
            var _token  = $('input[name="_token"]').val();
            var result = '';
            if(action =='danhmuc'){
                result = 'thuoctinh';
            }
            $.ajax({
                type: "POST",
                url: "{{ url('/select-delivery') }}",
                data: {action:action , madm:madm,_token:_token},
               
                success: function (data) {
                    $('#' + result).html(data);
                }
            });
            
        });
    </script>

    <script>
        $("#tao").click(function (e) { 
            
            var title= $("#title").val();
            var slug= $("#slug").val();
            var tomtat= $("#tomtat").val();
            var danhmuc= $("#danhmuc").val();
            var thuoctinh= $("#thuoctinh").val();
            var tag= $("#tag").val();
            var hinhanh= $("#hinhanh").val();
            var video= $("#video").val();
            var noidung= $("#summernote1").val();
            var tacgia= $("#tacgia").val();
            var _token  = $('input[name="_token"]').val();

            $.ajax({
                type: "POST",
                url: "{{ url('/taobaiviet') }}",
                data: {title:title, slug:slug, tomtat:tomtat,danhmuc:danhmuc,thuoctinh:thuoctinh,tag:tag,hinhanh:hinhanh,video:video,noidung:noidung,_token:_token,tacgia:tacgia },
                
                success: function (data) {
                    $('#success').html(data);
                }
            });
        });
    </script>
   
@endsection
