<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Carbon\Carbon;
use App\Models\Category;
use Hashids\Hashids;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
				// $hash = new Hashids();
				// $sidepost = Post::with('category', 'user')->latest()->limit(1)->get();
				// $postcuy = Post::with('category', 'user')->orderBy('created_at', 'DESC')->limit(3)->get();
				// $post = Post::with('category', 'user')->orderBy('created_at', 'DESC')->limit(6)->get();
				// return view('index', compact('post', 'sidepost', 'postcuy', 'hash'));
				$hash = new Hashids();
				$latepost = Post::with('category', 'user')->orderBy('created_at', 'DESC')->limit(3)->get();
				$post = Post::with('category', 'user')->latest()->limit(1)->get();
				return view('index2', compact('post', 'latepost', 'hash'));
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
    public function show($id, $slug)
    {
				
				$category = Category::all();
				$allpost = Post::with(['category', 'user'])->orderBy('created_at', 'DESC')->limit(10)->get();
				return view('user-layouts.single-post', compact('category', 'allpost'));
    }

		public function showPost($id, $slug)
		{
				$hash = new Hashids();
				$allpost = Post::with(['category', 'user'])->orderBy('created_at', 'DESC')->limit(10)->get();
				$category = Category::all();
				$post = Post::findOrFail($hash->decodeHex($id));
				return view('user-components.show-post', compact('post', 'category', 'allpost'));
		}

		public function showPost2($id, $slug)
		{
			$hash = new Hashids();
			$post = Post::findOrFail($hash->decodeHex($id));
			$allcategories = Category::with('posts')->orderBy('created_at', 'ASC')->limit(5)->get();
			$allpost = Post::with('category', 'user')->orderBy('created_at', 'ASC')->get();
			return view('user-components.show-post2', compact('post', 'hash', 'allpost', 'allcategories'));
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
