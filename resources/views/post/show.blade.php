@extends('admin-layouts.template')

@section('title')
		Show - Kantor Regional BKN XIV Manokwari
@endsection

@section('content')
<div class="container-fluid">
	<h1 class="h3 mb-2 text-gray-800">Table Postingan</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
		<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">
					| <a href="/admin/post/edit/{{$post->id}}">Edit</a> | 
						<a href="/admin/post/delete/{{$post->id}}">Delete</a>
				</h6>
		</div>
		<div class="card-body">
				<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<tbody>
										<tr>
											<td>Title</td>
											<td>{{$post->title}}</td>
										</tr>
										<tr>
											<td>Category</td>
											<td>{{$post->category->name}}</td>
										</tr>
										<tr>
											<td>Authors</td>
											<td>{{$post->user->name}}</td>
										</tr>
										<tr>
											<td>Thumbnail</td>
											<td><img src="{{asset($post->thumbnail)}}" alt="" class="img-thumbnail" width="50%" height="auto"></td>
										</tr>
										<tr>
											<td>Body</td>
											<td>{!!$post->body!!}</td>
										</tr>
										<tr>
											<td>Published at</td>
											<td>20 Des 2022</td>
										</tr>
								</tbody>
						</table>
				</div>
		</div>
</div>
</div>
@endsection