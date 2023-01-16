<div>
    <div class="card card-body m-0">
        <div class="input-group mb-3">
            <span class="input-group-text">Cari</span>
            <input wire:model="search" type="text" class="form-control" placeholder="kata kunci">
        </div>

        <hr class="mt-0">

        <div class="d-flex flex-row">
            <div class="me-3">
                <button type="button" class="rounded-pill btn btn-primary">Komunitas</button>
            </div>
            <div class="me-3">
                <button type="button" class="rounded-pill btn btn-outline-primary">Postingan</button>
            </div>
            <div>
                <button type="button" class="rounded-pill btn btn-outline-primary">Komentar</button>
            </div>
        </div>
    </div>

    <div class="card card-body mt-2">

        {{-- {{ $communities }} --}}

        @forelse ($communities as $item)
            <div class="d-flex flex-row align-items-center border">
                <div class="p-2">
                    <img src="https://picsum.photos/seed/picsum/40/40" width="36" class="rounded-circle">
                </div>
                <div class="d-flex flex-column flex-grow-1">
                    <div>
                        <span>
                            <a href="{{ url('k/' . $item->slug) }}"
                                class="text-reset text-decoration-none">k/{{ $item->slug }}</a>
                        </span>
                        <span>&#x2022;</span>
                        <span>{{ $item->users->count() }} Member</span>
                    </div>
                    <div>
                        {{ $item->description }}
                    </div>
                </div>
                <div class="p-2">
                    <button type="button" class="rounded-pill btn btn-outline-primary">Gabung</button>
                </div>
            </div>
        @empty
            -
        @endforelse

    </div>
</div>
