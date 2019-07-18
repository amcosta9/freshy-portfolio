@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Create Blog</div>

          <div class="card-body">
            <form action="/create" method="POST">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Sweet Ass Blog Post">
              </div>
              <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" name="body" rows="3"></textarea>
              </div>
              <button class="btn btn-primary" type="submit">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection