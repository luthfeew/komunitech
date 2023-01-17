@extends('layouts.app')

@section('content')
    <div class="container-fluid g-0">
        <div class="d-flex flex-row justify-content-center">
            <div class="p-2" style="width: 976px;">
                <!-- CONTENT -->
                @livewire('user-community')
                <!-- END CONTENT -->
            </div>
        </div>
    </div>
@endsection
