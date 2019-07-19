@extends('layouts.app-forward')

@section('title', '{ A C } - Blog')

@section('content')
  <nav class="navbar navbar-expand-md raleway">
    <a class="navbar-brand" href="/">AC</a>

    <div class="navbar-collapse collapse">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="/blog">Blog</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="blog-feed">
    @foreach($posts as $post)
      <blog-post
        :post="{{ $post }}">
      </blog-post>
    @endforeach
  </div>
@endsection