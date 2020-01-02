@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Creted at</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
        @foreach($posts as $index => $value)  
        <tr>
        <th scope="row">{{$value['id']}}</th>
            <td>{{$value['title']}}</td>
            <td>{{$value['content']}}</td>
            <td>{{$value['created_at']}}</td>
            <td><a href="{{route('posts.show',['post' => $value['id'] ])}}">View Details</a></td>
          </tr>
          @endforeach

        </tbody>
      </table>
@endsection