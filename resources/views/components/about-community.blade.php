<div class="card mt-2">
    <div class="card-body p-0">
        <div class="d-flex px-3 pb-2">
            <div class="pt-3 fw-semibold">Tentang Komunitas</div>
        </div>
        <div class="p-3">
            <div class="d-flex flex-row align-items-center">
                <div>
                    <img src="{{ $item->community->logo }}" class="img-fluid rounded-circle" style="max-width: 54px">
                </div>
                <div class="ms-2 fs-5 fw-semibold text-break lh-1">
                    <a href="{{ url('k/' . $item->community->slug) }}"
                        class="text-reset text-decoration-none">k/{{ $item->community->slug }}</a>
                </div>
            </div>
            <div class="lh-sm mt-3 text-break">
                This is the official community for Genshin Impact (原神), the latest open-world action RPG
                from HoYoverse. The game features a massive, gorgeous map, an elaborate elemental combat
                system, engaging storyline & characters, co-op game mode, soothing soundtrack, and much more
                for you to explore!
            </div>
            <div class="d-flex mt-2">
                <div>
                    <i class="fa-solid fa-cake-candles"></i>
                </div>
                <div class="ms-2">
                    {{ $item->community->created_at->diffForHumans() }}
                </div>
            </div>
            <hr>
            <div class="d-flex justify-content-center">
                <div class="fw-semibold">{{ $item->community->users->count() }} Member</div>
            </div>
            <hr>
            <div class="d-grid gap-2 fw-semibold">
                <button class="btn btn-outline-primary rounded-pill"
                    style="--bs-btn-hover-color: #0d6efd; --bs-btn-hover-bg: #0d6efd12;" type="button">Joined</button>
                <button class="btn btn-primary rounded-pill" type="button">Create Post</button>
            </div>
        </div>
    </div>
</div>
