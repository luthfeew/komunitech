<div>
    <div class="card card-body m-0">
        <h3 class="m-0">Komunitasku</h3>
        <hr>

        @forelse ($communities as $item)
            <div class="d-flex flex-row align-items-center border">
                <div class="p-2">
                    <img src="{{ $item->logo }}" width="36" class="rounded-circle">
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
                    <button wire:click="leaveCommunity({{ $item->id }})" type="button"
                        class="rounded-pill btn btn-outline-primary">Keluar</button>
                </div>
            </div>
        @empty
            <p>Belum ada komunitas yang kamu ikuti.</p>
        @endforelse
    </div>
</div>
