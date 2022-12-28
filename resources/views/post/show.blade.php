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
                <div class="card mt-2">
                    <div class="card-body p-0">
                        <div class="d-flex flex-row">
                            <div class="d-none d-sm-flex py-2 px-1 flex-column align-items-center bg-light"
                                style="border-radius: 0.375rem;">
                                {{-- <div>
                                    <button type="button" class="btn btn-outline-primary"
                                        style="--bs-btn-padding-y: .1rem; --bs-btn-padding-x: .25rem; --bs-btn-font-size: .75rem;">
                                        <i class="bi bi-arrow-up"></i>
                                    </button>
                                </div>
                                <div class="my-1 fw-semibold">{{ $item->votes->sum('vote') }}</div>
                                <div>
                                    <button type="button" class="btn btn-outline-danger"
                                        style="--bs-btn-padding-y: .1rem; --bs-btn-padding-x: .25rem; --bs-btn-font-size: .75rem;">
                                        <i class="bi bi-arrow-down"></i>
                                    </button>
                                </div> --}}
                                @livewire('vote')
                            </div>
                            <div class="pt-2 d-flex flex-column flex-grow-1">
                                <div class="mx-2 mb-2 d-flex flex-row align-items-center">
                                    <div>
                                        <img src="{{ $item->community->logo }}" class="img-fluid rounded-circle me-1"
                                            style="max-width: 20px;">
                                    </div>
                                    <div class="d-flex flex-row align-items-center lh-1">
                                        <div>
                                            <a href="{{ url('k/' . $item->community->slug) }}"
                                                class="text-decoration-none">k/{{ $item->community->slug }}</a>
                                        </div>
                                        <div class="mx-1">&#x2022;</div>
                                        <div>
                                            <span>Diposting oleh</span>
                                            <span>
                                                <a href="{{ url('user/' . $item->user->username) }}"
                                                    class="text-decoration-none">u/{{ $item->user->username }}</a>
                                            </span>
                                            <span>{{ $item->created_at->diffForHumans() }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mx-2 mb-2 lh-sm fs-5 fw-semibold text-break">
                                    {{ $item->title }}
                                </div>
                                @if ($item->media->isNotEmpty())
                                    <div>
                                        <img src="{{ $item->media->pluck('url')->first() }}" class="center-image">
                                    </div>
                                @else
                                    <div class="mx-2 mb-2 lh-sm text-break">
                                        {{ $item->body }}
                                    </div>
                                @endif
                                <div class="ps-1 pe-2 d-flex flex-row">
                                    <div class="mb-1 mx-1 d-sm-none d-flex flex-row align-items-center">
                                        <div>
                                            <button type="button" class="btn btn-outline-primary"
                                                style="--bs-btn-padding-y: .1rem; --bs-btn-padding-x: .25rem; --bs-btn-font-size: .75rem;">
                                                <i class="bi bi-arrow-up"></i>
                                            </button>
                                        </div>
                                        <div class="mx-2 fw-semibold">{{ $item->votes->sum('vote') }}</div>
                                        <div>
                                            <button type="button" class="btn btn-outline-danger"
                                                style="--bs-btn-padding-y: .1rem; --bs-btn-padding-x: .25rem; --bs-btn-font-size: .75rem;">
                                                <i class="bi bi-arrow-down"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-light"
                                            style="--bs-btn-padding-x: 0.5rem; --bs-btn-padding-y: 0.2rem; --bs-btn-bg: #FFFFFF; --bs-btn-border-color: #FFFFFF; --bs-btn-font-size: .90rem;">
                                            <i class="fa-regular fa-message"></i>
                                            {{ $item->comments->count() }} Komentar
                                        </button>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-light"
                                            style="--bs-btn-padding-x: 0.5rem; --bs-btn-padding-y: 0.2rem; --bs-btn-bg: #FFFFFF; --bs-btn-border-color: #FFFFFF; --bs-btn-font-size: .90rem;">
                                            <i class="fa-solid fa-share"></i>
                                            Bagikan
                                        </button>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-light"
                                            style="--bs-btn-padding-x: 0.5rem; --bs-btn-padding-y: 0.2rem; --bs-btn-bg: #FFFFFF; --bs-btn-border-color: #FFFFFF; --bs-btn-font-size: .90rem;">
                                            <i class="fa-regular fa-bookmark"></i>
                                            Simpan
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-4">
                            <form action="{{ route('post.store', ['id' => $hashid]) }}" method="POST">
                                @csrf
                                <textarea class="form-control" rows="3" id="comment" name="body" placeholder="Berikan pendapatmu..."
                                    required></textarea>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-2">
                                    <button class="btn btn-primary btn-sm rounded-pill px-5" type="submit">Kirim</button>
                                </div>
                            </form>
                        </div>
                        <hr>
                        <div class="m-4">
                            @if (session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                                    <i class="fa-solid fa-check"></i>
                                    <strong>Komentar berhasil ditambahkan</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            {{-- @include('components.comment', ['comments' => $item->comments, 'post' => $item]) --}}
                            @include('components.comment')
                        </div>
                    </div>
                </div>
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
