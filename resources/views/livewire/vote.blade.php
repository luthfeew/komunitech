<div>
    @guest
        <div>
            <button type="button" class="btn btn-outline-primary"
                style="--bs-btn-padding-y: .1rem; --bs-btn-padding-x: .25rem; --bs-btn-font-size: .75rem;">
                <i class="bi bi-arrow-up"></i>
            </button>
        </div>
        <div class="my-1 mx-2 fw-semibold">{{ $item->votes->sum('vote') }}</div>
        <div>
            <button type="button" class="btn btn-outline-danger"
                style="--bs-btn-padding-y: .1rem; --bs-btn-padding-x: .25rem; --bs-btn-font-size: .75rem;">
                <i class="bi bi-arrow-down"></i>
            </button>
        </div>
    @else
        @php
            $vote = $item->votes->where('user_id', auth()->user()->id)->first()->vote ?? 0;
        @endphp
        <div>
            @if ($vote == 0)
                <button type="button" class="btn btn-outline-primary"
                    style="--bs-btn-padding-y: .1rem; --bs-btn-padding-x: .25rem; --bs-btn-font-size: .75rem;"
                    wire:click="upvote({{ $item->id }})">
                    <i class="bi bi-arrow-up"></i>
                </button>
            @elseif ($vote == 1)
                <button type="button" class="btn btn-primary"
                    style="--bs-btn-padding-y: .1rem; --bs-btn-padding-x: .25rem; --bs-btn-font-size: .75rem;"
                    wire:click="unvote({{ $item->id }})">
                    <i class="bi bi-arrow-up"></i>
                </button>
            @elseif ($vote == -1)
                <button type="button" class="btn btn-outline-primary"
                    style="--bs-btn-padding-y: .1rem; --bs-btn-padding-x: .25rem; --bs-btn-font-size: .75rem;"
                    wire:click="upvote({{ $item->id }})">
                    <i class="bi bi-arrow-up"></i>
                </button>
            @endif
        </div>
        <div class="my-1 mx-2 fw-semibold">{{ $item->votes->sum('vote') }}</div>
        <div>
            @if ($vote == 0)
                <button type="button" class="btn btn-outline-danger"
                    style="--bs-btn-padding-y: .1rem; --bs-btn-padding-x: .25rem; --bs-btn-font-size: .75rem;"
                    wire:click="downvote({{ $item->id }})">
                    <i class="bi bi-arrow-down"></i>
                </button>
            @elseif ($vote == 1)
                <button type="button" class="btn btn-outline-danger"
                    style="--bs-btn-padding-y: .1rem; --bs-btn-padding-x: .25rem; --bs-btn-font-size: .75rem;"
                    wire:click="downvote({{ $item->id }})">
                    <i class="bi bi-arrow-down"></i>
                </button>
            @elseif ($vote == -1)
                <button type="button" class="btn btn-danger"
                    style="--bs-btn-padding-y: .1rem; --bs-btn-padding-x: .25rem; --bs-btn-font-size: .75rem;"
                    wire:click="unvote({{ $item->id }})">
                    <i class="bi bi-arrow-down"></i>
                </button>
            @endif
        </div>
    @endguest
</div>
