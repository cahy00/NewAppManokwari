@extends('user-layouts.template2')

@section('content')
<div class="header-bg page-area">
	<div class="container position-relative">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="slider-content text-center">
					<div class="header-bottom">
						<div class="layer2">
							<h1 class="title2">Postingan</h1>
						</div>
						<div class="layer3">
							<h2 class="title3">Berita Kepegawaian</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="blog-page area-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4">
				<div class="page-head-blog">
					<div class="single-blog-page">
						<!-- search option start -->
						<form action="#">
							<div class="search-option">
								<input type="text" placeholder="Search...">
								<button class="button" type="submit">
									<i class="bi bi-search"></i>
								</button>
							</div>
						</form>
						<!-- search option end -->
					</div>
					<div class="single-blog-page">
						<!-- recent start -->
						<div class="left-blog">
							<h4>recent post</h4>
							<div class="recent-post">
								<!-- start single post -->
								@foreach ($allpost as $allpost)
								
								<div class="recent-single-post">
									<div class="post-img">
										<a href="#">
											<img src="{{asset($allpost->thumbnail)}}" alt="">
										</a>
									</div>
									<div class="pst-content">
										<p><a href="#">{{$allpost->title}}</a></p>
									</div>
								</div>

								@endforeach
								<!-- End single post -->
							</div>
						</div>
						<!-- recent end -->
					</div>
					<div class="single-blog-page">
						<div class="left-blog">
							<h4>categories</h4>
							<ul>
								@foreach ($allcategories as $category)
								<li>
									<a href="{{route('category.show', [$hash->encodeHex($category->id), $category->slug])}}">{{$category->name}}</a>
								</li>
								@endforeach
							</ul>
						</div>
					</div>dskj
					<div class="single-blog-page">
						<div class="left-blog">
							<h4>archive</h4>
							<ul>
								<li>
									<a href="#">07 July 2016</a>
								</li>
								<li>
									<a href="#">29 June 2016</a>
								</li>
								<li>
									<a href="#">13 May 2016</a>
								</li>
								<li>
									<a href="#">20 March 2016</a>
								</li>
								<li>
									<a href="#">09 Fabruary 2016</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="single-blog-page">
						<div class="left-tags blog-tags">
							<div class="popular-tag left-side-tags left-blog">
								<h4>popular tags</h4>
								<ul>
									<li><a href="#">ASNkinibeda</a></li>
									<li><a href="#">ASNPelayanPublik</a></li>
									<li><a href="#">PPPK2023</a></li>
									<li><a href="#">AgenPerubahan</a></li>
									<li><a href="#">Sekdin2022</a></li>
									<li><a href="#">ReformasiBKN</a></li>
									<li><a href="#">SatuDataASN</a></li>
									<li><a href="#">ASNBelajarMandiri</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End left sidebar -->
			<!-- Start single blog -->
			<div class="col-md-8 col-sm-8 col-xs-12">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<!-- single-blog start -->
						<article class="blog-post-wrapper">
							<div class="post-thumbnail">
								<img src="{{asset($post->thumbnail)}}" alt="" class="img-fluid"/>
							</div>
							<div class="post-information">
								<h2>{{$post->title}}</h2>
								<div class="entry-meta">
									<span class="author-meta"><i class="bi bi-person"></i> <a href="#">{{$post->user->name}}</a></span>
									<span><i class="bi bi-clock"></i> {{ $post->created_at->format('F d, Y') }}</span>
									<span class="tag-meta">
										<i class="bi bi-folder"></i>
										<a href="#">painting</a>,
										<a href="#">work</a>
									</span>
									<span>
										<i class="bi bi-tags"></i>
										<a href="#">tools</a>,
										<a href="#"> Humer</a>,
										<a href="#">House</a>
									</span>
									<span><i class="bi bi-chat"></i> <a href="#">6 comments</a></span>
								</div>
								<div class="entry-content">
									{!! $post->body !!}
								</div>
							</div>
						</article>
						<div class="clear"></div>
						<div class="single-post-comments">
							<div class="comments-area">
								<div class="comments-heading">
									<h3>6 comments</h3>
								</div>
								<div class="comments-list">
									<ul>
										<li class="threaded-comments">
											<div class="comments-details">
												<div class="comments-list-img">
													<img src="assets/img/blog/b02.jpg" alt="post-author">
												</div>
												<div class="comments-content-wrap">
													<span>
														<b><a href="#">demo</a></b>
														Post author
														<span class="post-time">October 6, 2014 at 4:25 pm</span>
														<a href="#">Reply</a>
													</span>
													<p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur</p>
												</div>
											</div>
										</li>
										<li>
											<div class="comments-details">
												<div class="comments-list-img">
													<img src="assets/img/blog/b02.jpg" alt="post-author">
												</div>
												<div class="comments-content-wrap">
													<span>
														<b><a href="#">admin</a></b>
														Post author
														<span class="post-time">October 6, 2014 at 6:18 pm </span>
														<a href="#">Reply</a>
													</span>
													<p>Quisque orci nibh, porta vitae sagittis sit amet, vehicula vel mauris. Aenean at justo dolor. Fusce ac sapien bibendum, scelerisque libero nec</p>
												</div>
											</div>
										</li>
										<li class="threaded-comments">
											<div class="comments-details">
												<div class="comments-list-img">
													<img src="assets/img/blog/b02.jpg" alt="post-author">
												</div>
												<div class="comments-content-wrap">
													<span>
														<b><a href="#">demo</a></b>
														Post author
														<span class="post-time">October 6, 2014 at 7:25 pm</span>
														<a href="#">Reply</a>
													</span>
													<p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur</p>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<div class="comment-respond">
								<h3 class="comment-reply-title">Leave a Reply </h3>
								<span class="email-notes">Your email address will not be published. Required fields are marked *</span>
								<form action="#">
									<div class="row">
										<div class="col-lg-4 col-md-4">
											<p>Name *</p>
											<input type="text" />
										</div>
										<div class="col-lg-4 col-md-4">
											<p>Email *</p>
											<input type="email" />
										</div>
										<div class="col-lg-4 col-md-4">
											<p>Website</p>
											<input type="text" />
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12 comment-form-comment">
											<p>Website</p>
											<textarea id="message-box" cols="30" rows="10"></textarea>
											<input type="submit" value="Post Comment" />
										</div>
									</div>
								</form>
							</div>
						</div>
						<!-- single-blog end -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection