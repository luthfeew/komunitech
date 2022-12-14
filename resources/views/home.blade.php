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
                <div class="card mt-2">
                    <div class="card-body p-0">
                        <div class="d-flex flex-row">
                            <div class="d-none d-sm-flex py-2 px-1 flex-column align-items-center bg-light"
                                style="border-radius: 0.375rem;">
                                <div>
                                    <button type="button" class="btn btn-outline-primary"
                                        style="--bs-btn-padding-y: .1rem; --bs-btn-padding-x: .25rem; --bs-btn-font-size: .75rem;">
                                        <i class="bi bi-arrow-up"></i>
                                    </button>
                                </div>
                                <div class="my-1 fw-semibold">6969</div>
                                <div>
                                    <button type="button" class="btn btn-outline-danger"
                                        style="--bs-btn-padding-y: .1rem; --bs-btn-padding-x: .25rem; --bs-btn-font-size: .75rem;">
                                        <i class="bi bi-arrow-down"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="pt-2 d-flex flex-column">
                                <div class="mx-2 mb-2 d-flex flex-row align-items-center">
                                    <div>
                                        <img src="https://picsum.photos/40" class="img-fluid rounded-circle me-1"
                                            style="max-width: 20px;">
                                    </div>
                                    <div class="d-flex flex-row align-items-center lh-1">
                                        <div>k/indonesia</div>
                                        <div class="mx-1">&#x2022;</div>
                                        <div>
                                            <span>Posted by</span>
                                            <span>u/entasd</span>
                                            <span>10 jam yang lalu</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mx-2 mb-2 lh-sm fs-5 fw-semibold text-break">
                                    If every Archon had to fight all the vision wielders of their respective
                                    elements, how would they do?
                                </div>
                                <div class="ps-1 pe-2 d-flex flex-row">
                                    <div class="mb-1 mx-1 d-sm-none d-flex flex-row align-items-center">
                                        <div>
                                            <button type="button" class="btn btn-outline-primary"
                                                style="--bs-btn-padding-y: .1rem; --bs-btn-padding-x: .25rem; --bs-btn-font-size: .75rem;">
                                                <i class="bi bi-arrow-up"></i>
                                            </button>
                                        </div>
                                        <div class="mx-2 fw-semibold">6969</div>
                                        <div>
                                            <button type="button" class="btn btn-outline-danger"
                                                style="--bs-btn-padding-y: .1rem; --bs-btn-padding-x: .25rem; --bs-btn-font-size: .75rem;">
                                                <i class="bi bi-arrow-down"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-light"
                                            style="--bs-btn-padding-x: 0.5rem; --bs-btn-padding-y: 0.2rem; --bs-btn-bg: #FFFFFF; --bs-btn-border-color: #FFFFFF; --bs-btn-font-size: .90rem;">
                                            <i class="fa-regular fa-message"></i>
                                            495 Comments
                                        </button>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-light"
                                            style="--bs-btn-padding-x: 0.5rem; --bs-btn-padding-y: 0.2rem; --bs-btn-bg: #FFFFFF; --bs-btn-border-color: #FFFFFF; --bs-btn-font-size: .90rem;">
                                            <i class="fa-solid fa-share"></i>
                                            Share
                                        </button>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-light"
                                            style="--bs-btn-padding-x: 0.5rem; --bs-btn-padding-y: 0.2rem; --bs-btn-bg: #FFFFFF; --bs-btn-border-color: #FFFFFF; --bs-btn-font-size: .90rem;">
                                            <i class="fa-regular fa-bookmark"></i>
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body p-0">
                        <div class="d-flex flex-row">
                            <div class="d-none d-sm-flex py-2 px-1 flex-column align-items-center bg-light"
                                style="border-radius: 0.375rem;">
                                <div>
                                    <button type="button" class="btn btn-outline-primary"
                                        style="--bs-btn-padding-y: .1rem; --bs-btn-padding-x: .25rem; --bs-btn-font-size: .75rem;">
                                        <i class="bi bi-arrow-up"></i>
                                    </button>
                                </div>
                                <div class="my-1 fw-semibold">6969</div>
                                <div>
                                    <button type="button" class="btn btn-outline-danger"
                                        style="--bs-btn-padding-y: .1rem; --bs-btn-padding-x: .25rem; --bs-btn-font-size: .75rem;">
                                        <i class="bi bi-arrow-down"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="pt-2 d-flex flex-column">
                                <div class="mx-2 mb-2 d-flex flex-row align-items-center">
                                    <div>
                                        <img src="https://picsum.photos/40" class="img-fluid rounded-circle me-1"
                                            style="max-width: 20px;">
                                    </div>
                                    <div class="d-flex flex-row align-items-center lh-1">
                                        <div>k/indonesia</div>
                                        <div class="mx-1">&#x2022;</div>
                                        <div>
                                            <span>Posted by</span>
                                            <span>u/entasd</span>
                                            <span>10 jam yang lalu</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mx-2 mb-2 lh-sm fs-5 fw-semibold text-break">
                                    If every Archon had to fight all the vision wielders of their respective
                                    elements, how would they do?
                                </div>
                                <div class="media-container">
                                    <img src="https://picsum.photos/700/1000" class="img-fluid" alt="...">
                                    <div class="text">see full image</div>
                                </div>
                                <div class="ps-1 pe-2 d-flex flex-row">
                                    <div class="mb-1 mx-1 d-sm-none d-flex flex-row align-items-center">
                                        <div>
                                            <button type="button" class="btn btn-outline-primary"
                                                style="--bs-btn-padding-y: .1rem; --bs-btn-padding-x: .25rem; --bs-btn-font-size: .75rem;">
                                                <i class="bi bi-arrow-up"></i>
                                            </button>
                                        </div>
                                        <div class="mx-2 fw-semibold">6969</div>
                                        <div>
                                            <button type="button" class="btn btn-outline-danger"
                                                style="--bs-btn-padding-y: .1rem; --bs-btn-padding-x: .25rem; --bs-btn-font-size: .75rem;">
                                                <i class="bi bi-arrow-down"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-light"
                                            style="--bs-btn-padding-x: 0.5rem; --bs-btn-padding-y: 0.2rem; --bs-btn-bg: #FFFFFF; --bs-btn-border-color: #FFFFFF; --bs-btn-font-size: .90rem;">
                                            <i class="fa-regular fa-message"></i>
                                            495 Comments
                                        </button>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-light"
                                            style="--bs-btn-padding-x: 0.5rem; --bs-btn-padding-y: 0.2rem; --bs-btn-bg: #FFFFFF; --bs-btn-border-color: #FFFFFF; --bs-btn-font-size: .90rem;">
                                            <i class="fa-solid fa-share"></i>
                                            Share
                                        </button>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-light"
                                            style="--bs-btn-padding-x: 0.5rem; --bs-btn-padding-y: 0.2rem; --bs-btn-bg: #FFFFFF; --bs-btn-border-color: #FFFFFF; --bs-btn-font-size: .90rem;">
                                            <i class="fa-regular fa-bookmark"></i>
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body p-0">
                        <div class="d-flex flex-row">
                            <div class="d-none d-sm-flex py-2 px-1 flex-column align-items-center bg-light"
                                style="border-radius: 0.375rem;">
                                <div>
                                    <button type="button" class="btn btn-outline-primary"
                                        style="--bs-btn-padding-y: .1rem; --bs-btn-padding-x: .25rem; --bs-btn-font-size: .75rem;">
                                        <i class="bi bi-arrow-up"></i>
                                    </button>
                                </div>
                                <div class="my-1 fw-semibold">6969</div>
                                <div>
                                    <button type="button" class="btn btn-outline-danger"
                                        style="--bs-btn-padding-y: .1rem; --bs-btn-padding-x: .25rem; --bs-btn-font-size: .75rem;">
                                        <i class="bi bi-arrow-down"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="pt-2 d-flex flex-column">
                                <div class="mx-2 mb-2 d-flex flex-row align-items-center">
                                    <div>
                                        <img src="https://picsum.photos/40" class="img-fluid rounded-circle me-1"
                                            style="max-width: 20px;">
                                    </div>
                                    <div class="d-flex flex-row align-items-center lh-1">
                                        <div>k/indonesia</div>
                                        <div class="mx-1">&#x2022;</div>
                                        <div>
                                            <span>Posted by</span>
                                            <span>u/entasd</span>
                                            <span>10 jam yang lalu</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mx-2 mb-2 lh-sm fs-5 fw-semibold text-break">
                                    If every Archon had to fight all the vision wielders of their respective
                                    elements, how would they do?
                                </div>
                                <div class="mx-2 mb-2 lh-sm text-break">
                                    My current set up is Nilou DMC Nahida and Barbara as the main proc of Bloom. Im using
                                    4pc Gilded dreams on Barbara and my Bloom reaches 32-34k per bloom. Should I farm for
                                    4pc Flowers of Paradise Lost instead of using 4pc Gilded dreams?
                                </div>
                                <div class="ps-1 pe-2 d-flex flex-row">
                                    <div class="mb-1 mx-1 d-sm-none d-flex flex-row align-items-center">
                                        <div>
                                            <button type="button" class="btn btn-outline-primary"
                                                style="--bs-btn-padding-y: .1rem; --bs-btn-padding-x: .25rem; --bs-btn-font-size: .75rem;">
                                                <i class="bi bi-arrow-up"></i>
                                            </button>
                                        </div>
                                        <div class="mx-2 fw-semibold">6969</div>
                                        <div>
                                            <button type="button" class="btn btn-outline-danger"
                                                style="--bs-btn-padding-y: .1rem; --bs-btn-padding-x: .25rem; --bs-btn-font-size: .75rem;">
                                                <i class="bi bi-arrow-down"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-light"
                                            style="--bs-btn-padding-x: 0.5rem; --bs-btn-padding-y: 0.2rem; --bs-btn-bg: #FFFFFF; --bs-btn-border-color: #FFFFFF; --bs-btn-font-size: .90rem;">
                                            <i class="fa-regular fa-message"></i>
                                            495 Comments
                                        </button>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-light"
                                            style="--bs-btn-padding-x: 0.5rem; --bs-btn-padding-y: 0.2rem; --bs-btn-bg: #FFFFFF; --bs-btn-border-color: #FFFFFF; --bs-btn-font-size: .90rem;">
                                            <i class="fa-solid fa-share"></i>
                                            Share
                                        </button>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-light"
                                            style="--bs-btn-padding-x: 0.5rem; --bs-btn-padding-y: 0.2rem; --bs-btn-bg: #FFFFFF; --bs-btn-border-color: #FFFFFF; --bs-btn-font-size: .90rem;">
                                            <i class="fa-regular fa-bookmark"></i>
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-2 d-none d-lg-block" style="width: 336px;">
                <div class="card mt-2">
                    <div class="card-body lh-sm">
                        <p>Your personal Komunitech frontpage. Come here to check in with your favorite communities.</p>

                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="button">Buat Postingan</button>
                            <button class="btn btn-outline-primary" style="--bs-btn-hover-color: #0d6efd; --bs-btn-hover-bg: #0d6efd12;" type="button">Buat Komunitas</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
