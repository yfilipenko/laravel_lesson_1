@extends('layouts.app')
@section('title', 'Edit Post')
@section('content')
    <div class="container">
        <h1>Edit Post "{{$post->title}}"</h1>
        
        <form method="POST" action="/posts/{{$post->id}}">
            @csrf
            @method('PUT')
            <div class="input-wrap">
                <label for="title">Post Title</label>
                <input type="text" value="{{$post->title}}" required name="title" id="title">
            </div>
            <div class="input-wrap">
                <label for="author">Post Author</label>
                <input type="text"value="{{$post->author}}" required name="author" id="author">
            </div>
            <div class="input-wrap">
                <label for="body">Post Content</label>
                <textarea name="body" id="body" required>{{$post->body}}</textarea>
            </div>
            <button type="submit">Update</button>
        </form>
    </div>
@endsection