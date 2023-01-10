<div>
    @foreach ($posts as $item)
        <div class="card mt-2">
            <div class="card-body p-0">
                <div class="d-flex flex-row">
                    <div class="d-none d-sm-flex py-2 px-1 flex-column align-items-center bg-light"
                        style="border-radius: 0.375rem;">
                        <!-- BAGIAN VOTE -->
                        @include('livewire.partials.vote')
                        <!-- END BAGIAN VOTE -->
                    </div>
                    <div class="pt-2 d-flex flex-column">
                        <div class="mx-2 mb-2 d-flex flex-row align-items-center">
                            @if (!$is_community)
                                <div>
                                    <img src="{{ $item->community->logo }}" class="img-fluid rounded-circle me-1"
                                        style="max-width: 20px;">
                                </div>
                            @endif
                            <div class="d-flex flex-row align-items-center lh-1">
                                @if (!$is_community)
                                    <div>
                                        <a href="{{ url('k/' . $item->community->slug) }}"
                                            class="text-decoration-none">k/{{ $item->community->slug }}</a>
                                    </div>
                                    <div class="mx-1">&#x2022;</div>
                                @endif
                                <div>
                                    <span>Diposting oleh</span>
                                    <span>
                                        <a href="{{ url('user/' . $item->user->username) }}"
                                            class="text-decoration-none">u/{{ $item->user->username }}</a>
                                    </span>
                                    <span>{{ $item->created_at->diffForHumans() }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="mx-2 mb-2 lh-sm fs-5 fw-semibold text-break">
                            <a href="{{ url('k/' . $item->community->slug . '/post/' . $item->hashid . '/' . $item->slug) }}"
                                class="text-reset text-decoration-none">{{ $item->title }}</a>
                        </div>
                        @if ($item->media->isNotEmpty())
                            <div class="media-container">
                                <img src="{{ $item->media->pluck('url')->first() }}" class="img-fluid">
                                @if (!$is_post)
                                    <div class="text">see full image</div>
                                @endif
                            </div>
                        @else
                            <div class="mx-2 mb-2 lh-sm text-break">
                                <a href="{{ url('k/' . $item->community->slug . '/post/' . $item->hashid . '/' . $item->slug) }}"
                                    class="text-reset text-decoration-none">{!! Str::limit($item->body, 300) !!}</a>
                            </div>
                        @endif
                        <div class="ps-1 pe-2 d-flex flex-row">
                            <div class="mb-1 mx-1 d-sm-none d-flex flex-row align-items-center">
                                <!-- BAGIAN VOTE -->
                                @include('livewire.partials.vote')
                                <!-- END BAGIAN VOTE -->
                            </div>
                            <div>
                                <button type="button" class="btn btn-light"
                                    style="--bs-btn-padding-x: 0.5rem; --bs-btn-padding-y: 0.2rem; --bs-btn-bg: #FFFFFF; --bs-btn-border-color: #FFFFFF; --bs-btn-font-size: .90rem;">
                                    <i class="fa-regular fa-message"></i>
                                    {{ $item->comments->count() }} Komentar
                                </button>
                            </div>
                            <div>
                                <button type="button" class="btn btn-light"
                                    style="--bs-btn-padding-x: 0.5rem; --bs-btn-padding-y: 0.2rem; --bs-btn-bg: #FFFFFF; --bs-btn-border-color: #FFFFFF; --bs-btn-font-size: .90rem;">
                                    <i class="fa-solid fa-share"></i>
                                    Bagikan
                                </button>
                            </div>
                            <div>
                                <button type="button" class="btn btn-light"
                                    style="--bs-btn-padding-x: 0.5rem; --bs-btn-padding-y: 0.2rem; --bs-btn-bg: #FFFFFF; --bs-btn-border-color: #FFFFFF; --bs-btn-font-size: .90rem;">
                                    <i class="fa-regular fa-bookmark"></i>
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                @if ($is_post)
                    <div class="m-4">
                        <form action="{{ route('comment.store', ['id' => $item->hashid]) }}" method="POST">
                            @csrf
                            <textarea class="form-control" rows="5" id="comment" name="body" placeholder="Berikan pendapatmu..."
                                required></textarea>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-2">
                                <button class="btn btn-primary btn-sm rounded-pill px-5" type="submit">Kirim</button>
                            </div>
                        </form>
                    </div>
                    <hr>
                    <div class="m-4">
                        @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                                <i class="fa-solid fa-check"></i>
                                <strong>Komentar berhasil ditambahkan</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <!-- BAGIAN KOMENTAR -->
                        @livewire('show-comment', ['post_id' => $item->id])
                        <!-- END BAGIAN KOMENTAR -->
                    </div>
                @endif
            </div>
        </div>
    @endforeach
</div>
