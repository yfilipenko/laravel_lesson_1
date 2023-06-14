@extends('layouts.app')

@section('title', 'Show Post')
@section('content')
    <div class="container">
        <div class="card">
            <h2>{{$post->title}}</h2>
            <p>{{$post->author}}</p>
            <p>{{$post->body}}</p>
            <a href="/posts/{{$post->id}}/edit">Edit</a>
            <form method="POST" action="/posts/{{$post->id}}">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
        <a href="/posts" class="bg-slate-400">Back to Post List</a>
    </div>
@endsection