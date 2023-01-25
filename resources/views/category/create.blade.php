@extends('admin-layouts.template')

@section('title')
		Kantor Regional BKN XIV Manokwari - Create
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
			<div class="col-lg-6">
				<div class="p-5">
					@if (session('success'))
					<div class="alert alert-primary" role="alert">
						{{session('success')}}
					</div>
					@endif
					@if (session('error'))
					<div class="alert alert-danger" role="alert">
						{{session('error')}}
					</div>
					@endif
					<form class="user" action="/admin/category/create" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
							<label for="">Category</label>
							<input
								type="text"
								class="form-control @error('name') is-invalid @enderror"
								id="exampleInputEmail"
								name="name"
								autofocus
								required
								value="{{old('name')}}"
								placeholder="Input Category"
							/>
							@error('name')
							<div class="invalid-feedback">
								{{$message}}
							</div>
							@enderror
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
			<div class="col-lg-6">
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
									<tr>
											<th>#</th>
											<th>Title</th>
											<th>Action</th>
									</tr>
							</thead>
							<tbody>
								@foreach ($category as $item)
									<tr>
										<td>{{$loop->iteration}}</td>
										<td>{{$item->name}}</td>
										<td>Edit</td>
									</tr>
								@endforeach
							</tbody>
					</table>
					</div>
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
        $('#summernote').summernote('isEmpty');
    });
</script>

@endpush