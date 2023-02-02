<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use Hashids\Hashids;
use Illuminate\Support\Str;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::with(['post'])->get();
				$allpost = Post::with(['category', 'user'])->orderBy('created_at', 'DESC')->limit(10)->get();
				return view('user-components.category-section', compact('category', 'allpost'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
				$category = Category::orderBy('name', 'ASC')->get();
        return view('category.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
			try{
				$validate = $request->validate([
					'name' => 'required',
					'slug' => 'uniq:categories'
				]);
	
				$category = Category::create([
					'name' => $request->name,
					'slug' => Str::slug($request->name)
				]);

				return redirect('/admin/category/create')->with('success', 'Data Berhasil ditambahkan');

			}catch(\Exception $e){
				return redirect('/admin/category/create')->with('error', 'Data Gagal ditambahkan');

			}



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $slug)
    {
			// $category = Category::all();
			// $categoryShow = Category::findOrFail($hash->decodeHex($id))->get();
			// $allpost = Post::with(['category', 'user'])->orderBy('created_at', 'DESC')->limit(10)->get();
			// return view('user-components.category-section', compact('categoryShow', 'hash', 'allpost', 'category'));
			
			// $category = Category::findOrFail(1)->post->title;
			// $post = Post::first()->category->name;
				$hash = new Hashids();
				$post = Category::findOrFail($hash->decodeHex($id));
				$allpost = Post::with('category', 'user')->orderBy('created_at', 'ASC')->get();
				$allcategory = Category::all();
				return view('user-category.index', compact('hash', 'post', 'allpost', 'allcategory'));
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
