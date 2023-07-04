@extends('app')

@section('content')
    <div class="pt-5">
        <div class="container px-5 pb-5">
            <div class="row">
                <div class="col-md-12 bg-warning-subtle mb-4">
                    <h3 class="card-title my-2 text-center fw-bold">Posts by Category</h3>
                </div>
                @foreach ($categories as $category)
                    <div class="col-md-12">
                        <h3 class="text-center mb-4 fs-3 fw-bold text-success"><span class="text-uppercase px-2 py-1 mx-3 fs-4 fw-bold bg-success-subtle">Category Name: </span> {{ $category->name }}</h3>
                    </div>

                    @foreach ($category->posts as $post)
                        <div class="col-md-6">
                            <div class="post bg-light mx-2 my-4 p-3 rounded-2 border border-dark-subtle">
                                <h3 class="fs-3 fw-bold mb-4">{{ $post->title }}</h3>
                                <img class="img-fluid rounded-3 mb-4" src="{{ $post->post_thumb }}" alt="">
                                <p class="fs-5 lh-2">{{ $post->description }}</p>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
@endsection
