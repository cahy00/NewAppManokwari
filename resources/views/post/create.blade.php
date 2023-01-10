@extends('admin-layouts.template')

@section('title')
		Create - Kantor Regional BKN XIV Manokwari
@endsection

@section('content')
<div class="container-fluid">
	<h1 class="h3 mb-2 text-gray-800">Table Postingan</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="row">
		<div class="col-lg-12">
			<div class="p-5">
				@if (session('success'))
				<div class="alert alert-primary" role="alert">
					{{session('success')}}
				</div>
				@endif
				<form class="user" action="/admin/post" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label for="">Title</label>
						<input
							type="text"
							class="form-control"
							id="exampleInputEmail"
							aria-describedby="emailHelp"
							name="title"
							autofocus
							required
						/>
					<div class="form-group">
						<label for="">Category</label>
						<select name="category_id" id="" class="form-control">
							@foreach ($category as $item)
								<option value="{{$item->id}}">{{$item->name}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label for="formFile" class="form-label">Thumbnail</label>
						<input class="form-control" type="file" id="formFile" name="thumbnail">
					</div>
					<div class="form-group">
						<label for="">Body Post</label>
						<textarea class="ckeditor form-control" name="body"></textarea>
				</div>
					<button
						type="submit"
						class="btn btn-primary btn-user btn-block">
						Submit
					</button>
					<hr />
				</form>
				<hr />
			</div>
		</div>
	</div>
</div>
</div>
@endsection

@push('script')
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
@endpush