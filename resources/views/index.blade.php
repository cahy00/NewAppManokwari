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
				<a href="single-post.html"><img
						src="assets/img/post-landscape-1.jpg"
						alt=""
						class="img-fluid"/></a>
				@foreach ($sidepost as $sp)
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
						<a href="single-post.html"
							><img
								src="assets/img/post-landscape-2.jpg"
								alt=""
								class="img-fluid"
						/></a>
						<div class="post-meta">
							<span class="date">{{$p->category->name}}</span>
							<span class="mx-1">&bullet;</span>
							<span>Jul 5th '22</span>
						</div>
						<h2>
							<a href="single-post.html">{{$p->title}}</a>
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
							<li>
								<a href="single-post.html">
									<span class="number">1</span>
									<h3>
										The Best Homemade Masks for Face (keep the Pimples
										Away)
									</h3>
									<span class="author">Jane Cooper</span>
								</a>
							</li>
							<li>
								<a href="single-post.html">
									<span class="number">2</span>
									<h3>
										17 Pictures of Medium Length Hair in Layers That
										Will Inspire Your New Haircut
									</h3>
									<span class="author">Wade Warren</span>
								</a>
							</li>
							<li>
								<a href="single-post.html">
									<span class="number">3</span>
									<h3>
										13 Amazing Poems from Shel Silverstein with Valuable
										Life Lessons
									</h3>
									<span class="author">Esther Howard</span>
								</a>
							</li>
							<li>
								<a href="single-post.html">
									<span class="number">4</span>
									<h3>
										9 Half-up/half-down Hairstyles for Long and Medium
										Hair
									</h3>
									<span class="author">Cameron Williamson</span>
								</a>
							</li>
							<li>
								<a href="single-post.html">
									<span class="number">5</span>
									<h3>
										Life Insurance And Pregnancy: A Working Mom’s Guide
									</h3>
									<span class="author">Jenny Wilson</span>
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