@extends('layouts.app')

@section('js-head')
    <script src="https://cdn.tiny.cloud/1/w6uv1j0u0l6dbkq8yq3s12nakt4kvbz3fz82bxp8xtend2oa/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
@endsection

@section('content')
    <div class="container-fluid g-0">
        <div class="d-flex flex-row justify-content-center">
            <div class="p-2 " style="width: 756px;">
                <!-- MAIN CONTENT -->
                <h5 class="mt-2 fw-semibold">Buat postingan</h5>
                <hr>
                <form action="" method="POST">
                    @csrf
                    <div class="form-floating mb-3">
                        <input name="title" type="text" class="form-control" id="floatingInput" placeholder="judul"
                            required>
                        <label for="floatingInput">Judul</label>
                    </div>
                    <textarea name="body" placeholder="Konten"></textarea>
                    <div class="my-3">
                        <label for="formFile" class="form-label">Gambar (opsional)</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <hr>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-2">
                        <button class="btn btn-primary btn-sm rounded-pill px-5" type="submit">Kirim</button>
                    </div>
                </form>
                <!-- END MAIN CONTENT -->
            </div>
            <div class="p-2 d-none d-lg-block" style="width: 336px;">
                <!-- ABOUT COMMUNITY -->
                @include('components.about-community', ['community' => $community])
                <!-- END ABOUT COMMUNITY -->
            </div>
        </div>
    </div>
@endsection

@section('js-body')
    <script>
        tinymce.init({
            menubar: false,
            height: 200,
            selector: 'textarea',
            toolbar: 'undo redo | blocks | bold italic underline strikethrough | link image media table | indent outdent | removeformat',
            content_css: '/vendor/tinymce/myLayout.css'
        });
    </script>
@endsection
