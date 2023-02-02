@extends('user-layouts.template2')

@section('content')
		    <!-- ======= Blog Header ======= -->
				<div class="header-bg page-area">
					<div class="container position-relative">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="slider-content text-center">
									<div class="header-bottom">
										<div class="layer2">
											<h1 class="title2">My Blog</h1>
										</div>
										<div class="layer3">
											<h2 class="title3">Profesional Blog Page</h2>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Blog Header -->
		
				<!-- ======= Blog Page ======= -->
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
														<p><a href="#"> Redug Lerse dolor sit amet consect adipis elit.</a></p>
													</div>
												</div>
												@endforeach
											</div>
										</div>
										<!-- recent end -->
									</div>
									<div class="single-blog-page">
										<div class="left-blog">
											<h4>categories</h4>
											<ul>
												@foreach ($allcategory as $category)
														
												<li>
													<a href="{{route('category.show', [$hash->encodeHex($category->id), $category->slug])}}">{{$category->name}}</a>
												</li>
												@endforeach
											</ul>
										</div>
									</div>
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
													<li>
														<a href="#">Portfolio</a>
													</li>
													<li>
														<a href="#">Project</a>
													</li>
													<li>
														<a href="#">Design</a>
													</li>
													<li>
														<a href="#">Website</a>
													</li>
													<li>
														<a href="#">Joomla</a>
													</li>
													<li>
														<a href="#">Html</a>
													</li>
													<li>
														<a href="#">wordpress</a>
													</li>
													<li>
														<a href="#">Masonry</a>
													</li>
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
									@foreach ($post->posts as $item)
									<div class="col-md-12 col-sm-12 col-xs-12">
										<div class="single-blog">
											<div class="single-blog-img">
												<a href="{{ route('post.showPost2', [$hash->encodeHex($item->id), $item->slug] ) }}">
													<img src="{{asset($item->thumbnail)}}" alt="">
												</a>
											</div>
											<div class="blog-meta">
												<span class="comments-type">
													<i class="bi bi-chat"></i>
													<a href="#">11 comments</a>
												</span>
												<span class="date-type">
													<i class="bi bi-calendar"></i>2016-03-05 / 09:10:16
												</span>
											</div>
											<div class="blog-text">
												<h4>
													<a href="#">{{$item->title}}</a>
												</h4>
												<p>
													{{$item->excerpt}}
												</p>
											</div>
											<span>
												<a href="blog-details.html" class="ready-btn">Read more</a>
											</span>
										</div>
									</div>
									@endforeach
									<div class="blog-pagination">
										<ul class="pagination">
											<li class="page-item"><a href="#" class="page-link">&lt;</a></li>
											<li class="page-item active"><a href="#" class="page-link">1</a></li>
											<li class="page-item"><a href="#" class="page-link">2</a></li>
											<li class="page-item"><a href="#" class="page-link">3</a></li>
											<li class="page-item"><a href="#" class="page-link">&gt;</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Blog Page -->
@endsection