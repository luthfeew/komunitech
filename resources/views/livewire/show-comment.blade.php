<div>
    @foreach ($comments as $item)
        <div class="display-comment">
            <div class="d-flex">
                <div class="d-flex flex-column">
                    <div class="">
                        <img src="https://i.pravatar.cc/50" class="rounded-circle" style="width: 28px;">
                    </div>
                    <div class="d-flex justify-content-center flex-fill">
                        <div class="vr"></div>
                    </div>
                </div>
                <div class="d-flex flex-column flex-grow-1 ms-2 my-1">
                    <div class="">
                        <span>u/{{ $item->user->username }}</span>
                        <span class="mx-1">&#x2022;</span>
                        <span>{{ $item->created_at->diffForHumans() }}</span>
                        {{-- <span class="mx-1">&#x2022;</span>
                        <span>updated at</span> --}}
                    </div>
                    <div class="my-2">
                        <div class="lh-sm">
                            {!! $item->body !!}
                        </div>
                    </div>
                    <div class="">
                        <button type="button" class="btn btn-light"
                            style="--bs-btn-padding-x: 0.5rem; --bs-btn-padding-y: 0.2rem; --bs-btn-bg: #FFFFFF; --bs-btn-border-color: #FFFFFF; --bs-btn-font-size: .90rem;"
                            data-bs-toggle="collapse" data-bs-target="#reply_{{ $item->id }}" aria-expanded="false"
                            aria-controls="reply_{{ $item->id }}">
                            <i class="fa-regular fa-message"></i>
                            Balas
                        </button>
                        <div class="collapse" id="reply_{{ $item->id }}">
                            <div class="card card-body">
                                <form
                                    action="{{ route('comment.reply', ['post_id' => $item->post_id, 'comment_id' => $item->id]) }}"
                                    method="POST">
                                    @csrf
                                    <textarea class="form-control" rows="3" id="comment" name="body" placeholder="Berikan pendapatmu..."
                                        required></textarea>
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-2">
                                        <button class="btn btn-primary btn-sm rounded-pill px-5"
                                            type="submit">Balas</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('livewire.show-comment', ['comments' => $item->replies])
        </div>
    @endforeach
</div>
