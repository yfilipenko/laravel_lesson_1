@extends('layouts.app')

@section('title', 'Create Post')
@section('content')
    <div class="container">
        <h1>Create New Post</h1>
        
        <form method="POST" action="/posts">
            @csrf
            <div class="input-wrap">
                <label for="title">Post Title</label>
                <input type="text" required name="title" id="title">
            </div>
            <div class="input-wrap">
                <label for="author">Post Author</label>
                <input type="text" required name="author" id="author">
            </div>
            <div class="input-wrap">
                <label for="body">Post Content</label>
                <textarea name="body" id="body" required>    
                </textarea>
            </div>
            <button type="submit">Create</button>
        </form>
    </div>
@endsection