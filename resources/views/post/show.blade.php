@extends('layouts.app')

@section('styles')
    <style>
        .center-image {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .display-comment .display-comment {
            margin-left: 20px
        }
    </style>
@endsection

{{-- @section('js-head')
    <script src="https://cdn.tiny.cloud/1/w6uv1j0u0l6dbkq8yq3s12nakt4kvbz3fz82bxp8xtend2oa/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
@endsection --}}

@section('content')
    <div class="container-fluid g-0">
        <div class="d-flex flex-row justify-content-center">
            <div class="p-2 " style="width: 756px;">
                <!-- POSTINGAN -->
                @livewire('show-posts', ['post_id' => $item->id])
                <!-- END POSTINGAN -->
            </div>
            <div class="p-2 d-none d-lg-block" style="width: 336px;">
                <!-- ABOUT COMMUNITY -->
                @include('components.about-community', ['community' => $item->community])
                <!-- END ABOUT COMMUNITY -->
            </div>
        </div>
    </div>
@endsection

{{-- @section('js-body')
    <script>
        tinymce.init({
            menubar: false,
            height: 200,
            selector: 'textarea#main_comment',
            toolbar: 'undo redo | blocks | bold italic underline strikethrough | link image media table | indent outdent | removeformat',
            content_css: '/vendor/tinymce/myLayout.css'
        });
    </script>
@endsection --}}
