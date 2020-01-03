@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Created By</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Creted at</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
        @foreach($thisIsViewPosts as $index => $post)  
        <tr>
        <th scope="row">{{$post['id']}}</th>
        <td>{{$post->user->name}}</td>
            <td>{{$post['title']}}</td>
            <td>{{$post['content']}}</td>
            <td>{{$post['created_at']}}</td>
            <td><a href="{{route('posts.show',['post' => $post['id'] ])}}">View Details</a></td>
          </tr>
          @endforeach

        </tbody>
      </table>
@endsection