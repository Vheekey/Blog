<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display all Blog Contents.
     *
     * @param Request $request
     * @return Illuminate\View\View
     */
    public function index(Request $request)
    {
        $blogs = Blog::paginate(5);

        return view('welcome', compact('blogs'));
    }

    /**
     * Create a new Blog.
     *
     * @param Request $request
     * @return Illuminate\View\View
     */
    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
        ]);

        Blog::create($request->all());

        return back()->with('success', 'New Blog Content Created');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Get Admin Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin()
    {
        return view('admin');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
