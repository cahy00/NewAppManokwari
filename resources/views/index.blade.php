@extends('user-layouts.template')

@section('hero')
<section id="hero-slider" class="hero-slider">
	@include('user-layouts.hero')
</section>
@endsection

@section('posts')
<div class="container" data-aos="fade-up">
	<div class="row g-5">
		<div class="col-lg-4">
			<div class="post-entry-1 lg">
				@foreach ($sidepost as $sp)
				<a href="single-post.html"><img
						src="{{asset($sp->thumbnail)}}"
						alt=""
						class="card-img-top"/></a>
				<div class="post-meta">
					<span class="date"><a href="/category/show/{{$sp->category->slug}}">{{$sp->category->name}}</a></span>
					<span class="mx-1">&bullet;</span> <span>{{$sp->created_at->format('M d.Y')}}</span>
				</div>
						
				<h2>
					<a href="/post/show/{{$sp->id}}">{{$sp->title}}</a>
				</h2>
				<p class="mb-4 d-block">
					{!! $sp->excerpt !!}
				</p>

				<div class="d-flex align-items-center author">
					<div class="photo">
						<img
							src="assets/img/person-1.jpg"
							alt=""
							class="img-fluid"
						/>
					</div>
					<div class="name">
						<h3 class="m-0 p-0">{{$sp->user->name}}</h3>
					</div>
				</div>
				@endforeach

			</div>
		</div>

		<div class="col-lg-8">
			<div class="row g-5">
				<div class="col-lg-4 border-start custom-border">
					@foreach ($post as $p)
					<div class="post-entry-1">
						<a href="/post/show/{{$p->id}}"
							><img
								src="{{asset($p->thumbnail)}}"
								alt=""
								class="img-fluid" width="200px" height="auto"
						/></a>
						<div class="post-meta">
							<span class="date"><a href="/category/show/{{$sp->category->id}}">{{$p->category->name}}</a></span>
							<span class="mx-1">&bullet;</span>
							<span>Jul 5th '22</span>
						</div>
						<h2>
							<a href="/post/show/{{$p->id}}">{{$p->title}}</a>
						</h2>
					</div>
					@endforeach
				</div>
				<div class="col-lg-4 border-start custom-border">
					<div class="post-entry-1">
						<a href="single-post.html"
							><img
								src="assets/img/post-landscape-3.jpg"
								alt=""
								class="img-fluid"
						/></a>
						<div class="post-meta">
							<span class="date">Business</span>
							<span class="mx-1">&bullet;</span>
							<span>Jul 5th '22</span>
						</div>
						<h2>
							<a href="single-post.html"
								>6 Easy Steps To Create Your Own Cute Merch For
								Instagram</a
							>
						</h2>
					</div>
					<div class="post-entry-1">
						<a href="single-post.html"
							><img
								src="assets/img/post-landscape-6.jpg"
								alt=""
								class="img-fluid"
						/></a>
						<div class="post-meta">
							<span class="date">Tech</span>
							<span class="mx-1">&bullet;</span>
							<span>Mar 1st '22</span>
						</div>
						<h2>
							<a href="single-post.html"
								>10 Life-Changing Hacks Every Working Mom Should Know</a
							>
						</h2>
					</div>
					<div class="post-entry-1">
						<a href="single-post.html"
							><img
								src="assets/img/post-landscape-8.jpg"
								alt=""
								class="img-fluid"
						/></a>
						<div class="post-meta">
							<span class="date">Travel</span>
							<span class="mx-1">&bullet;</span>
							<span>Jul 5th '22</span>
						</div>
						<h2>
							<a href="single-post.html"
								>5 Great Startup Tips for Female Founders</a
							>
						</h2>
					</div>
				</div>

				<!-- Trending Section -->
				<div class="col-lg-4">
					<div class="trending">
						<h3>Trending</h3>
						<ul class="trending-post">
							@foreach ($trending as $trending)
							<li>
								<a href="/post/show/{{$trending->id}}">
									<span class="number">{{$loop->iteration}}</span>
									<h3>
										{{$trending->title}}
									</h3>
									{{-- <span class="author">{{$trending->user->name}}</span> --}}
									<span class="author">{{$trending->category->name}}</span>
								</a>
							</li>
							@endforeach

						</ul>
					</div>
				</div>
				<!-- End Trending Section -->
			</div>
		</div>
	</div>
	<!-- End .row -->
</div>
@endsection