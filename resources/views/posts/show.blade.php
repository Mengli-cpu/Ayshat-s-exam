@extends("loyauts.head")

@section("main-content")
<div class="container-lg my-5">
    <div class="row g-4 justify-content-center">
        <div class="col-lg-1 d-none d-lg-block">
            <div class="d-flex flex-column align-items-center gap-3 sticky-top" style="top: 100px;">
                <a href="#" class="btn btn-outline-primary rounded shadow-sm"><i class="bi h2 bi-facebook"></i></a>
                <a href="#" class="btn btn-outline-info rounded shadow-sm"><i class="bi h2 bi-twitter"></i></a>
                <a href="#" class="btn btn-outline-danger rounded shadow-sm"><i class="bi h2 bi-instagram"></i></a>
                <a href="#" class="btn btn-outline-primary rounded shadow-sm"><i class="bi h2 bi-linkedin"></i></a>
                <a href="/posts" class="btn btn-outline-primary rounded shadow-sm"><i class="bi bi-arrow-left"></i></a>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                <div class="card-body p-4 p-md-5">
                    <span class="badge bg-danger mb-3 px-3 py-2 text-uppercase">Travel</span>
                    <h1 class="display-6 fw-bold mb-3">{{ $post->id }}. {{ $post->title }}</h1>

                    <div class="text-muted mb-4 small">
                        <i class="bi bi-person-circle me-1"></i> {{ $post->author_id }}
                        <span class="mx-2">|</span>
                        <i class="bi bi-calendar3 me-1"></i> 4 weeks ago
                    </div>

                    <p class="lead text-secondary mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit amet voluptatibus at totam dolorum.
                    </p>
                    <p>
                        {{ $post->content }}
                    </p>

                    <p class="text-muted lh-lg">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus voluptatum neque odit incidunt magnam aperiam illo.
                        <a href="#" class="text-primary text-decoration-none fw-semibold">Read more...</a>
                    </p>

                    <button class="btn btn-primary btn-lg w-100 mt-4 rounded-pill fw-bold shadow-sm">
                        Continue Reading <i class="bi bi-arrow-right ms-2"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm rounded-4 mb-4">
                <div class="card-body p-4">
                    <h4 class="fw-bold mb-4 border-start border-primary border-4 ps-3">Topics</h4>

                    <div class="list-group list-group-flush">
                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center border-0 px-3 py-3">
                            <span class="fw-semibold text-secondary"><i class="bi bi-airplane me-2 text-danger"></i> TRAVEL</span>
                            <span class="badge bg-danger-subtle text-danger rounded-pill px-3">12</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center border-0 px-3 py-3">
                            <span class="fw-semibold text-secondary"><i class="bi bi-egg-fried me-2 text-warning"></i> FOOD & DRIVING</span>
                            <span class="badge bg-warning-subtle text-warning rounded-pill px-3">15</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center border-0 px-3 py-3">
                            <span class="fw-semibold text-secondary"><i class="bi bi-controller me-2 text-info"></i> ENTERTAINMENT</span>
                            <span class="badge bg-info-subtle text-info rounded-pill px-3">13</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-body p-4">
                    <h4 class="fw-bold mb-4 border-start border-primary border-4 ps-3">Trending Now</h4>

                    <div class="d-flex align-items-center mb-4 gap-3">
                        <div class="position-relative flex-shrink-0">
                            <img src="/img/blog-post-2.jpg" class="rounded-3 shadow-sm" style="width: 80px; height: 80px; object-fit: cover;" alt="img">
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-1 fw-bold">How to travel with low budget</h6>
                            <span class="text-danger small fw-bold">Travel</span>
                        </div>
                        <span class="badge bg-light text-dark rounded-circle border">15</span>
                    </div>

                    <div class="d-flex align-items-center mb-4 gap-3">
                        <div class="position-relative flex-shrink-0">
                            <img src='/img/lifestyle.jpg' class="rounded-3 shadow-sm" style="width: 80px; height: 80px; object-fit: cover;" alt="img">
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-1 fw-bold">Modern lifestyle tips</h6>
                            <span class="text-success small fw-bold">Lifestyle</span>
                        </div>
                        <span class="badge bg-light text-dark rounded-circle border">22</span>
                    </div>

                    <button class="btn btn-outline-primary w-100 rounded-pill fw-semibold">View All Topics</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
