@extends('admin-layouts.template')

@section('title')
		Create - Kantor Regional BKN XIV Manokwari
@endsection

@push('style')
{{-- <script src="//cdn.ckeditor.com/4.20.1/full/ckeditor.js"></script> --}}
	<link rel="stylesheet" href="{{asset('vendor/summernote/summernote.min.css')}}">
		
@endpush
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
								class="form-control @error('title') is-invalid @enderror"
								id="exampleInputEmail"
								name="title"
								autofocus
								required
								value="{{old('title')}}"
								placeholder="Input Title"
							/>
							@error('title')
							<div class="invalid-feedback">
								{{$message}}
							</div>
							@enderror
						</div>
						<div class="form-group">
							<label for="">Category</label>
							<select name="category_id" id="" class="form-control">
								@foreach ($category as $item)
									<option value="{{$item->id}}">{{$item->name}}</option>
								@endforeach
							</select>
							@error('title')
							<div class="invalid-feedback">
								{{$message}}
							</div>
							@enderror
						</div>
						<div class="form-group">
							<label for="formFile" class="form-label">Thumbnail</label>
							<input class="form-control @error('thumbnail') is-invalid @enderror" type="file" id="formFile" name="thumbnail">
							@error('thumbnail')
							<div class="invalid-feedback">
								{{$message}}
							</div>
							@enderror
						</div>
						<div class="form-group">
							<label for="">Body Post</label>
							@error('body')
									<p class="text-danger">{{$message}}</p>
							@enderror
							<textarea class="@error('body') is-invalid @enderror" name="body" id="summernote"></textarea>
					</div>
					{{-- <textarea name="editor1"></textarea> --}}
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
<script src="{{asset('vendor/summernote/summernote.min.js')}}"></script>
<script>
	$(document).ready(function() {
        $('#summernote').summernote();
    });
</script>
{{-- <script>
	CKEDITOR.replace('body',{
		filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl: '/ckfinder/ckfinder.html?type=Images',
    filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserImageUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images'
	});
</script> --}}
{{-- <script>
	var editor = CKEDITOR.replace( 'body' );
	CKFinder.setupCKEditor( editor );
</script> --}}
{{-- <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script> --}}
@endpush