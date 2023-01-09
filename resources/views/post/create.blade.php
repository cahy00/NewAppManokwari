@extends('admin-layouts.template')

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
				@if (session('loginError'))
				<div class="alert alert-danger" role="alert">
					{{session('loginError')}}
				</div>
				@endif
				<form class="user" action="/login" method="POST">
					@csrf
					<div class="form-group">
						<label for="">Title</label>
						<input
							type="text"
							class="form-control"
							id="exampleInputEmail"
							aria-describedby="emailHelp"
							name="email"
							autofocus
							required
						/>
					</div>
					<div class="form-group">
						<label for="">Slug</label>
						<input
							type="text"
							class="form-control"
							id="exampleInputPassword"
							name="password"
							required
						/>
					</div>
					<div class="form-group">
						<label for="">Category</label>
						<select name="" id="" class="form-control">
							@foreach ($category as $item)
								<option value="{{$item->id}}">{{$item->name}}</option>
							@endforeach
						</select>
					</div>
					<button
						type="submit"
						class="btn btn-primary btn-user btn-block">
						Login
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