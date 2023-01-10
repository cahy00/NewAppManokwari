<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Storage;



class AdminpostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
				// $post = Post::where('user_id', auth()->user()->id)->get();
				$post = Post::with(['category', 'user'])->get();
        return view('post.index', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
				$category = Category::all();
        return view('post.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
				$validate = $request->validate([
					'title' => 'required',
					'body' => 'required',
					'category_id' => 'required',
					'thumbnail' => 'image|file|max:1024'
				]);

				// $validate['slug'] = Str::slug($request->title);
				// $validate['user_id'] = auth()->user()->id;
				// $validate['excerpt'] = Str::limit(strip_tags($request->body, '50'));

				// if($request->file('thumbnail')){
				// 	$validate['thumbnail'] = $request->file('thumbnail')->store('post-thumbnail');
				// }
				// Post::create($validate);

				if($request->file('thumbnail')->isValid())
				{
					$file = $request->file('thumbnail');
					$name = date('YmdHis');
					$extension = $file->getClientOriginalExtension();
					$newName = $name . "." . $extension;
					$uploads   = Storage::putFileAs('public/thumbnail', $request->file('thumbnail'), $newName);
				}
				
				// dd([
				// 	'title' => $request->title,
				// 	'slug' => Str::slug($request->title),
				// 	'category_id' => $request->category_id,
				// 	'body' => $request->body,
				// 	'user_id' => auth()->user()->id,
				// 	'thumbnail' => 'storage/image/'. $newName,
				// 	'excerpt' => Str::limit(strip_tags($request->body, '50'))
				// ]);
        $post = Post::create([
					'title' => $request->title,
					'slug' => Str::slug($request->title),
					'category_id' => $request->category_id,
					'body' => $request->body,
					'user_id' => auth()->user()->id,
					'thumbnail' => 'storage/thumbnail/'. $newName,
					'excerpt' => Str::limit(strip_tags($request->body, '50'))
				]);

				return redirect('/admin/post')->with('success', 'Data Berhasil di upload');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
				return view('post.show', compact('post'));
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