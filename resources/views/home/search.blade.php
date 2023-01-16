@extends('layouts.app')

@section('content')
    <div class="container-fluid g-0">
        <div class="d-flex flex-row justify-content-center">
            <div class="p-2" style="width: 976px;">
                <!-- CONTENT -->
                @livewire('home-search')
                <!-- END CONTENT -->
            </div>
            {{-- <div class="p-2 d-none d-lg-block" style="width: 336px;">
                <!-- SIDEBAR -->
                @include('components.home-sidebar')
                <!-- END SIDEBAR -->
            </div> --}}
        </div>
    </div>
@endsection
