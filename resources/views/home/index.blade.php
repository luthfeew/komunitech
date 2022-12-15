@extends('layouts.app')

@section('styles')
    <style>
        .media-container {
            max-height: 512px;
            overflow: hidden;
            margin: 0px auto;
            position: relative;
        }

        .media-container .text {
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .5px;
            line-height: 24px;
            text-transform: uppercase;
            background-color: rgba(80, 85, 87, .8);
            border-radius: 4px;
            bottom: 16px;
            color: #fff;
            line-height: 32px;
            position: absolute;
            text-align: center;
            text-decoration: none;
            width: 320px;
            left: 50%;
            transform: translate(-50%);
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid g-0">
        <div class="d-flex flex-row justify-content-center">
            <div class="p-2" style="width: 664px;">
                <!-- POSTINGAN -->
                @livewire('show-posts')
                <!-- END POSTINGAN -->
            </div>
            <div class="p-2 d-none d-lg-block" style="width: 336px;">
                <div class="card mt-2">
                    <div class="card-body lh-sm">
                        <p>Your personal Komunitech frontpage. Come here to check in with your favorite communities.</p>

                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="button">Buat Postingan</button>
                            <button class="btn btn-outline-primary"
                                style="--bs-btn-hover-color: #0d6efd; --bs-btn-hover-bg: #0d6efd12;" type="button">Buat
                                Komunitas</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        window.isLoading = false
        window.onscroll = ev => {
            // Check scroll position
            if ((window.innerHeight + window.scrollY + 100) >= document.body.offsetHeight) {
                // Check loading flag
                if (window.isLoading) {
                    return true
                }
                // Load more data
                window.livewire.emit('load-more');
                // Set the flag to disable loading
                window.isLoading = true;
            }
        };
        // To reset the isLoading flag we'll emit an event from the Livewire component to the browser
        window.addEventListener('loading-complete', event => {
            window.isLoading = false;
        })
    </script>
@endsection
