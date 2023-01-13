@extends('layouts.app')

@section('content')
    <div class="container-fluid g-0">
        <div class="d-flex flex-row justify-content-center">
            <div class="p-2 " style="width: 756px;">
                <div class="card card-body">
                    <!-- MAIN CONTENT -->
                    <h5 class="mt-2 fw-semibold">Buat komunitas baru</h5>
                    <hr>
                    <form action="{{ route('community.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama</label>
                            <div class="input-group">
                                <span class="input-group-text">k/</span>
                                <input name="name" type="text" class="form-control" placeholder="nama_komunitas"
                                    maxlength="21" required>
                            </div>
                            <div id="emailHelp" class="form-text">
                                Nama komunitas termasuk kapitalisasi tidak dapat diubah.
                                Nama tidak boleh memiliki spasi.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi (opsional)</label>
                            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"
                                placeholder="Deskripsikan komunitasmu..."></textarea>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-block">Buat Komunitas</button>
                        </div>
                    </form>
                    <!-- END MAIN CONTENT -->
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js-body')
@endsection
