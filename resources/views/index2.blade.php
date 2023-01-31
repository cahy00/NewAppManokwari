@extends('user-layouts.template2')

@section('content')
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
							<img src="assets/img/about/1.jpg" alt="" width="700px" height="25%">
						</a>
					</div>
				</div>
			</div>
			<!-- single-well end-->
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="well-middle">
					<div class="single-well">
						<a href="#">
							<h4 class="sec-head">{{$item->title}}</h4>
						</a>
						<p>
							{!! Str::limit($item->excerpt, '150') !!}
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
								<a href="#">13 comments</a>
							</span>
							<span class="date-type">
								<i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
							</span>
						</div>
						<div class="blog-text">
							<h4>
								<a href="blog.html">{{$latepost->title}}</a>
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