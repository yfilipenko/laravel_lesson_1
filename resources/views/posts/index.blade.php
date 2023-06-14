@extends('layouts.app')

@section('title', 'Posts List')
@section('content')
    <div class="container">
        <h1>Posts List</h1>
        @foreach($posts as $post)
            <div class="card">
                <h2>{{$post->title}}</h2>
                <p>{{$post->author}}</p>
                <p>{{$post->body}}</p>
                <a href="/posts/{{$post->id}}">Show</a>
                <a href="/posts/{{$post->id}}/edit">Edit</a>
                <form method="POST" action="/posts/{{$post->id}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </div>
        @endforeach
        <a href="/posts/create" class="bg-slate-400">Create New Post</a>
    </div>
@endsection