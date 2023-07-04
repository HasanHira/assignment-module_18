@extends('app')

@section('content')
    <div class="pt-5">
        <div class="container px-5">
            <div class="row gx-5 justify-content-between align-items-center">

                <div class="row">
                    <div class="col-12 bg-warning-subtle">
                        <h3 class="card-title my-4 text-center fw-bold">All Posts</h3>
                    </div>
                </div>

                <div class="row">

                    @foreach ($posts as $post)
                        <div class="col-md-6">
                            <div class="row bg-light mx-2 my-4 p-3 rounded-2 border border-dark-subtle">
                                <div class="col-12">
                                    <div class="post">
                                        <div class="d-flex justify-between">
                                            <div class="col-4 mx-2">
                                                <img class="img-fluid" src="{{ $post->post_thumb }}" alt="">
                                            </div>
                                            <div class="col-8">
                                                <h3 class="text-uppercase fs-4 fw-bold lh-1 mb-4">{{ $post->title }}</h3>
                                                <p class="lh-sm mb-3">{{ $post->excerpt }}</p>
                                                <span class="bg-info px-3 py-1 fs-6 text-light">{{ $post->category->name }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </div>
    </div>
@endsection
