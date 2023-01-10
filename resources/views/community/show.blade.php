@extends('layouts.app')

@section('styles')
    <style>
        .banner-image {
            filter: none;
            height: 228px;
            display: block;
        }
    </style>
@endsection

@section('content')
    <div>
        <span class="banner-image"
            style="background: url('{{ $item->banner }}') center center / cover no-repeat rgb(51, 168, 255); filter: none; height: 228px;"></span>
    </div>
    <div class="container">
        <div class="d-flex px-4 pb-2 align-items-center" style="margin-top: -14px">
            <div>
                <img src="{{ $item->logo }}" class="img-fluid rounded-circle" style="border: 4px solid #fff;">
            </div>
            <div class="d-flex mt-3">
                <div class="mx-2">
                    <div class="fw-bold fs-3">
                        k/{{ $item->slug }}
                    </div>
                    <div class="fw-bold">
                        {{ $item->name }}
                    </div>
                </div>
                <div class="mt-1">
                    <button type="button" class="btn btn-outline-primary btn-sm rounded-pill px-4">Gabung</button>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-light">
        <div class="container-fluid g-0">
            <div class="d-flex flex-row justify-content-center">
                <div class="p-2 " style="width: 756px;">
                    <!-- POSTINGAN -->
                    @livewire('show-posts', ['community' => $item])
                    <!-- END POSTINGAN -->
                </div>
                <div class="p-2 d-none d-lg-block" style="width: 336px;">
                    <!-- ABOUT COMMUNITY -->
                    @include('components.about-community', ['community' => $item])
                    <!-- END ABOUT COMMUNITY -->
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js-body')
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            console.log("DOM fully loaded and parsed");
            var main = document.querySelector('main');
            main.classList.remove('py-2');
            main.classList.add('pb-2');
        });
    </script>
@endsection
