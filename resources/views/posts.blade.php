<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>So fresh & so clean, clean</title>
  <!-- Styles -->
  <link href="{{ mix("css/app.css") }}"
        rel="stylesheet" type="text/css"/>
</head>
<body>
  <div class="content">
    <nav class="navbar navbar-expand-md">
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
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                {{ $post->title }} - {{ $post->created_at }}
              </div>
              <div class="card-content">
                {{ $post->body }}
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</body>
</html>