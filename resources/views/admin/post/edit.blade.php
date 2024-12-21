@extends('layouts.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Berita</h1>
            </div>

            <div class="section-body">

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-book-open"></i> Edit Berita</h4>
                    </div>

                    <div class="card-body">
                        <form action="" method=""
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>GAMBAR</label>
                            </div>

                            <div class="form-group">
                                <label>JUDUL BERITA</label>
                            </div>

                            <div class="form-group">
                                <label>KATEGORI</label>
                            </div>

                            <div class="form-group">
                                <label>KONTEN</label>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">TAGS</label>
                            </div>

                            <button class="btn btn-primary mr-1 btn-submit" type=""><i class="fa fa-paper-plane"></i>
                                UPDATE</button>
                            <button class="btn btn-warning btn-reset" type=""><i class="fa fa-redo"></i>
                                RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.6.2/tinymce.min.js"></script>
    <script>
        var editor_config = {
            selector: "textarea.content",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            relative_urls: false,
        };

        tinymce.init(editor_config);
    </script>
@stop
