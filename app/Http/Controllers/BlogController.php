<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('welcome');
        $blog_data = [];
        $blog_data = Blog::all();
        return view('welcome',['blog_data' =>$blog_data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addpost');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $blog = new Blog;
        $blog->title = $request->title;
        $blog->description = $request->desc;
        $blog->save();
        return redirect(route("blog.index"))->with('status','A new post has been successfully created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $single_Data = [];
        $single_Data = Blog::find($id);
        return view('postdetails',['single_data' =>$single_Data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
