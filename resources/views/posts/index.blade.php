@extends("loyauts.head")

@section("main-content")
<div class="bg-primary-subtle min-vh-100 py-5">
    <div class="container-lg py-5">
        <div class="h1 py-3 fw-bold text-center text-info">
            Posts
        </div>
        <div class="row justify-content-center g-4">
            @foreach ($posts as $post)
            <div class="col-lg-4 col-md-6 col-12 mb-2">
                <div class="card bg-white border border-1 rounded-top-4 shadow-sm p-1 h-100">
                    <div class="card-body ">
                        <div class="position-relative">
                            <img src="{{asset('/img/blog-post-2.jpg')}}" alt="image" class="img-fluid rounded-top-4 w-100 h-100">

                            <div class="position-absolute top-0 start-0 m-3 bg-info rounded-2 fw-semibold text-white px-3 py-2">
                                new
                            </div>
                        </div>
                        <div class="p-3">
                            <div class="h3 fw-semibold py-2">
                                {{ $post->id }}. {{ $post->title }}
                            </div>
                            <div class="h5">
                                {{ $post->content }}
                            </div>
                            <div class="align-items-center">
                                <i class="bi-person-circle text-secondary h5 me-2"></i>{{ $post->author->name }} {{ $post->author->surname }} <i class="bi-calendar-fill text-secondary h5 mx-2"></i> {{ $post->date }}
                            </div>
                            <div class="align-items-center h5">
                                <i class="bi-eye text-secondary align-items-center h4 mx-1"></i> {{ $post->view_count }}
                                <i class="bi-heart text-secondary align-items-center h4 mx-1"></i> {{ $post->like_count }}
                                <i class="bi-calendar text-secondary align-items-center h4 mx-1"></i> {{ $post->created_at->format('d.m.Y') }}
                                <a href="/posts/show/{{$post->id}}" class="a">More></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <div class="my-4">
            {{ $posts->links('pagination::bootstrap-5') }}
        </div>
    </div>
</div>
@endsection