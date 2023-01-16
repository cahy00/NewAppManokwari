<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Carbon\Carbon;
use App\Models\Category;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $post = Post::with(['category'])->get();
        // $post = Post::skip(0)->take(3)->get();
        // $post = Post::orderBy('created_at', 'DESC')->limit(3)->get();
				$sidepost = Post::orderBy('created_at', 'DESC')->limit(1)->get();
				$postcuy = Post::orderBy('created_at', 'DESC')->limit(3)->get();
				// $trending = Post::with('category')->orderBy('title', 'ASC')->limit(5)->get();
				// $sidepost = Post::with('category', 'user')->whereDay('created_at', date('m'))->limit(1)->get();
				$post = Post::with('category', 'user')->orderBy('created_at', 'DESC')->limit(3)->get();
				// $postcuy = Post::with('category', 'user')->whereYear('created_at', date('Y'))->limit(3)->get();
				return view('index', compact('post', 'sidepost', 'postcuy'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
		 * public function show(Post $post)
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
				$category = Category::all();
				$allpost = Post::with(['category', 'user'])->orderBy('created_at', 'DESC')->limit(10)->get();
				return view('user-layouts.single-post', compact('post', 'category', 'allpost'));
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
