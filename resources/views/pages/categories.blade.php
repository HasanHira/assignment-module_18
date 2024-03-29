@extends ('app')

@section('content')
    <div class="pt-5">
        <div class="container px-5 pb-5">
            <div class="row">

                @foreach ($categories as $category)
                    @foreach ($category->posts as $post)
                        <div class="col-md-4">
                            <div class="post bg-light mx-2 my-4 p-3 rounded-2 border border-dark-subtle">
                                <h3 class="fs-4 fw-bold mb-4 text-capitalize text-success">{{ $post->title }}</h3>
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
