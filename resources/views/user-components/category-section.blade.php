@extends('user-layouts.template')

@push('style')
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v15.0" nonce="oZsVg1KS"></script>
@endpush

@section('posts')
<section class="single-post-content">
	<div class="container">
		<div class="row">
			<div class="col-md-9 post-content" data-aos="fade-up">

				<div class="d-md-flex post-entry-2 half">
					<a href="single-post.html" class="me-4 thumbnail">
						<img src="assets/img/post-landscape-6.jpg" alt="" class="img-fluid">
					</a>
					<div>
						<div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
						<h3><a href="single-post.html">What is the son of Football Coach John Gruden, Deuce Gruden doing Now?</a></h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat exercitationem magni voluptates dolore. Tenetur fugiat voluptates quas, nobis error deserunt aliquam temporibus sapiente, laudantium dolorum itaque libero eos deleniti?</p>
						<div class="d-flex align-items-center author">
							<div class="photo"><img src="assets/img/person-2.jpg" alt="" class="img-fluid"></div>
							<div class="name">
								<h3 class="m-0 p-0">Wade Warren</h3>
							</div>
						</div>
					</div>
				</div>
				

			</div>
			<div class="col-md-3">
				<!-- ======= Sidebar ======= -->
				<div class="aside-block">

					<ul class="nav nav-pills custom-tab-nav mb-4" id="pills-tab" role="tablist">
						<li class="nav-item" role="presentation">
							<button class="nav-link active" id="pills-popular-tab" data-bs-toggle="pill" data-bs-target="#pills-popular" type="button" role="tab" aria-controls="pills-popular" aria-selected="true">Popular</button>
						</li>
					</ul>

					<div class="tab-content" id="pills-tabContent">

						<!-- Popular -->
						<div class="tab-pane fade show active" id="pills-popular" role="tabpanel" aria-labelledby="pills-popular-tab">
							@foreach ($allpost as $allpost)
								<div class="post-entry-1 border-bottom">
									<div class="post-meta"><span class="date">{{$allpost->category->name}}</span> <span class="mx-1">&bullet;</span> <span>{{$allpost->created_at->format('M  d . Y')}}</span></div>
									<h2 class="mb-2"><a href="/post/show/{{$allpost->id}}">{{$allpost->title}}</a></h2>
									<span class="author mb-3 d-block">{{$allpost->user->name}}</span>
								</div>
							@endforeach
						</div> <!-- End Popular -->

					</div>
				</div>

				<div class="aside-block">
					<h3 class="aside-title">Video</h3>
					<div class="video-post">
						<iframe class="video-post" src="https://www.youtube.com/embed/xNxRsR2bVJ0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
					</div>
				</div><!-- End Video -->

				<div class="aside-block">
					<h3 class="aside-title">Categories</h3>
					<ul class="aside-links list-unstyled">
						@foreach ($category as $item)
							<li><a href="{{$item->id}}"><i class="bi bi-chevron-right"></i> {{$item->name}}</a></li>
						@endforeach
					</ul>
				</div><!-- End Categories -->

				<div class="aside-block">
					<h3 class="aside-title">Tags</h3>
					<ul class="aside-tags list-unstyled">
						<li><a href="#">ASNkinibeda</a></li>
						<li><a href="#">ASNPelayanPublik</a></li>
						<li><a href="#">PPPK2023</a></li>
						<li><a href="#">AgenPerubahan</a></li>
						<li><a href="#">Sekdin2022</a></li>
						<li><a href="#">ReformasiBKN</a></li>
						<li><a href="#">SatuDataASN</a></li>
						<li><a href="#">ASNBelajarMandiri</a></li>
					</ul>
				</div><!-- End Tags -->

			</div>
		</div>
	</div>
</section>
@endsection

