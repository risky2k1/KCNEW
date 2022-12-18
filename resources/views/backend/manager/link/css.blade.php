
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="{{ url('public/backend') }}/plugins/fontawesome-free/css/all.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="{{ url('public/backend') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="{{ url('public/backend') }}/dist/css/adminlte.min.css">
<link rel="stylesheet" href="{{ url('public/backend') }}/dist/css/tagsinput.css">
<!-- summernote -->
<link rel="stylesheet" href="{{ url('public/backend') }}/plugins/summernote/summernote-bs4.min.css">
<!-- CodeMirror -->
<link rel="stylesheet" href="{{ url('public/backend') }}/plugins/codemirror/codemirror.css">
<link rel="stylesheet" href="{{ url('public/backend') }}/plugins/codemirror/theme/monokai.css">
<!-- SimpleMDE -->
<link rel="stylesheet" href="{{ url('public/backend') }}/plugins/simplemde/simplemde.min.css">


{{-- AJAX --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" charset="utf-8">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
