<?php

namespace App\Http\Controllers;

use App\Models\MyPost;
use Illuminate\Http\Request;

class MyPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $myPosts = MyPost::all();
        return view('posts.index', compact('myPosts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $myPost = new MyPost;
        $myPost->title = $request->title;
        $myPost->author = $request->author;
        $myPost->body = $request->body;
        $myPost->save();
        
        return redirect('/myposts');
    }

    /**
     * Display the specified resource.
     */
    public function show(MyPost $myPost)
    {
        return view('posts.show', compact('myPost'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MyPost $myPost)
    {
        return view('posts.edit', compact('myPost'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MyPost $myPost)
    {
        $myPost->title = $request->title;
        $myPost->author = $request->author;
        $myPost->body = $request->body;
        $myPost->save();
        
        return redirect('/myposts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MyPost $myPost)
    {
        $myPost->delete();
        return redirect('/myposts');
    }
}
