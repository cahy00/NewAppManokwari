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
								class="img-fluid" width="400px" height="auto"
						/></a>
						<div class="post-meta">
							<span class="date"><a href="/category/show/{{$p->category->id}}">{{$p->category->name}}</a></span>
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
					@foreach ($postcuy as $p)
					<div class="post-entry-1">
						<a href="/post/show/{{$p->id}}"
							><img
								src="{{asset($p->thumbnail)}}"
								alt=""
								class="img-fluid" width="400px" height="auto"
						/></a>
						<div class="post-meta">
							<span class="date"><a href="/category/show/{{$p->category->id}}">{{$p->category->name}}</a></span>
							<span class="mx-1">&bullet;</span>
							<span>Jul 5th '22</span>
						</div>
						<h2>
							<a href="/post/show/{{$p->id}}">{{$p->title}}</a>
						</h2>
					</div>
					@endforeach
				</div>

				<!-- Trending Section -->
				<div class="col-lg-4">
					<div class="trending">
						<h3 style="text-align: center">Pengumuman</h3>
						<ul class="trending-post">
							<li>
								<a href="/post/show/">
									{{-- <span class="number">{{$loop->iteration}}</span> --}}
									<h5>Layanan Pendampingan dan Sosialisasi Kartu ASN Virtual</h5>
									<img src="{{asset('assets/bkn/kartuasn.jpg')}}" alt="" class="img-fluid">
									{{-- <span class="author">{{$trending->user->name}}</span> --}}
								</a>
							</li>
							<li>
								<a href="/post/show/">
									<h5>Konsultasi Pelayanan Cepat</h5>
									<img src="{{asset('assets/bkn/kopace.jpeg')}}" alt="" class="img-fluid">
								</a>
							</li>


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