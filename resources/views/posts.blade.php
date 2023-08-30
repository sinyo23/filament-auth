@extends('layouts.main')

@section('container')
  <h1 class="text-center mt-3 mb-3">{{ $title }}</h1>

  @if ($posts->count())
    <div class="card mb-3">
      <img src="{{ asset('storage/' . $posts[0]->thumbnail) }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
      <div class="card-body text-center">
        <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
        <p>
          <small class="text-muted">By.Admin in <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}</small>
          </p>
          
        <p class="card-text">{!! $posts[0]->excerpt() !!}</p>
        
        <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-primary">Read More</a>
        
      </div>
    </div>
    
    <div class="row">
      @foreach ($posts->skip(1) as $post)
      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="position-absolute px-3 py-2 rounded fw-bold" style="background-color: rgba(0, 0, 0, 0.7)"><a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a></div>
           <a href="posts/{{ $post->slug }}" class="text-decoration-none">
             <img src="{{ asset('storage/' . $post->thumbnail) }}" class="card-img-top" alt="{{ $post->category->name }}">
           </a>
          <div class="card-body">
            <a href="posts/{{ $post->slug }}" class="text-decoration-none">
              <h5 class="card-title text-center">{{ $post->title }}</h5>
            </a>
              <p>
                <small class="text-muted">By. Admin {{ $post->created_at->diffForHumans() }}</small>
              </p>
              <p class="card-text">{!! $post->excerpt() !!}</p>
          </div>
        </div>
      </div>
       @endforeach
    </div>
   
   @else
    <p class="text-center fs-4">No Post Found.</p>
   @endif
   
   {{-- <div class="d-flex justify-content-center"> --}}
{{--      {{ $posts->links() }} --}}
{{--    </div> --}}

@endsection