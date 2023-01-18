@extends('user-layouts.single-post')

@section('content')
<div class="single-post">
	<div class="post-meta"><span class="date">{{$post->category->name}}</span> <span class="mx-1">&bullet;</span> <span>{{$post->created_at->format('M  d . Y')}}</span></div>
	<h1 class="mb-5">{{$post->title}}</h1>
	<picture class="my-4">
		<img src="{{asset($post->thumbnail)}}" alt="" class="img-fluid img-thumbnail">
	</picture>
	<br><hr>
	<div class="d-flex align-items-center author">
		<div class="photo">
			<img
				src="{{asset('assets/img/person-1.jpg')}}"
				alt=""
				class="img-fluid"
			/>
		</div>
		<div class="name">
			<h3 class="m-0 p-0">{{$post->user->name}}</h3>
		</div>
	</div>
	<hr>
	<p style="text-align: justify">{!!$post->body!!}</p>
</div>
@endsection