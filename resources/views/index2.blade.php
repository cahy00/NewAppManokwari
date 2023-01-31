@extends('user-layouts.template2')

@section('content')
<section id="hero">
	<div class="hero-container">
		<div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

			<ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

			<div class="carousel-inner" role="listbox">

				<div class="carousel-item active" style="background-image: url('{{asset('assets/bkn/ba.png')}}')">
					<div class="carousel-container">
						<div class="container">
						</div>
					</div>
				</div>

				<div class="carousel-item" style="background-image: url('{{asset('assets/bkn/bkn_mkw.png')}}')">
					<div class="carousel-container">
						<div class="container">
							<h2 class="animate__animated animate__fadeInDown">Badan Kepegawaian Negara</h2>
							<p class="animate__animated animate__fadeInUp">
								Kantor Regional XIV Manokwari
							</p>
						</div>
					</div>
				</div>

			</div>

			<a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
				<span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
			</a>

			<a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
				<span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
			</a>

		</div>
	</div>
</section>
<div id="about" class="about-area area-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="section-headline text-center">
					<h2>Berita Utama</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- single-well start-->
			@foreach ($post as $item)
					
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="well-left">
					<div class="single-well">
						<a href="#">
							<img src="assets/img/about/2.jpg" class="position-relative" alt="" width="700px" height="25%">
						</a>
					</div>
				</div>
			</div>
			<!-- single-well end-->
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="well-middle">
					<div class="single-well">
						<a href="{{ route('post.showPost2', [$hash->encodeHex($item->id), $item->slug] ) }}">
							<h4 class="sec-head">{{$item->title}}</h4>
						</a>
						<p>
							{{ Str::limit($item->excerpt, '250') }}
						</p>
					</div>
				</div>
			</div>

			@endforeach
			<!-- End col-->
		</div>
	</div>
</div>

<div id="blog" class="blog-area">
	<div class="blog-inner area-padding">
		<div class="blog-overly"></div>
		<div class="container ">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="section-headline text-center">
						<h2>Berita Terbaru</h2>
					</div>
				</div>
			</div>
			<div class="row">
				@foreach ($latepost as $latepost)
						
				<!-- Start Left Blog -->
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="single-blog">
						<div class="single-blog-img">
							<a href="blog.html">
								<img src="{{asset($latepost->thumbnail)}}" alt="" width="700px" height="100px">
							</a>
						</div>
						<div class="blog-meta">
							<span class="comments-type">
								<i class="fa fa-comment-o"></i>
								<a href="#">{{$latepost->user->name}}</a>
							</span>
							<span class="date-type">
								<i class="fa fa-calendar"></i>{{$latepost->created_at}}
							</span>
						</div>
						<div class="blog-text">
							<h4>
								<a href="{{ route('post.showPost2', [$hash->encodeHex($latepost->id), $latepost->slug] ) }}">{{$latepost->title}}</a>
							</h4>
							<p>
								{!! strip_tags($latepost->excerpt, '100') !!}
							</p>
						</div>
						<span>
							<a href="blog.html" class="ready-btn">Read more</a>
						</span>
					</div>
					<!-- Start single blog -->
				</div>
				@endforeach
				<!-- End Right Blog-->
			</div>
		</div>
	</div>
</div>
@endsection