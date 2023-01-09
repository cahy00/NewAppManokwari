@extends('admin-layouts.template')

@section('content')
<div class="container-fluid">
	<h1 class="h3 mb-2 text-gray-800">Table Postingan</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
		<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary"><a href="/admin/create">Tambah Postingan</a></h6>
		</div>
		<div class="card-body">
				<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
										<tr>
												<th>#</th>
												<th>Title</th>
												<th>Category</th>
												<th>Action</th>
										</tr>
								</thead>
								<tbody>
									@foreach ($post as $p)
										<tr>
											<td>{{$loop->iteration}}</td>
											<td>{{$p->title}}</td>
											<td>{{$p->category->name}}</td>
											<td> <a href="/admin/post/show/{{$p->id}}">Show</a></td>
										</tr>
									@endforeach
								</tbody>
						</table>
				</div>
		</div>
</div>
</div>
@endsection

