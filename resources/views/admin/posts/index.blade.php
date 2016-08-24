@extends('layouts.admin')



@section('content')


    <h1>ALL POSTS</h1>


    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>PHOTO</th>
            <th>POST BY</th>
            <th>CATEGORY</th>
            <th>TITLE</th>
            <th>POST CONTENT</th>
            <th>CREATED</th>
            <th>UPDATED</th>
        </tr>
        </thead>

        <tbody>

        @if($posts)

        @foreach($posts as $post)

        <tr>
            <td>{{$post->id}}</td>
            <td><img height="50" src="{{$post->photo_id ? $post->photo->path : 'http://placehold.it/400x400'}}" alt=""></td>
            <td>{{$post->user->name}}</td>
            <td>{{$post->category ? $post->category->name : 'Uncategorized'}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->body}}</td>
            <td>{{$post->created_at->diffForHumans()}}</td>
            <td>{{$post->updated_at->diffForHumans()}}</td>
        </tr>

        @endforeach

        @endif

        </tbody>

    </table>


@endsection