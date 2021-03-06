@extends('layouts.admin')

@section('content')
    <h1>Posts</h1>


    <table class="table">
        <thead>
        <tr>
            <th>id</th>
            <th>Photo</th>
            <th>User</th>
            <th>Category</th>
            <th>Title</th>
            <th>Body</th>
            <th>created_at</th>
            <th>updated_at</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td> <img height="50px" src="{{$post->photo ? $post->photo->file :' http://placehold.it/150x150'}}" alt="User image">
                <td><a href="{{route('posts.edit',$post->id)}}">{{$post->user->name}}</a></td>
                <td>{{$post->category ? $post->category->name :'Uncategorized' }}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>
                <td>{{$post->created_at->diffForHumans()}}</td>
                <td>{{$post->updated_at->diffForHumans()}}</td>
            </tr>

        @endforeach
        </tbody>
    </table>
@stop