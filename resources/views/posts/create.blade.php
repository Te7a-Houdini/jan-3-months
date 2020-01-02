@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    <form method="POST" action="/posts">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Content</label>
          <input name="content" type="text" class="form-control" id="exampleInputPassword1" >
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Created At</label>
            <input name="created_at" type="text" class="form-control" id="exampleInputPassword1" >
          </div>
     
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection