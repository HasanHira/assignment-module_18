<nav class="navbar shadow-sm sticky-top navbar-expand-lg navbar-light bg-white py-1">
    <div class="container px-5">
        <a class="navbar-brand" href="{{ url('/') }}"><img src="{{asset('assets/img/a18logo.png')}}" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                <li class="nav-item"><a class="nav-link" href="{{ route('posts') }}">Home</a></li>
                {{-- <li class="nav-item"><a class="nav-link" href="{{ route('categoryPosts', 3) }}">Post</a></li> --}}
                {{-- <li class="nav-item"><a class="nav-link" href="{{ route('categories') }}">Category</a></li> --}}
            </ul>
        </div>
    </div>
</nav>
